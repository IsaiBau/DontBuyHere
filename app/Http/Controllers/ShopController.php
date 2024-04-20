<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establecimiento; 
use App\Models\Resena;

class ShopController extends Controller
{
    public function index()
    {
        // Obtener todos los establecimientos
        $establecimientos = Establecimiento::all();
        
        // Iterar sobre cada establecimiento para calcular la calificación promedio
        foreach ($establecimientos as $establecimiento) {
            // Obtener todas las reseñas asociadas a este establecimiento
            $resenas = Resena::where('id_establecimiento', $establecimiento->id)->get();
            
            // Calcular la calificación promedio
            $calificacionPromedio = $resenas->avg('calificacion');
            
            // Actualizar la calificación del establecimiento con la calificación promedio
            $establecimiento->calificacion = (int) $calificacionPromedio;
            $establecimiento->save();
        }
        
        // Devolver la vista con los establecimientos actualizados
        return view('shops', compact('establecimientos'));
    }
}
