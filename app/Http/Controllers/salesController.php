<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sales;

class salesController extends Controller
{
    public function saveSale(Request $request){
        $saleProduct = new sales();

        $saleProduct->id_product = $request->input('id_product');
        $saleProduct->id_user = $request->input('id_user');
        $saleProduct->units = $request->input('units');
        $saleProduct->unit_price = $request->input('units_price');
        $saleProduct->sub_total = $request->input('sub_total');

        $saleProduct->save();
        return response()->json($saleProduct, 201);
    }
}
