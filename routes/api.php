<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\providersController;
use App\Http\Controllers\productsController;
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

//rutas publicas
    //usuarios
    Route::post('Login', [UserController::class, 'login']);
    Route::post('Usuario', [UserController::class, 'store']);
    //solo paises
    Route::get('paises',[WebController::class, 'countries']);

    Route::get('Productos', [productsController::class, 'showProducts']);
    Route::post('Busqueda', [productsController::class, 'productSearch']);
//control de acceso (Privado)
    Route::group(['middleware' => ['auth:sanctum']], function(){

        //usuarios
        Route::get('Usuario',[UserController::class, 'getAllUsersInfo']);
        Route::get('/user/{id}', [UserController::class, 'show']);
        Route::delete('/user/{id}', [UserController::class, 'destroy']);
        Route::put('/user/{id}', [UserController::class, 'update']);


        //productos
        Route::post('RegistroProductos', [productsController::class, 'saveProduct']);

        //proveedores
        Route::post('Proveedor', [providersController::class, 'store']);
        Route::get('Proveedor', [providersController::class, 'show']);
        Route::put('Proveedor', [providersController::class, 'update']);//no implementado
        Route::delete('Proveedor', [providersController::class, 'delete']);//no implementado
    });

//productos

