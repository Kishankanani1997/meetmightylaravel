<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
    return view('index');
});


//Here we create a routing
Route::get('/',[IndexController::class,'index']);
Route::post('/',[IndexController::class,'store']);
Route::get('/manageindex',[IndexController::class,'show']);
Route::get('/editindex/{id}',[IndexController::class,'edit']);
Route::post('/editindex/{id}',[IndexController::class,'update']);
Route::get('/deleteindex/{id}',[IndexController::class,'destroy']);



