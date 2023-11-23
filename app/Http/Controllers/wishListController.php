<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\wishList;

class wishListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addwish(Request $request){
        try{

            $lista = new wishList();
            $lista->id_user = $request->input('id_user');
            $lista->id_product = $request->input('id_product');
            $lista->save();
            return response()->json(['res' => true], 200);
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }

    }
    public function wishlist($id){
        try{
            $lista = wishList::where('id_user', $id)->get();
            if(!$lista){
            return response()->json(['res' => false], 404);
            }
            return response()->json($lista, 200);
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }
    public function deletewish($id, $id_product){ 
        try{
            wishList::where('id_user', $id)->where('id_product', $id_product)->delete();
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }
    
}