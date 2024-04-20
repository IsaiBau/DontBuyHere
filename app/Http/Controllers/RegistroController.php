<?php

namespace App\Http\Controllers;

use App\Http\Requests\addUserRequests;
use App\Models\User;

class RegistroController extends Controller
{
    //
    public function __invoke()
    {
        return view('registro');
    }


    public function store(addUserRequests $request) {
        //return $request->all();
        $reg = new User();
        $reg->name = $request->name;
        $reg->user = $request->user;
        $reg->email = $request->email;
        $reg->password = $request->password;
        $reg->rol = 'usuario';
        $reg->save();
        return redirect()->route('login.index');

    }
}