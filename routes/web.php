<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba');
});


Route::resource('categories', CategoryController::class)->names('categories');

Route::resource('clients', ClientController::class)->names('clients');

Route::resource('providers', ProviderController::class)->names('providers');

Route::resource('products', ProductController::class)->names('products');

Route::resource('purchases', PurchaseController::class)->names('purchases');
Route::post('change_status/purchases/{purchase}', [PurchaseController::class, 'change_status'])->name('purchases.change.status');

Route::resource('sales', SaleController::class)->names('sales');
Route::post('change_status/sales/{sale}', [PurchaseController::class, 'change_status'])->name('sales.change.status');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
