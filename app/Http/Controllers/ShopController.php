<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establecimiento; 
use App\Models\Resena;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index()
    {
        $establecimientos = Establecimiento::all();
        
        foreach ($establecimientos as $establecimiento) {
            $resenas = Resena::where('id_establecimiento', $establecimiento->id)->get();
            
            $calificacionPromedio = $resenas->avg('calificacion');
            
            $establecimiento->calificacion = (int) $calificacionPromedio;
            // $establecimiento->save();
        }
        
        return view('shops', compact('establecimientos'));
    }
}