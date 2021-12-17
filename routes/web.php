<?php

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

Route::view('/', 'welcome')->middleware('guest');

Route::group(['prefix'=>'dashboard','middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\ProductsController::class, 'index']);
    Route::view('/add-product', 'add-product');
    Route::post('/add-product', [App\Http\Controllers\ProductsController::class, 'save']);
    Route::get('/edit-product/{id}', [App\Http\Controllers\ProductsController::class, 'edit']);
    Route::put('/edit-product/{id}', [App\Http\Controllers\ProductsController::class, 'update']);
    Route::get('/delete-product/{id}', [App\Http\Controllers\ProductsController::class, 'delete']);
    });

Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('/');
});