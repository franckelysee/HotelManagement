<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(Request $request): View
    {
        $clients = Client::all();

        return view('client.index', compact('client'));
    }

    public function show(Request $request, Client $client): View
    {
        $client = Client::find($request->id);

        return view('client.show', compact('client'));
    }

    public function create(Request $request): View
    {
        return view('client.create');
    }

    public function store(ClientStoreRequest $request): RedirectResponse
    {
        $client = Client::create($request->validated());

        return redirect()->route('client.index');
    }

    public function edit(Request $request, Client $client): View
    {
        $client = Client::find($request->id);

        return view('client.edit', compact('client'));
    }

    public function update(ClientUpdateRequest $request, Client $client): RedirectResponse
    {
        $client->update($request->validated());

        return redirect()->route('client.show', ['client' => $client]);
    }

    public function destroy(Request $request, Client $client): RedirectResponse
    {
        $client = Client::find($request->id);

        $client->delete();

        return redirect()->route('client.index');
    }
}
