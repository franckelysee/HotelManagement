<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    //

    public function hotels(Request $request){

        return view('pages/hotels');
    }
}
