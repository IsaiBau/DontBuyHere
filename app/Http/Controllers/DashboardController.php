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

    public function updateEs(Request $request, Establecimiento $establecimiento){
<<<<<<< Updated upstream

        try {
            
            $establecimiento->name = $request->name;
            $establecimiento->direccion = $request->direccion;
            $establecimiento->id_tipo_establecimiento = $request->localType;
    
            
        if ($request->hasFile('url_imagen')) {
            $image = $request->file('url_imagen');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $establecimiento->url_imagen = 'img/' . $imageName;
        }
        
            $establecimiento->save();
    
            return redirect()->route('establecimiento')->with('success', 'Establecimiento actualizado correctamente.');
            
        } catch (\Exception $e) {
            
            return redirect()->back()->with('error', 'Error al actualizar el establecimiento: ' . $e->getMessage());
        }
    }
    
=======
>>>>>>> Stashed changes
        $establecimiento->update([
            'name' => $request->name,
            'direccion' => $request->direccion,
            'url_imagen' => $request->url_imagen,
        ]);
        if ($request->hasFile('FOTO')) {
            $rutaImagen = $request->file('FOTO')->store('img');
            $establecimiento->url_imagen = $rutaImagen;
        }

        $establecimiento->save();
    
        return redirect('/establecimiento')->with('success-update', 'Edición completa');
    }
<<<<<<< Updated upstream

=======
    
    
    
    
>>>>>>> Stashed changes
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
