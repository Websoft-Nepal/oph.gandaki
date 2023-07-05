<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SilderController;
use App\Http\Controllers\Admin\LeaderController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\GalleryController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->prefix('admin')->group(function () {
    
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin_dashboard');

    // slider
    Route::resource('slider', SilderController::class);
    Route::resource('leaders', LeaderController::class);
    Route::resource('staff', StaffController::class);
    Route::resource('newscategory', NewsCategoryController::class);
    Route::resource('news', NewsController::class);
    Route::resource('gallery', GalleryController::class);

});