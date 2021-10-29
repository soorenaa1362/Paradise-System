<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Financial\CategoryController;
use App\Http\Controllers\Financial\BuyController;
use App\Http\Controllers\Financial\ShopController;

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

Route::get('/financial/dashboard', function () {
    return view('financial.dashboard');
})->name('dashboard');

Route::prefix('financial')->name('financial.')->group(function(){

    Route::resource('categories', CategoryController::class);
    Route::resource('buys', BuyController::class);
    Route::resource('shops', ShopController::class);
    
});
