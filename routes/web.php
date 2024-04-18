<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VistaRController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\reviewController;
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
    return view('home');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/home', 'index');
    Route::get('/login', 'login')->name('login.index');
    Route::get('/register', 'register')->name('register.index');
    // Route::get('/review', 'review')->name('review');
    // Route::get('/restaurant', 'restaurant')->name('restaurant');
    Route::get('/shop', 'shops')->name('shop');
    // Route::get('/restaurant', 'restaurant')->name('restaurant');
    // Route::get('/shop', 'shops')->name('shop');
});

// Route::get(reviewController::class)->group(function(){
//     Route::get('/review', 'review')->name('review.index');
// });
Route::get('/review', [reviewController::class, 'index'])->name('review.index');
Route::post('/guardar-establecimiento', [reviewController::class, 'guardarEstablecimiento'])->name('guardar.establecimiento');
Route::post('/guardar-resena', [reviewController::class, 'guardarResena'])->name('guardar.resena');



Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant.index');
Route::post('/register', [RegistroController::class, 'store'])->name('registro');
Route::post('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login.log');

Route::controller(DashboardController::class)->group(function(){
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/establecimiento', 'indexEs')->name('establecimiento');
    Route::get('/reviews', 'indexRe')->name('reviews');
    Route::get('/users', 'indexUsu')->name('user');
    Route::get('/logout', 'logout')->name('logout');
});

Route::get('vistaReview', [VistaRController::class, 'vista'])->name('vistaReview');
//Route::get('/login', [HomeController::class, 'index']);

//Route::get('/dashboard', 'index')->name('dashboard1') ->middleware('auth.admin')->name('admin.index');
