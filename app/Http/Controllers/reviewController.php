<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_establecimiento;
use App\Models\Establecimiento; 
use App\Models\Resena; 

class reviewController extends Controller
{
    public function index()
    {
        $tiposEstablecimientos = Tipo_establecimiento::all();
        $establecimientos = Establecimiento::all();
        
        return view('review', compact('tiposEstablecimientos', 'establecimientos'));
    }
    public function guardarEstablecimiento(Request $request)
    {
        $request->validate([
            'localNameAdd' => 'required|string|max:255',
            'localTypeAdd' => 'required|exists:tipo_establecimientos,id',
            'address' => 'required|string|max:255',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ], [
            'localNameAdd.required' => 'El nombre del establecimiento es obligatorio.',
            'localTypeAdd.required' => 'El tipo de establecimiento es obligatorio.',
            'address.required' => 'La dirección es obligatoria.',
            'photo.image' => 'El archivo debe ser una imagen.',
            'photo.mimes' => 'El archivo debe ser de tipo JPEG, PNG, JPG o GIF.',
            'photo.max' => 'El tamaño máximo de la imagen es de 2MB.',
        ]);
        

        $establecimiento = new Establecimiento();
        $establecimiento->name = $request->input('localNameAdd');
        $establecimiento->id_tipo_establecimiento = $request->input('localTypeAdd');
        $establecimiento->direccion = $request->input('address');

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $establecimiento->url_imagen = 'images/' . $imageName;
        }

        $establecimiento->calificacion = 0;

        $establecimiento->save();

        return redirect('/review#formularioAnchor');
    }

    public function guardarResena(Request $request)
    {
        $request->validate([
            'localName' => 'required|string|max:255',
            'localTypeAdd' => 'required|exists:tipo_establecimientos,id',
            'address' => 'required|string|max:255',
            'review' => 'required|string|max:255',
            'calificacion' => 'required|integer|between:1,5',
            'user_id' => 'required|exists:users,id',
            'fecha' => 'required|date',
        ], [
            'localName.required' => 'El nombre del establecimiento es obligatorio.',
            'localTypeAdd.required' => 'El tipo de establecimiento es obligatorio.',
            'address.required' => 'La dirección es obligatoria.',
            'review.required' => 'La reseña es obligatoria.',
            'calificacion.required' => 'La calificación es obligatoria.',
            'calificacion.between' => 'La calificación debe estar entre 1 y 5.',
            'user_id.required' => 'El ID de usuario es obligatorio.',
            'fecha.required' => 'La fecha es obligatoria.',
        ]);

        $resena = new Resena();
        $resena->id_establecimiento = $request->input('localName');
        $resena->id_tipo_establecimiento = $request->input('localTypeAdd');
        $resena->id_user = $request->input('user_id');
        $resena->resena = $request->input('review');
        $resena->direccion = $request->input('address');
        $resena->calificacion = $request->input('calificacion');
        $resena->fecha = $request->input('fecha');

        $resena->save();

        return redirect('/review');
    }

    
}
