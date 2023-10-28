<?php

use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'sitesetting'], function (){
    Route::get('/', [PageHomeController::class, 'index'])->name('index');

    Route::get('/hakkimizda', [PageController::class, 'hakkimizda'])->name('hakkimizda');

    Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');

    Route::post('/iletisim/kaydet', [AjaxController::class, 'iletisimEkle'])->name('iletisimEkle');

    Route::get('/urunler', [PageController::class, 'urunler'])->name('urunler');

    Route::get('/cart', [CartController::class, 'index'])->name('sepetim');

    Route::post('/cart/add', [CartController::class, 'add'])->name('sepetim.add');

    Route::post('/cart/remove', [CartController::class, 'remove'])->name('sepetim.remove');

    Route::get('/giyim/{slug?}', [PageController::class, 'urunler'])->name('giyim');

    Route::get('/ayakkabi/{slug?}', [PageController::class, 'urunler'])->name('ayakkabi');

    Route::get('/canta/{slug?}', [PageController::class, 'urunler'])->name('canta');

    Route::get('/urun/{slug}', [PageController::class, 'urundetay'])->name('urundetay');

    Route::get('/indirimliUrunler', [PageController::class, 'indirimliUrunler'])->name('indirimliUrunler');

});



