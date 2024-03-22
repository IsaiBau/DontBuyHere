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

    public function login(logUserRequest $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $usuario = Auth::user();
    
            if ($usuario->rol == 'admin') {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('home');
            }
        }
    
        return back()->withErrors([
            'email' => 'El usuario o contraseña es incorrecto.',
        ])->onlyInput('email');
    }
    

    public function log(logUserRequest $request){{
        $user = User::where('email','=',$request->email)->where('password', '=',$request->password)->first();
        if($request->email == $user['email'] && $request->password == $user['password'])
        {
            session(['rol' => $user['rol']]);
            $data = $request->session()->all();
            if(session(['rol' => $user['rol']]) == "admin@gmail.com"){
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('dashboard');
            }
        } else {
            return redirect()->route('login');
        }
    }
        /*$request->session()->regenerate();
        $data = $request->session()->all();
        $usuarios = User::All();
        session(['email' => $usuarios['email']]);*/
        //return redirect()->route('home', $data);
        
    }
}