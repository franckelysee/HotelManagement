<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationStoreRequest;
use App\Http\Requests\ReservationUpdateRequest;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReservationController extends Controller
{
    public function index(Request $request): View
    {
        $reservations = Reservation::all()->for('client')->get();

        return view('reservations.index', compact('reservations'));
    }

    public function show(Request $request, Reservation $reservation): View
    {
        $reservation = Reservation::find($request->id);

        return view('reservations.show', compact('reservation'));
    }

    public function create(Request $request): View
    {
        return view('reservations.create');
    }

    public function store(ReservationStoreRequest $request): RedirectResponse
    {
        $reservation = Reservation::create($request->validated());

        return redirect()->route('reservations.index');
    }

    public function edit(Request $request, Reservation $reservation): View
    {
        $reservation = Reservation::find($request->id);

        return view('reservations.edit', compact('reservation'));
    }

    public function update(ReservationUpdateRequest $request, Reservation $reservation): RedirectResponse
    {
        $reservation->update($request->validated());

        return redirect()->route('reservations.show', ['reservation' => $reservation]);
    }

    public function destroy(Request $request, Reservation $reservation): RedirectResponse
    {
        $reservation = Reservation::find($request->id);

        $reservation->delete();

        return redirect()->route('reservations.index');
    }
}
