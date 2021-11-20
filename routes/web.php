<?php

use App\Http\Livewire\CartComponet;
use App\Http\Livewire\CheckoutComponet;
use App\Http\Livewire\ContactComponet;
use App\Http\Livewire\HomeComponet;
use App\Http\Livewire\ShopComponet;
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

// Route::get('/', function () {
//     return view('layouts.base');
// });

Route::get('/',HomeComponet::class);
Route::get('/shop',ShopComponet::class);
Route::get('/cart',CartComponet::class);
Route::get('/checkout',CheckoutComponet::class);
Route::get('/contact',ContactComponet::class);



