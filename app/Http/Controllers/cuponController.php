<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cupons;

class cuponController extends Controller
{
    //
    public function get(){
        $pr = cupons::all();

        if ($pr->isEmpty()) {
            return response()->json(['error' => 'No hay cupones'], 404);
        }

        return response()->json($pr, 200);
    }
}
