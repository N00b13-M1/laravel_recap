<?php

use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('front');
});

Route::get('/back', function () {
    return view('back.pages.back');
});

Route::get("/back/banner", [BannerController::class, 'index' ])->name('banner.index');
Route::get("/back/banner/{id}/edit", [BannerController::class, 'edit' ])->name('banner.edit');
Route::get("/back/banner/{id}/update", [BannerController::class, 'update' ])->name('banner.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
