<?php

use App\Http\Controllers\bahanbakuController;
use App\Http\Controllers\formprodukController;
use App\Http\Controllers\formbahanbakuController;
use App\Http\Controllers\formpengadaanController;
use App\Http\Controllers\formsupplierController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\supplierController;


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

///----------------
Route::get('/riwayat', 'App\Http\Controllers\riwayatpenjualanController@index')->name('riwayat');

Route::get('/riwayatbahan', function () {
    return view('riwayatbahanbaku');
});

//-------
Route::get('/pengadaan', 'App\Http\Controllers\pengadaanbahanController@index')->name('pengadaan');

// Route::get('/formpengadaan', function () {
//     return view('formpengadaan');
// });
Route::get('/formpengadaan',[formpengadaanController::class,'tampil']);
Route::post('/formpengadaan/add',[formpengadaanController::class,'add']);
Route::get('/formpengadaan/delete/{id}',[formpengadaanController::class,'delete']);
Route::get('/formpengadaan/edit/{id}',[formpengadaanController::class,'edit']);
Route::post('/formpengadaan/update/{id}',[formpengadaanController::class,'update']);

//---------------
Route::get('/supplier',[supplierController::class,'index']);
Route::get('/formsupplier',[formsupplierController::class,'tampil']);
Route::post('/formsupplier/add',[formsupplierController::class,'add']);
Route::get('/formsupplier/delete/{id}',[formsupplierController::class,'delete']);
Route::get('/formsupplier/edit/{id}',[formsupplierController::class,'edit']);
Route::post('/formsupplier/update/{id}',[formsupplierController::class,'update']);
