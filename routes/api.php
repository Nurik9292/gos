<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::name('api.')->group(function (){
    Route::get('/banners', \App\Http\Controllers\Api\BannerController::class)->name('banner');
    Route::get('/logos', \App\Http\Controllers\Api\LogoController::class)->name('logos');
    Route::get('/cards', \App\Http\Controllers\Api\CardController::class)->name('card');
    Route::get('/contents', \App\Http\Controllers\Api\ContentController::class)->name('content');
    Route::get('/services', \App\Http\Controllers\Api\ServiceController::class)->name('service');
    Route::get('/abouts', \App\Http\Controllers\Api\AboutController::class)->name('about');
    Route::get('/abouts-banner', \App\Http\Controllers\Api\AboutImageController::class)->name('about-banner');
    Route::get('/galleries', \App\Http\Controllers\Api\GalleryController::class)->name('gallery');
    Route::get('/galleries-last', \App\Http\Controllers\Api\GalleryLastImageController::class)->name('gallery-last');
    Route::get('/footers', \App\Http\Controllers\Api\FooterController::class)->name('footer');
    Route::get('/footer-contacts', \App\Http\Controllers\Api\FooterContactController::class)->name('footer-contact');
});
