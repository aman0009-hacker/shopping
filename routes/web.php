<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product_add;
use App\Http\Controllers\slider_img;

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

Route::get('/',[slider_img::class,'show_slider']);
Route::get('home',[slider_img::class,'show_slider'])->middleware('auth','verified');

Route::view('proudct_add','product.addProduct')->name('addproduct');
Route::post('add_the_product',[product_add::class,'addProduct']);