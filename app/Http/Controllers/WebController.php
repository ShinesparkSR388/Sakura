<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WebController extends Controller{
    public function index(){
        return view("PruebaUsuario");
    }
    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('pass');
        $user->age = $request->input('age');
        $user->username = $request->input('user');

        $user->save();
        
        return response()->json($info);
    }
}
