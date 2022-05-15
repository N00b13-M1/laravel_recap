<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('layouts.app');
})->name('login');

// Route::get('/logout', function () {
//     return view('home');
// })->name('logout');
Route::middleware(['auth'])->group(function(){
    Route::get('/back', function () {
        return view('back.pages.back');
    });

    Route::get("/back/banner", [BannerController::class, 'index' ])->name('banner.index');
    Route::get("/back/banner/{id}/edit", [BannerController::class, 'edit' ])->name('banner.edit');
    Route::post("/back/banner/{id}/update", [BannerController::class, 'update' ])->name('banner.update');

    Route::resource('back/testimonials', TestimonialController::class);
    Route::resource('back/services', ServiceController::class);
});

Auth::routes();


