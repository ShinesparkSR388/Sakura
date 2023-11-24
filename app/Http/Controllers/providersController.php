<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\providers;
use Exception;
class providersController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'info' => 'required|string',
            'address' => 'required|string',
            'contact' => 'required|string'
        ]);
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
    public function update(Request $request, $id)
    {
        try{
            $providers = providers::find($id);

            if (!$providers) {
                return response()->json(['error' => 'Proveedor no encontrado'], 404);
            }

            $request->validate([
                'name' => 'required|string',
                'info' => 'required|string',
                'address' => 'required|string',
                'contact' => 'required|string'
            ]);

            $providers->update([
                'name' => $request->input('name'),
                'info' => $request->input('info'),
                'address' => $request->input('address'),
                'contact' => $request->input('contact')
            ]);

            return response()->json(['message' => 'Actualizado correctamente'], 404);

        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }
    public function delete($id)
    {
        try{
            
            $providers = providers::find($id);

            if (!$providers) {
                return response()->json(['error' => 'Proveedor no encontrado'], 404);
            }

            $providers->delete();

            return response()->json(['message' => 'Eliminado correctamente'], 200);
            
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }
}
