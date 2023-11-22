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
            return response()->json(['error' => 'No hay productos '], 404);
        }

        return response()->json($pr, 200);
    }

    public function destroyProduct($id){
        $pro = products::find($id);

        if (!$pro) {
            return response()->json(['error' => 'No hay productos disponibles'], 404);
        }

       $pro->delete();

        return response()->json(['message' => 'Producto eliminado'], 200);

    }

    public function updateProducts(Request $request, $id)
    {
        $product = products::find($id);

       
        if (!$product) {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }

        $request->validate([
            'code' => 'required|string|unique:products,code,' . $product->id,
            'name' => 'required|string|unique:products,name,' . $product->id,
            'editorial' => 'required|string',
            'author' => 'required|string',
            'year' => 'required|integer',
            'category' => 'required|string',
            'image' => 'required|string',
            'stock' => 'required|integer',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'sell_price' => 'required|numeric',
            'id_provider' => 'required|exists:providers,id',
        ]);

        $product->update([
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'editorial' => $request->input('editorial'),
            'author' => $request->input('author'),
            'year' => $request->input('year'),
            'category' => $request->input('category'),
            'image' => $request->input('image'),
            'stock' => $request->input('stock'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'sell_price' => $request->input('sell_price'),
            'id_provider' => $request->input('id_provider'),
        ]);
    
        return response()->json(['message' => 'Producto actualizado correctamente']);

    }



}
