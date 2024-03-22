<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\logUserRequest;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $usuario = Auth::user();
            session(['email' => $usuario->email]);
            return redirect()->route('home');
        }
        return back()->withErrors([
            'email' => 'El usuario o contraseña es inexistente en la base de datos.',
        ])->onlyInput('email');
    } 

    public function log(logUserRequest $request){{
        $data = $request->session()->all();
        return redirect()->route('home', $data);
    }}
}