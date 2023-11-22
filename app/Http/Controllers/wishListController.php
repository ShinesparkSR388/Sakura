<?php

namespace App\Http\Controllers;

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
        $lista = new wishList();
        $lista->id_user = $request->input('id_user');
        $lista->id_product = $request->input('id_product');
        $lista->save();

    }
    public function wishlist($id){
        $lista = wishList::where('id_user', $id)->get();
        if(!$lista){
           return response()->json(['error' => 'No se a agregado ningun producto a la lista de deseos'], 404);
       }
       return response()->json($lista, 200);
    }
    public function deletewish($id, $id_product){ 
        $elementoLista = wishList::where('id_user', $id)->where('id_product', $id_product)->delete();
    }
    
}