<?php

namespace App\Http\Controllers;

use App\Http\Requests\addUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    //
    public function __invoke()
    {
        return view('registro');
    }


    public function store(addUserRequest $request) {
        //return $request->all();

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