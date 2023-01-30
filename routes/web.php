<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//blog
Route::controller(App\Http\Controllers\BlogController::class)->prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/store', 'store')->name('store');
    Route::get('/{blog}', 'show')->name('show');
});

//theme
Route::controller(App\Http\Controllers\ThemeController::class)->prefix('themes')->name('themes.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/store', 'store')->name('store');
    Route::get('/{theme}', 'show')->name('show');
});

//service
Route::controller(App\Http\Controllers\ServicesController::class)->prefix('services')->name('services.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/store', 'store')->name('store');
    Route::get('/{service}', 'show')->name('show');
});

//profile
Route::controller(App\Http\Controllers\ProfileController::class)->prefix('profiles')->name('profiles.')->group(function () {
    Route::get('/basic', 'showBasicInfo')->name('basic');
    Route::post('/store', 'store')->name('store');
    Route::get('/{profile}', 'show')->name('show');
});
