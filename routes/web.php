<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middlewars' => ['auth']], function () {
        Route::get('/transaksi/search', [App\Http\Controllers\TransaksiController::class, 'search'])->name('transaksi.search');
    Route::resource('supplier', App\Http\Controllers\SupplierController::class);
    Route::resource('kategori', App\Http\Controllers\KategoriController::class);  
    Route::resource('komponen', App\Http\Controllers\KomponenController::class);  
    Route::resource('transaksi', App\Http\Controllers\TransaksiController::class);
    Route::resource('pembayaran', App\Http\Controllers\PembayaranController::class);
});

Route::get('templete', function () {
    return view('layouts.dashboard');
});