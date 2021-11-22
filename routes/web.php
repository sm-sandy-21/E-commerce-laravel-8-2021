<?php

use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\CartComponet;
use App\Http\Livewire\CheckoutComponet;
use App\Http\Livewire\ContactComponet;
use App\Http\Livewire\HomeComponet;
use App\Http\Livewire\ProductDetailsComponet;
use App\Http\Livewire\ShopComponet;
use App\Http\Livewire\User\UserDashbord;
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
Route::get('/cart',CartComponet::class)->name('product.cart');
Route::get('/checkout',CheckoutComponet::class);
Route::get('/contact',ContactComponet::class);
Route::get('/product/{slug}',ProductDetailsComponet::class)->name('product.details');




// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard',UserDashbord::class)->name('user.dashboard');
});

Route::middleware(['auth:sanctum', 'verified','adminAuth'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboard::class)->name('admin.dashboard');
});
