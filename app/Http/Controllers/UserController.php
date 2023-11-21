<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       return view("PruebaUsuario");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->name = $request->input('name');
        $user->age = $request->input('age');
        $user->gender = true;
        $user->photo = $request->input('photo');
        $user->country = $request->input('country');
        $user->address = $request->input('address');
        $user->send_address = $request->input('send_address');
        $user->refer_code = "A";
        $user->role = 0;

        $user->save();

        // return response()->json($info);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAllUsersInfo()
    {
        $users = User::all();

        if ($users->isEmpty()) {
            return response()->json(['error' => 'No hay usuarios disponibles'], 404);
        }

        return response()->json($users, 200);
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
        return response()->json($user, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        $request->validate([
            'username' => 'required|string|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'required|min:6',
            'name' => 'required|string|unique:users,name,' . $user->id,
            'age' => 'required|integer',
            'gender' => 'required|boolean',
            'photo' => 'required|string',
            'country' => 'required|string',
            'address' => 'required|string',
            'send_address' => 'required|string'
        ]);

        $user->update([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'photo' => $request->input('photo'),
            'country' => $request->input('country'),
            'address' => $request->input('address'),
            'send_address' => $request->input('send_address')
        ]);

        return response()->json(['message' => 'Actualizado correctamente'], 404);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'Usuario eliminado exitosamente'], 200);
    }
}
