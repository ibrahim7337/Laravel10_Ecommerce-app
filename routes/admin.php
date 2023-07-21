<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Livewire\CartCounter;
use App\Http\Livewire\ProductsTable;
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


Route::get('/index',[IndexController::class , 'index'])->name('admin');

Route::group(['as' => 'dashboard.'], function () {

    Route::put('settings/{setting}/update',[SettingController::class , 'update'])->name('settings.update');
    Route::get('settings',[SettingController::class , 'index'])->name('settings.index');

    #### category ####
    Route::get('categories/ajax',[CategoryController::class , 'getall'])->name('categories.getall');
    Route::delete('categories/delete',[CategoryController::class , 'delete'])->name('categories.delete');
    Route::resource('categories', CategoryController::class)->except('destroy','create' , 'show');
    #### /category ####

    #### product ####
    Route::get('products/ajax',[ProductController::class , 'getall'])->name('products.getall');
    Route::delete('products/delete',[ProductController::class , 'delete'])->name('products.delete');
    Route::resource('products', ProductController::class)->except('destroy','show');
    #### /product ####

});