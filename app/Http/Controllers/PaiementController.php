<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaiementStoreRequest;
use App\Models\Paiement;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function store(PaiementStoreRequest $request): RedirectResponse
    {
        $paiement = Paiement::create($request->validated());


        return redirect()->route('reservations.show');
    }
}
