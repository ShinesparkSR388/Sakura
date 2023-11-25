<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\shoppingCar;

class shoppingController extends Controller
{
    //
    
    public function addToCart(Request $request)
    {
        // $request->validate([
        //     'id_product' => 'required|exists:products,id',
        //     'id_user' => 'required|exists:users,id',
        //     'Cantidad' => 'required|integer|min:1',
        //     'Total' => 'required|numeric|min:0', 
        // ]);

        $shoppingCart = new shoppingCar();
        $shoppingCart->id_product = $request->input('id_product');
        $shoppingCart->id_user = $request->input('id_user'); 
        $shoppingCart->Cantidad = $request->input('Cantidad');
        $shoppingCart->Total = $request->input('Total');
        

           $shoppingCart->save();
           return response()->json(['res' => true]);
    }

    public function show($id)
    {
        $carrito = shoppingCar::where('id_user',$id)->get();
        return response()->json($carrito, 200);
    }


    // public function showShopping(Request $request)
    // {
    //     $request->validate([
    //         'id_user' => 'required|exists:users,id',
    //     ]);
    
    //     $userId = $request->input('id_user');
    
    //     $shoppingCartItems = shoppingCar::where('id_user', $userId)->with('product')->get();
    //     return response()->json($shoppingCartItems);
    // }

    public function destroyShopping($id){ 
        $elementoLista = shoppingCar::where('id_user', $id)->delete();
    }
    public function deleteItemCar($id, $id_product){ 
        try{
            shoppingCar::where('id_user', $id)->where('id_product', $id_product)->delete();
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }
    public function editShopping($id, Request $request){
        $producto = shoppingCar::find($id);
        
        $producto->update([
            "Cantidad"=> $request->input('cantidad'),
            "Total"=> $request->input('total')
        ]);
        return response()->json(['res' => true]);

    }

    
}
