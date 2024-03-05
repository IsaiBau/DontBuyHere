<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaRController extends Controller
{
    function  vista() {
        return view('vistaReview');
    }
}
