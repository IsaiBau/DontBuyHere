<?php

namespace App\Http\Controllers;

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
        return view('users', compact('activeLink'));
    }

    function logout(){
        return redirect()->route('login');
    }
}
