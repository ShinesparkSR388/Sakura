<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller{
    public function index(){
        return view("PruebaUsuario");
    }
    public function store(Request $request)
    {
        $info = $request->all();
        return response()->json($info);
    }
}
