<?php

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
    return view('auth\connection');
})->name('login');
Route::get('register', function () {
    return view('auth\Inscription');
})->middleware('auth');
Route::post('log','Auth\LoginController@login');
Route::post('register','Auth\SignController@store');

Route::get('stock','StockController@index')->middleware('auth');
Route::get('vente','VenteController@index')->middleware('auth');
Route::get('produit','ProduitController@index')->middleware('auth');
Route::post('stock_save','StockController@store');
Route::post('vente_save','VenteController@store');
Route::post('produit_save','ProduitController@store');
