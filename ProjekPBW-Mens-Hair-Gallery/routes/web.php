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

Route::get('/hair', [\App\Http\Controllers\HairstyleController::class, 'hairstyle'])->name('blog.hairstyle');
Route::get('/produk', [\App\Http\Controllers\HairstyleController::class, 'product'])->name('blog.product');
Route::get('/rekom', [\App\Http\Controllers\HairstyleController::class, 'rekomendasi'])->name('blog.rekomendasi');
Route::get('/', [\App\Http\Controllers\HairstyleController::class, 'home'])->name('blog.home');

Auth::routes([
    'register' => false
]);

Route::group(['prefix' => 'dashboard', ' middleware' => ['web', 'auth']], function () {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    //posts
    Route::resource('/posts', \App\Http\Controllers\PostController::class);
    Route::resource('/products', \App\Http\Controllers\ProductController::class);
    //file manager
    Route::group(['prefix' => 'filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});
