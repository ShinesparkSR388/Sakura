<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\cupons;
use App\Models\wishList;

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
        try{
            $user = new User();
            if($request->hasFile('file')){
                $file = $request->file('file');
                $filename = $file->getClientOriginalName();

                $filename = pathinfo($filename, PATHINFO_FILENAME);
                $name_File = str_replace(" ","_",$filename);
                $extension = $file->getClientOriginalExtension();

                $picture = date("His") . '-' . $name_File . '.' . $extension;

                $file->move(public_path('imgUser/'), $picture);
                
                $pass = $request->input('password');
                $user->username = $request->input('username');
                $user->email = $request->input('email');
                $user->password = Hash::make($pass);
                $user->name = $request->input('name');
                $user->age = $request->input('age');
                $user->gender = $request->input('gender');
                $user->photo = 'http://127.0.0.1:8000/api/imgUser/'.$picture;
                $user->country = $request->input('country');
                $user->address = $request->input('address');
                $user->send_address = $request->input('send_address');
                $permitted_chars = '0123456789ABCDEFGHIJKLMNNOPQRSTUVWXYZ';
                $user->refer_code = substr(str_shuffle($permitted_chars), 0, 10);
                $user->role = 0;
                $user->save();
    
                $cupon = new cupons();
                $cupon->percent = 0.15;
                $cupon->value = 0;
                $cupon->create = date("d-m-Y h:i:s");
                $cupon->expire = "9999-02-22 12:34:56";
    
                
    
                $cupon->id_user = $user->id;
                $cupon->save();
    
                if($request->input('refer_code') != null){
                    $user2 = User::where('refer_code', $request->input('refer_code'))->first();
                    if($user2 != null){
                        $cupon2 = new cupons();
                        $cupon2->percent = 0;
                        $cupon2->value = 2;
                        $cupon2->create = date("d-m-Y h:i:s");
                        $cupon2->expire = "9999-02-22 12:34:56";
                        $cupon2->id_user = $user2->id;
                        $cupon2->save();
                    }
    
                }
                return response()->json(['res' => true], 200);
            }

        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAllUsersInfo()
    {
        try{
            $users = User::all();

            if ($users->isEmpty()) {
                return response()->json(['error' => 'No hay usuarios disponibles'], 404);
            }

            return response()->json($users, 200);
            
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }

    public function show($id)
    {
        try{
            $user = User::find($id);

            if (!$user) {
                return response()->json(['error' => 'Usuario no encontrado'], 404);
            }
            return response()->json($user, 200);
            
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
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
        try{
            $user = User::find($id);

            if (!$user) {
                return response()->json(['error' => 'Usuario no encontrado'], 404);
            }

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

        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            
            $user = User::find($id);

            if (!$user) {
                return response()->json(['error' => 'Usuario no encontrado'], 404);
            }

            $user->delete();

            return response()->json(['message' => 'Usuario eliminado exitosamente'], 200);
            
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }

    public function login(Request $request){
        try{

    
            $user = User::where('username', $request->input('username'))->first();

            if(! $user || ! Hash::check($request->input('password'), $user->password)){
                throw ValidationException::withMessages([
                    'res' => false,
                    'error' => 'Creedenciales incorrectas'
                ]);
            }
            $user->tokens()->delete();
            $token = $user->createToken($user->username)->plainTextToken;
            return response()->json([
                'res' => true,
                'token' => $token,
                'id_user' =>$user->id
            ], 200);
        
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }

    }
    public function logout(Request $request){
        try{
            $request->user()->currentAccessToken()->delete();
            return response()->json([
                'res' => true,
                'message' => 'token eliminado'
            ], 200);
        }catch(Exception $ex){
            return response()->json(['res' => false, 'message'=> 'Error:' . $ex], 200);
        }
    }

}
