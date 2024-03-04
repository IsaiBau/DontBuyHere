<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function  index() {
        return view('home');
    }

    function  login() {
        return view('login');
    }

    function  review() {
        return view('review');
    }

    function  register() {
        return view('register');
    }
}
