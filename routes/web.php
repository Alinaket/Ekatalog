<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, "home"])->name("home");
Route::get('/product',[ProductController::class, "product"] )->name("product");
Route::get('/test',[ProductController::class, "test"] )->name("test");
Route::get('/description',[ProductController::class, "description"] )->name("description");
Route::get('/buy',[ProductController::class, "buy"] )->name("buy");
Route::get('/useful',[ProductController::class, "useful"] )->name("useful");
Route::get('/coment',[ProductController::class, "coment"] )->name("coment");
Route::get('/app_main',[ProductController::class, "app_main"] )->name("app_main");

