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

//portfolio
Route::controller(App\Http\Controllers\ProfileController::class)->name('portfolio.')->group(function () {
    Route::get('/{username}', 'showPortfolio')->name('index');
});

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
Route::controller(App\Http\Controllers\ProfileController::class)->prefix('profiles')->name('profile.')->group(function () {
    Route::get('/basic', 'showBasicInfo')->name('basic');
    Route::put('/basic', 'updateBasicInfo')->name('basic.update');
    Route::get('/educational', 'showEducationalInfo')->name('educational');
    Route::put('/educational', 'updateEducationalInfo')->name('educational.update');
    Route::get('/experience', 'showExperienceInfo')->name('experience');
    Route::put('/experience', 'updatEexperienceInfo')->name('experience.update');
    Route::get('/industry', 'showIndustryInfo')->name('industry');
    Route::put('/industry', 'updateIndustryInfo')->name('industry.update');
    Route::get('/services', 'showServicesInfo')->name('services');
    Route::put('/services', 'updateServicesInfo')->name('services.update');
});

//adminpanel
Route::get('admin/login', [App\Http\Controllers\Adminpanel\AuthController::class, 'show'])->name('admin.login.show');
Route::post('admin/login', [App\Http\Controllers\Adminpanel\AuthController::class, 'login'])->name('admin.login');
Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {

    Route::post('admin/logout', [App\Http\Controllers\Adminpanel\AuthController::class, 'logout'])->name('logout');

    //dashboard
    Route::controller(App\Http\Controllers\Adminpanel\DashboardController::class)->name('dashboard')->group(function () {
        Route::get('/', 'index');
    });



    // user
    Route::controller(App\Http\Controllers\Adminpanel\UserController::class)->prefix('users')->name('user.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{user}', 'show')->name('show');
        Route::get('/{user}/edit', 'edit')->name('edit');
        Route::put('/{user}', 'update')->name('update');
        Route::delete('/{user:id}', 'destroy')->name('destroy');
    });



    //blog
    Route::controller(App\Http\Controllers\Adminpanel\BlogController::class)->prefix('blogs')->name('blog.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{blog}', 'show')->name('show');
        Route::get('/{blog}/edit', 'edit')->name('edit');
        Route::put('/{blog}', 'update')->name('update');
        Route::delete('/{blog:id}', 'destroy')->name('destroy');
    });

    //blog-category
    Route::controller(App\Http\Controllers\Adminpanel\BlogCategoryController::class)->prefix('blogs-category')->name('blog-category.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{blogCategory}', 'show')->name('show');
        Route::get('/{blogCategory}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{blogCategory:id}', 'destroy')->name('destroy');
    });

    //themes
    Route::controller(App\Http\Controllers\Adminpanel\ThemeController::class)->prefix('themes')->name('theme.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{theme}', 'show')->name('show');
        Route::get('/{theme}/edit', 'edit')->name('edit');
        Route::put('/{theme}', 'update')->name('update');
        Route::delete('/{theme:id}', 'destroy')->name('destroy');
    });

    // admins
    Route::controller(App\Http\Controllers\Adminpanel\AdminController::class)->prefix('admin-users')->name('admin-user.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{user}', 'show')->name('show');
        Route::get('/{user}/edit', 'edit')->name('edit');
        Route::put('/{user}', 'update')->name('update');
        Route::delete('/{user:id}', 'destroy')->name('destroy');
    });
});
