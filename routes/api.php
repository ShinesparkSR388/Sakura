<?php

use App\Http\Controllers\cuponController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\providersController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\salesController;
use App\Http\Controllers\wishListController;
use App\Http\Controllers\shoppingController;
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
            
            //Lista de deseos usuario
            Route::post('/user/{id}/add-wish-list',[wishListController::class, 'addwish']);
            Route::get('/user/{id}/wish-list',[wishListController::class, 'wishlist']);
            Route::delete('/user/{id}/{id_product}/del-wish',[wishListController::class, 'deletewish']);
    
            //carrito de compras
            Route::post('/RegistroCar',[shoppingController::class, 'addToCart']);
            Route::get('/Show/{id}',[shoppingController::class, 'show']);
            Route::delete('/Shopping/Delete/{id}',[shoppingController::class, 'destroyShopping']);
    
    
            //cupones
            Route::get('Cupones', [cuponController::class, 'get']);
            Route::post('Cupones',[cuponController::class, 'createCupon']);
            Route::get('Cupones/{id}',[cuponController::class, 'getCupon']);
            Route::delete('Cupones/{id}',[cuponController::class, 'destroy']);
    
            //productos
            Route::put('ActualizarProductos', [productsController::class, 'updateProducts']);
            Route::post('RegistroProductos', [productsController::class, 'saveProduct']);
            Route::delete('Productos/{id}', [productsController::class, 'destroyProduct']);
    
            //proveedores
            Route::post('Proveedor', [providersController::class, 'store']);
            Route::get('Proveedor', [providersController::class, 'show']);
            Route::put('Proveedor', [providersController::class, 'update']);//no implementado
            Route::delete('Proveedor', [providersController::class, 'delete']);//no implementado
        
            //Historial de compras
            Route::get('/Ventas/{id}',[salesController::class, 'shoppingHistorySearch']);

            //Obtencion de imagenes
            Route::get('files/{file}', function ($file) {
                return response()->file(public_path('Files/' . $file));
            });


    });
    //Venta de productos
    Route::post('Ventas',[salesController::class, 'saveSale']);

