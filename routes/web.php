<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
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

Route::get('/prueba', function () {
    return view('prueba');
});


Route::resource('categories', CategoryController::class)->names('categories');

Route::resource('clients', ClientController::class)->names('clients');

Route::resource('providers', ProviderController::class)->names('providers');

Route::resource('products', ProductController::class)->names('products');

Route::resource('purchases', PurchaseController::class)->names('purchases');

Route::resource('sales', SaleController::class)->names('sales');
