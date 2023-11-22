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
        $request->validate([
            'id_product' => 'required|exists:products,id',
            'id_user' => 'required|exists:users,id',
            'Cantidad' => 'required|integer|min:1',
            'Total' => 'required|numeric|min:0', 
        ]);

        $shoppingCart = new shoppingCar();
        $shoppingCart->id_product = $request->input('id_product');
        $shoppingCart->id_user = $request->input('id_user'); 
        $shoppingCart->Cantidad = $request->input('Cantidad');
        $shoppingCart->Total = $request->input('Total');
        

           $shoppingCart->save();
    }



    public function showShopping(Request $request)
    {
        $request->validate([
            'id_user' => 'required|exists:users,id',
        ]);
    
        $userId = $request->input('id_user');
    
        $shoppingCartItems = shoppingCar::where('id_user', $userId)
            ->with('product') 
            ->get();
        return response()->json($shoppingCartItems);
    }

    public function destroyShopping($id){
      
        $shoppingCartItem = ShoppingCart::find($id);

        
        if ($shoppingCartItem) {
            $shoppingCartItem->delete();
    
            return response()->json(['message' => 'Elemento del carrito eliminado correctamente']);
        } else {
            return response()->json(['error' => 'Elemento del carrito no encontrado'], 404);
        }
    }

    
}
