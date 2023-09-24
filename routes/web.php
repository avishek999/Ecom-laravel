<?php

// use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return view('login');
});
Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']); 
Route::get("detail/{id}",[ProductController::class,'detail']); 
Route::post("add_to_cart",[ProductController::class,'addtocart']);
Route::get("cartlist",[ProductController::class,'cartlist']);
Route::get("removcart/{id}",[ProductController::class,'removcart']);
//Route::get("ordersnow",[ProductController::class,'ordernow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
//Route::get("order",[ProductController::class,'order']);
Route::get("order",[ProductController::class,'order']);
Route::get("myOrders",[ProductController::class,'myOrders']);





