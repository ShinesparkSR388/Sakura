<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products;

class productsController extends Controller
{
    //
    public function productSearch(Request $request){
        $book = products::where('name', 'like', '%' . $request->input('varSearch') . '%')->get();
         if(!$book){
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
        return response()->json($book, 200);
    }
}
