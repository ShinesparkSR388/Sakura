<?php

use App\Http\Controllers\WebController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('RegistroUsuario', [WebController::class, 'store']);
Route::get('Usuarios',[WebController::class, 'getAllUsersInfo']);

Route::get('paises',[WebController::class, 'countries']);
Route::post('RegistroProductos', [WebController::class, 'saveProductos']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);
Route::put('/users/{id}', [UserController::class, 'update']);