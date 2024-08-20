<?php

namespace App\Http\Controllers;

use App\Http\Requests\AviStoreRequest;
use App\Models\Avis;
use App\Models\Hotel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AvisController extends Controller
{
    public function store(AviStoreRequest $request, Hotel $hotel): RedirectResponse
    {
        $avis = Avis::create($request->validated());
        
        return redirect()->route('hotels.show', ['hotel' => $hotel]);
    }
}
