<?php

namespace App\Http\Controllers;

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
        return view('establecimiento', compact('activeLink'));
    }
    function  indexRe() {
        $activeLink = 'reviews';
        return view('reviews', compact('activeLink'));
    }
    function  indexUsu() {
        $activeLink = 'users';
        $usuarios = User::All();
        return view('users', compact('activeLink'), ['usu'=> $usuarios]);
    }

    function logout(){
        return redirect()->route('login.index');
    }
}
