<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products;

class productsController extends Controller
{
    //
    public function productSearch(Request $request){
        $book = products::where($request->input('typeSearch'), 'like', '%' . $request->input('varSearch') . '%')->get();
         if(!$book){
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
        return response()->json($book, 200);
    }

    public function saveProduct(Request $request)
    {
        $product = new products();

        $product->code = $request->input('code');
        $product->name = $request->input('name');
        $product->editorial = $request->input('editorial');
        $product->author = $request->input('author');
        $product->year = $request->input('year');
        $product->category = $request->input('category');
        $product->image = $request->input('image');
        $product->stock = $request->input('stock');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->sell_price = $request->input('sell_price');
        $product->id_provider = $request->input('id_provider');

        $product->save();

        return response()->json($product, 201);
    }



    public function showProducts(Request $request)
    {
        $pr = products::all();

        if ($pr->isEmpty()) {
            return response()->json(['error' => 'No hay productos'], 404);
        }

        return response()->json($pr, 200);
    }
}
