<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\LeaderController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\ChiefMsgController;
use App\Http\Controllers\Admin\ProfileController;

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
    return view('index');
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function(){
    return redirect()->route('admin_dashboard');
});

//to access login page of admin
Route::get('/admin', function(){
    return redirect()->route('login');
});

//Auth Route
Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin_dashboard');

    // slider
    Route::resource('slider', SliderController::class);
    Route::put('slider_status/{id}', [SliderController::class, 'slider_status'])->name('slider_status');

    Route::resource('leaders', LeaderController::class);
    Route::resource('staff', StaffController::class);
    Route::resource('newscategory', NewsCategoryController::class);
    Route::resource('news', NewsController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('reports', ReportController::class);
    Route::resource('chiefmsg', ChiefMsgController::class);
    Route::resource('profile', ProfileController::class);

});