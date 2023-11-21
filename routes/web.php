<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registro', [UserController::class, 'index']);
Route::post('/RegistroUsuario', [WebController::class, 'store']);

Route::get('/home', [WebController::class, 'index']);
Route::get('/users', [WebController::class, 'getAllUsersInfo']);