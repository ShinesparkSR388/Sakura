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
    public function createCupon(Request $request){
        $cupon = new cupons();
        $cupon->percent = $request->input('percent');
        $cupon->value = $request->input('value');
        $cupon->create = $request->input('create');
        $cupon->expire = $request->input('expire');
        $cupon->id_user = $request->input('id_user');

        $cupon->save();
        return response()->json(['res'=>true]);
    }
    public function getCuponsUser($id){
        $cupon = cupons::where('id_user', $id)->get();
        if(!$cupon){
           return response()->json(['res' => false], 404);
       }
       return response()->json($cupon, 200);
    }
}
