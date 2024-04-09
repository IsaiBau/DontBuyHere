<?php

namespace App\Http\Controllers;
use App\Http\Requests\addUserRequests;
use App\Models\Establecimiento;
use App\Models\Resena;
use App\Models\Tipo_establecimiento;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function  index() {
        $activeLink = 'dashboard';
        return view('dashboard', compact('activeLink'));
    }
    function  indexEs() {
        $activeLink = 'establecimiento';
        $establecimiento = Establecimiento::with('tipoEstablecimiento')->get();
        return view('establecimiento', compact('activeLink'), ['es'=> $establecimiento]);
    }
    function  indexRe() {
        $activeLink = 'reviews';
        $resena = Resena::with('establecimiento', 'user')->get();
        return view('reviews', compact('activeLink', 'resena'));
    }
    function  indexUsu() {
        $activeLink = 'users';
        $usuarios = User::All();
        return view('users', compact('activeLink'), ['usu'=> $usuarios]);
    }
    function logout(){
        return redirect()->route('login.index');
    }
    //CRUD USUARIOS
    public function edit(User $usuario){
        return view('usersEdit', compact('usuario'));
    }

    public function update(addUserRequests $request, User $usuario){
        $usuario->update([
            'name'=>$request->name,
            'user'=>$request->user,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect()->action([DashboardController::class, 'indexUsu'])->with('success-update', 'Edición completa');
    }

    public function destroy(User $usuario){
        $usuario->delete();
        return redirect()->action([DashboardController::class, 'indexUsu'])->with('success-delete', 'Usuario eliminado con éxito');
    }
    //CRUD ESTABLECIMIENTOS
    public function editEs(Establecimiento $establecimiento){
        return view('edit_establecimiento', compact('establecimiento'));
    }
    public function index2(){
        return 'dashboard';
    }
}
