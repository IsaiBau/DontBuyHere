<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\addUserRequest;
=======
use App\Http\Requests\addUserRequests;
>>>>>>> aa2e83adafc80d09459c64ece9febf1add954acf
use App\Models\User;

class RegistroController extends Controller
{
    //
    public function __invoke()
    {
        return view('registro');
    }


<<<<<<< HEAD
    public function store(addUserRequest $request) {
        //return $request->all();

=======
    public function store(addUserRequests $request) {
        //return $request->all();
 
>>>>>>> aa2e83adafc80d09459c64ece9febf1add954acf
        $reg = new User();
        $reg->name = $request->name;
        $reg->user = $request->user;
        $reg->email = $request->email;
        $reg->password = $request->password;
        $reg->save();

        return redirect()->route('login.index');

    }
}