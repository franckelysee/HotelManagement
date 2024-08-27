<?php

namespace App\Http\Controllers;

use App\Http\Requests\hotelStoreRequest;
use App\Http\Requests\hotelUpdateRequest;
use App\Models\Chambre;
use App\Models\Hotel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class hotelController extends Controller
{
    public function index(Request $request): View
    {
        $data = Hotel::with('image_hotels')->get();
        $hotels = Hotel::with('image_hotels')->get();
        $destination = $request->input('destination') ?? 'paris';
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $adults = $request->input('adults');
        $children = $request->input('children');
        $regionId = $request->input('regionId');
        return view('hotels.index', compact('hotels', 'destination', 'start_date', 'end_date', 'adults', 'children', 'regionId'));
    }

    public function show(Request $request): View
    {

        $ville = $request->ville ;
        $hotels = Hotel::with('image_hotels')->where('ville', $ville)->get();
        // dd($hotels);

        return view('hotels.show', compact('hotels', 'ville'));
    }
    public function reservation(Request $request, $hotelname)
    {
        $hotel = Hotel::with('image_hotels')->where("nom", $hotelname)->first();
        $chambres = Chambre::with('imageChambres')->where('hotel_id', $hotel->id)->get();
        // dd($chambres[0]->imageChambres[0]->image_path);
        return view('hotels.reservation', compact('hotel', 'chambres'));
    }
    public function create(Request $request): View
    {
        return view('hotels.create');
    }

    public function store(hotelStoreRequest $request): RedirectResponse
    {
        $hotel = Hotel::create($request->validated());

        return redirect()->route('hotels.index');
    }

    public function edit(Request $request, hotel $hotel): View
    {
        $hotel = Hotel::find($request->id);

        return view('hotels.edit', compact('hotel'));
    }

    public function update(hotelUpdateRequest $request, hotel $hotel): RedirectResponse
    {
        $hotel->update($request->validated());

        return redirect()->route('hotels.show', ['hotel' => $hotel]);
    }

    public function destroy(Request $request, hotel $hotel): RedirectResponse
    {
        $hotel = Hotel::find($request->id);

        $hotel->delete();

        return redirect()->route('hotels.index');
    }
}
