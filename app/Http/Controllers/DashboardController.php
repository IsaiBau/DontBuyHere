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
        $establecimiento = Establecimiento::with('tipoEstablecimiento')->get();
        $resena = Resena::with('establecimiento', 'user')->get();
        return view('dashboard', compact('activeLink', 'establecimiento', 'resena'));
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
    public function updateEs(Request $request, Establecimiento $establecimiento)
{
    // Validación de datos
    $request->validate([
        'name' => 'required|string|max:255',
        'direccion' => 'required|string|max:255',
        'localType' => 'required|exists:tipo_establecimientos,id',
        'url_imagen' => 'nullable|image|max:2048', // 2MB
    ]);

    try {
        // Actualizar datos del establecimiento
        $establecimiento->name = $request->name;
        $establecimiento->direccion = $request->direccion;
        $establecimiento->id_tipo_establecimiento = $request->localType;

        // Manejo de imagen
        if ($request->hasFile('url_imagen')) {
            $path = $request->file('url_imagen')->store('establecimientos', 'public');
            $establecimiento->url_imagen = $path;
        }

        // Guardar cambios
        $establecimiento->save();

        // Redireccionar con mensaje
        return redirect()->route('nombreDeTuRuta.index')->with('success', 'Establecimiento actualizado correctamente.');
    } catch (\Exception $e) {
        // Manejo de errores
        return redirect()->back()->with('error', 'Error al actualizar el establecimiento: ' . $e->getMessage());
    }
}

    public function destroyEs(Establecimiento $establecimiento){
        $establecimiento->delete();
        return redirect()->action([DashboardController::class, 'indexEs'])->with('success-delete', 'Establecimiento eliminado con éxito');
    }
    //CRUD RESEÑAS
    public function editRe(Resena $resena){
        return view('usersEdit', compact('resena'));
    }

    public function updateRe(addUserRequests $request, Resena $usuario){
        $usuario->update([
            'name'=>$request->name,
            'user'=>$request->user,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect()->action([DashboardController::class, 'indexRe'])->with('success-update', 'Edición completa');
    }
    public function destroyRe(Resena $resena){
        $resena->delete();
        return redirect()->action([DashboardController::class, 'indexRe'])->with('success-delete', 'Reseña eliminada con éxito');
    }
    public function index2(){
        return 'dashboard';
    }
}
