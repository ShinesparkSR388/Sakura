<?php

namespace App\Http\Controllers;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\sales;
use App\Models\cupons;
use App\Models\products;

class salesController extends Controller
{
    public function saveSale(Request $request){
        try{
            $saleProduct = new sales();

            // $request->validate([
            //     'id_product' => 'required|integer',
            //     'id_user' => 'required|integer',
            //     'units' => 'required|integer',
            //     'units_price' => 'required|numeric',
            //     'sub_total' => 'required|numeric'
            // ]);
            $saleProduct->id_product = $request->input('id_product');
            $saleProduct->id_user = $request->input('id_user');
            $saleProduct->units = $request->input('units');
            $saleProduct->unit_price = $request->input('units_price');
            $saleProduct->sub_total = $request->input('sub_total');
            if($request->input('id_cupon') != null){

                $cupon = cupons::find($request->input('id_cupon'));
                if($cupon != null){
                    $saleProduct->sub_total = ($saleProduct->sub_total - $cupon->value) - ($saleProduct->sub_total * $cupon->percent);
                    $cupon->delete();
                }
            }

            $product = products::find($request->input('id_product'));
            if (!$product) {
                return response()->json(['error' => 'Producto no encontrado'], 404);
            }
            $saleProduct->save();
            $product->update([
                'stock' => ($product->stock - $saleProduct->units)
            ]);
            
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
            return response()->json(['res' => true], 200);
    }
    public function shoppingHistorySearch($id){
        try{
            $history = sales::where('id_user', $id)->get();
            if(!$history){
            return response()->json(['res' => false], 404);
        }
        return response()->json($history, 200);
       
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }
    public function cancel($id){
        try{
            $sale = sales::where('id', $id)->first();
            if(!$sale){
            return response()->json(['res' => false], 404);
            }
            $product = products::where('id', $sale->id_product)->first();
            $product->update([
                'stock' => $product->stock + $sale->units
            ]);
            $sale->delete();
        return response()->json(['res' => true], 200);
       
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }
    public function addSale(Request $request){

    }
    
}
