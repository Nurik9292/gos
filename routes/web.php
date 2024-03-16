<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

if(strpos(\Illuminate\Support\Facades\URL::current(), 'admin')
    || strpos(\Illuminate\Support\Facades\URL::current(), 'login')
    || strpos(\Illuminate\Support\Facades\URL::current(), 'logout')) {

    Route::prefix('admin')->middleware('auth')->group(function () {

        Route::name('logo.')->group(function () {
            Route::get('/', \App\Http\Controllers\Admin\Logo\IndexController::class)->name('index');
            Route::patch('/logo/{logo}', \App\Http\Controllers\Admin\Logo\UpdateController::class)->name('update');
            Route::get('/logo/{logo}/edit', \App\Http\Controllers\Admin\Logo\EditController::class)->name('edit');
        });

        Route::name('banner.')->group(function () {
            Route::get('/banners', \App\Http\Controllers\Admin\Banner\IndexController::class)->name('index');
            Route::patch('/banners/{banner}', \App\Http\Controllers\Admin\Banner\UpdateController::class)->name('update');
            Route::get('/banners/{banner}/edit', \App\Http\Controllers\Admin\Banner\EditController::class)->name('edit');
        });

        Route::name('card.')->group(function () {
            Route::get('/cards', \App\Http\Controllers\Admin\Card\IndexController::class)->name('index');
            Route::patch('/cards/{card}', \App\Http\Controllers\Admin\Card\UpdateController::class)->name('update');
            Route::get('/cards/{card}/edit', \App\Http\Controllers\Admin\Card\EditController::class)->name('edit');
        });

        Route::name('service.')->group(function () {
            Route::get('/services', \App\Http\Controllers\Admin\Service\IndexController::class)->name('index');
            Route::patch('/services/{service}', \App\Http\Controllers\Admin\Service\UpdateController::class)->name('update');
            Route::get('/services/{service}/edit', \App\Http\Controllers\Admin\Service\EditController::class)->name('edit');
        });

        Route::name('content.')->group(function () {
            Route::get('/contents', \App\Http\Controllers\Admin\Content\IndexController::class)->name('index');
            Route::patch('/contents/{content}', \App\Http\Controllers\Admin\Content\UpdateController::class)->name('update');
        });

        Route::name('footer.')->group(function () {
            Route::get('/footers', \App\Http\Controllers\Admin\Footer\IndexController::class)->name('index');
            Route::patch('/footers/{footer}', \App\Http\Controllers\Admin\Footer\UpdateController::class)->name('update');
        });

        Route::name('about-text.')->group(function () {
            Route::get('/about-texts', \App\Http\Controllers\Admin\About\Text\IndexController::class)->name('index');
            Route::patch('/about-texts/{aboutText}', \App\Http\Controllers\Admin\About\Text\UpdateController::class)->name('update');
        });

        Route::name('about-image.')->group(function () {
            Route::get('/about-image', \App\Http\Controllers\Admin\About\Image\IndexController::class)->name('index');
            Route::patch('/about-image/{aboutImage}', \App\Http\Controllers\Admin\About\Image\UpdateController::class)->name('update');
        });

        Route::name('about.')->group(function () {
            Route::get('/abouts', \App\Http\Controllers\Admin\About\IndexController::class)->name('index');
            Route::patch('/abouts/{about}', \App\Http\Controllers\Admin\About\UpdateController::class)->name('update');
            Route::get('/abouts/{about}/edit', \App\Http\Controllers\Admin\About\EditController::class)->name('edit');
        });

        Route::name('gallery.')->group(function () {
            Route::get('/galleries', \App\Http\Controllers\Admin\Gallery\IndexController::class)->name('index');
            Route::post('/galleries', \App\Http\Controllers\Admin\Gallery\StoreController::class)->name('store');
            Route::get('/galleries/create', \App\Http\Controllers\Admin\Gallery\CreateController::class)->name('create');
            Route::delete('/galleries', \App\Http\Controllers\Admin\Gallery\DeleteController::class)->name('destroy');
        });
    });

    \Illuminate\Support\Facades\Auth::routes();
}else {

    Route::get("/{page}", \App\Http\Controllers\Site\MainController::class)->where("page", ".*");
}


