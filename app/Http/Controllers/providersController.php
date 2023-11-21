<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\providers;

class providersController extends Controller
{
    //
    public function store(Request $request)
    {
        $provider = new providers();
        $provider->name = $request->input('name');
        $provider->info = $request->input('info');
        $provider->address = $request->input('address');
        $provider->contact = $request->input('contact');
        $provider->save();
    }
    public function show()
    {
        $providers = providers::all();

        if ($providers->isEmpty()) {
            return response()->json(['error' => 'No hay proveedores disponibles'], 404);
        }

        return response()->json($providers, 200);
    }
}
