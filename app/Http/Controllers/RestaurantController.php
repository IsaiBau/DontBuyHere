<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establecimiento; 
use App\Models\Resena;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    public function index()
    {
<<<<<<< Updated upstream
        // Obtener todos los establecimientos
        $establecimientos = Establecimiento::all();
        
        // Iterar sobre cada establecimiento para calcular la calificación promedio
        foreach ($establecimientos as $establecimiento) {
            // Obtener todas las reseñas asociadas a este establecimiento
            $resenas = Resena::where('id_establecimiento', $establecimiento->id)->get();
            
            // Calcular la calificación promedio
            $calificacionPromedio = $resenas->avg('calificacion');
            
            // Actualizar la calificación del establecimiento con la calificación promedio
=======
        $establecimientos = Establecimiento::all();
        
        foreach ($establecimientos as $establecimiento) {
            $resenas = Resena::where('id_establecimiento', $establecimiento->id)->get();
            
            $calificacionPromedio = $resenas->avg('calificacion');
            
>>>>>>> Stashed changes
            $establecimiento->calificacion = (int) $calificacionPromedio;
            $establecimiento->save();
        }
        
<<<<<<< Updated upstream
        // Devolver la vista con los establecimientos actualizados
=======
>>>>>>> Stashed changes
        return view('restaurant', compact('establecimientos'));
    }
}
