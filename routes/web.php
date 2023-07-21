<?php

use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Site\StripeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::post('/session' , [StripeController::class , 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');

Route::get('/' , [SiteController::class , 'index']);
Route::get('add-to-cart/{id}' , [SiteController::class , 'addToCart'])->name('add_to_cart');
Route::get('cart', [SiteController::class, 'cart'])->name('cart');
Route::patch('update-cart', [SiteController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [SiteController::class, 'remove'])->name('remove_from_cart');

Auth::routes();