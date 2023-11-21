<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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
        $user->gender = true;
        $user->photo = $request->input('foto');
        $user->country = $request->input('country');
        $user->address = $request->input('address');
        $user->send_address = $request->input('sendAddress');
        $user->refer_code = $request->input('refCode');
        $user->role = $request->input('role');

        $user->save();
        
    // return response()->json($info);


}

public function getAllUsersInfo()
{
    $users = User::all();

    if ($users->isEmpty()) {
        return response()->json(['error' => 'No hay usuarios disponibles'], 404);
    }

    return response()->json($users, 200);
}


}




