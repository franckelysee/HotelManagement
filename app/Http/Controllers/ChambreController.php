<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChambreStoreRequest;
use App\Http\Requests\ChambreUpdateRequest;
use App\Models\Chambre;
use App\Models\Hotel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChambreController extends Controller
{
    public function index(Request $request): View
    {
        $chambres = Chambre::all()->for('hotel')->get();

        return view('chambres.index', compact('chambres'));
    }

    public function show(Request $request, Chambre $chambre): View
    {
        $chambre = Chambre::find($request->id);

        return view('chambres.show', compact('chambre'));
    }

    public function create(Request $request): View
    {
        return view('chambres.create');
    }

    public function store(ChambreStoreRequest $request): RedirectResponse
    {
        $chambre = Chambre::create($request->validated());

        return redirect()->route('chambres.index');
    }

    public function edit(Request $request, Chambre $chambre): View
    {
        $chambre = Chambre::find($request->id);

        return view('chambres.edit', compact('chambre'));
    }

    public function update(ChambreUpdateRequest $request, Chambre $chambre): RedirectResponse
    {
        $chambre->update($request->validated());

        return redirect()->route('chambres.show', ['chambre' => $chambre]);
    }

    public function destroy(Request $request, Chambre $chambre): RedirectResponse
    {
        $chambre = Chambre::find($request->id);

        $chambre->delete();

        return redirect()->route('chambres.index');
    }
}
