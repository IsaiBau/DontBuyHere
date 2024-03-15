<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    //
    public function __invoke()
    {
        return view('registro');
    }


    public function store(Request $request) {
        //return $request->all();

        $request->validate([
            'name' => 'required',
            'user' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:2'
        ]);

        $reg = new User();

        $reg->name = $request->name;
        $reg->user = $request->user;
        $reg->email = $request->email;
        $reg->password = $request->password;
 
        //return $cat;

        $reg->save();

        return redirect()->route('login.index', $reg);

    }
}