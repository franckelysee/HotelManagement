<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    //

    public function hotels(Request $request)
    {
        $destination = $request->input('destination')? $request->input('destination'): 'paris';
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $adults = $request->input('adults');
        $children = $request->input('children');
        $regionId = $request->input('regionId');

        return view('pages/hotels', compact('destination', 'start_date', 'end_date', 'adults', 'children', 'regionId'));
    }

    public function searchHotels(Request $request)
    {
        $destination = $request->input('destination');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $adults = $request->input('adults');
        $children = $request->input('children');
        $regionId = $request->input('regionId');

        $hotelid = 1;

        return view('pages/hotel_search', compact('destination', 'start_date', 'end_date', 'adults', 'children', 'regionId', 'hotelid'));
    }

    public function reservation(Request $request)
    {
        $hotelid = $request->input('hotelid')? $request->input('hotelid'): 1;

        return view('pages/reservation', compact('hotelid'));
    }

    public function payement(Request $request)
    {
        $hotelid = $request->input('hotelid')? $request->input('hotelid'): 1;

        return view('pages/payement', compact('hotelid'));
    }
}
