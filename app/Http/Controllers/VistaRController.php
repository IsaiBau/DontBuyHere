<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resena;
use App\Models\Establecimiento;

class VistaRController extends Controller
{
    public function vista(Request $request)
    {
        // Obtener el ID del establecimiento desde el formulario
        $establecimiento_id = $request->input('establecimiento_id');
    
        // Obtener información del establecimiento
        $establecimiento = Establecimiento::find($establecimiento_id);
    
        // Obtener todas las reseñas asociadas al establecimiento
        $resenas = Resena::where('id_establecimiento', $establecimiento_id)->get();
    
        // Pasar los datos a la vista
        return view('vistaReview', compact('establecimiento', 'resenas'));
    }    
}
