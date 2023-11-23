<?php

namespace App\Http\Controllers;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cupons;

class cuponController extends Controller
{
    //
    public function get(){
        try{

        
            $pr = cupons::all();

            if ($pr->isEmpty()) {
                return response()->json(['error' => 'No hay cupones'], 404);
            }
            return response()->json($pr, 200);
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }
    public function createCupon(Request $request){

        try{
            $cupon = new cupons();
            $cupon->percent = $request->input('percent');
            $cupon->value = $request->input('value');
            $cupon->create = $request->input('create');
            $cupon->expire = $request->input('expire');
            $cupon->id_user = $request->input('id_user');

            $cupon->save();
            return response()->json(['res'=>true]);
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }
    public function getCupon($id){
        try{
            $cupon = cupons::where('id_user', $id)->get();
            if($cupon->isEmpty()){
                return response()->json(['res' => false], 404);
            }
            return response()->json($cupon, 200);
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }

    public function destroy($id){
        try{
            
            $cupon = cupons::find($id);

            if (!$cupon) {
                return response()->json(['error' => 'Cupon inexistente'], 404);
            }
            $cupon->delete();

            return response()->json(['message' => 'Eliminado exitosamente'], 200);
            
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }
}
