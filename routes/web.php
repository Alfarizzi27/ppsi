<?php

use App\Http\Controllers\bahanbakuController;
use App\Http\Controllers\formprodukController;
use App\Http\Controllers\formbahanbakuController;
use App\Http\Controllers\produkController;

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

Route::get('/tes', function () {
    return view('dashboard1');
});

Route::get('/home', function () {
    return view('home');
});

//-------Produk
Route::get('/formproduk', function () {
    return view('formproduk');
});

Route::get('/produk',[produkController::class,'index']);
Route::post('/formproduk/add',[formprodukController::class,'add']);
Route::get('/formproduk/delete/{id}',[formprodukController::class,'delete']);
Route::get('/formproduk/edit/{id}',[formprodukController::class,'edit']);
Route::post('/formproduk/update/{id}',[formprodukController::class,'update']);

//-------Bahan Baku
Route::get('/formbahanbaku', function () {
    return view('formbahanbaku');
});

Route::get('/bahanbaku',[bahanbakuController::class,'index']);
Route::post('/formbahanbaku/add',[formbahanbakuController::class,'add']);
Route::get('/formbahanbaku/delete/{id}',[formbahanbakuController::class,'delete']);
Route::get('/formbahanbaku/edit/{id}',[formbahanbakuController::class,'edit']);
Route::post('/formbahanbaku/update/{id}',[formbahanbakuController::class,'update']);

Route::get('/riwayat', 'App\Http\Controllers\riwayatpenjualanController@index')->name('riwayat');

Route::get('/pengadaan', 'App\Http\Controllers\pengadaanbahanController@index')->name('pengadaan');

Route::get('/riwayatbahan', function () {
    return view('riwayatbahanbaku');
});

Route::get('/penjualanproduk', function () {
    return view('penjualanproduk');
});

Route::get('/penjualanbahanbaku', function () {
    return view('penjualanbahanbaku');
});