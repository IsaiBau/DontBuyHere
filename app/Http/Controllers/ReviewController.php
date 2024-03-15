<?php

namespace App\Http\Controllers;

use App\Http\Requests\addReviewRequests;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    function  review() {
        return view('review');
    }

    function insert(addReviewRequests $request){
        //aqui falta algo tipo $review = new nombre_modelo();
        //$review;
        //$review->nombre_modelo = $request->localNameAdd;
        //$review->nombre_modelo = $request->localNameAdd;
        //$review->nombre_modelo = $request->localNameAdd;
        //$review->nombre_modelo = $request->localNameAdd;
        //$review -> save();
        //return redirect()->route('Home');
    }


}
