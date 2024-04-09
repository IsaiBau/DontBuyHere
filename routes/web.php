<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VistaRController;
use App\Http\Controllers\RegistroController;
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
})->name('home');

Route::controller(HomeController::class)->group(function(){
    Route::get('/home', 'index')->name('home');
    Route::get('/login', 'login')->name('login.index');
    Route::get('/review', 'review')->name('review.index');
    Route::get('/register', 'register')->name('register.index');
    Route::get('/restaurant', 'restaurant')->name('restaurant');
    Route::get('/shop', 'shops')->name('shop');
    Route::get('/restaurant', 'restaurant')->name('restaurant');
    Route::get('/shop', 'shops')->name('shop');
});

Route::post('/register', [RegistroController::class, 'store'])->name('registro');
Route::post('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login.log');

Route::controller(DashboardController::class)->group(function(){
    Route::get('/dashboard', 'index')->middleware('auth.admin')->name('dashboard');
    Route::get('/establecimiento', 'indexEs')->name('establecimiento');
    Route::get('/reviews', 'indexRe')->name('reviews');
    Route::get('/users', 'indexUsu')->name('user');
    Route::get('/logout', 'logout')->name('logout');
    //CRUD
    Route::get('/userData/{usuario}', 'edit')->name('editar.index');
    Route::put('/userData/{usuario}', 'update')->name('update');
    Route::delete('/delete/{usuario}', 'destroy')->name('user.destroy');
    //CRUD ESTABLECIMIENTO
    Route::get('/esData/{usuario}', 'editEs')->name('editarEs.index');
});

Route::get('vistaReview', [VistaRController::class, 'vista'])->name('vistaReview');
//Route::get('/login', [HomeController::class, 'index']);

//Route::get('/dashboard', 'index')->name('dashboard1') ->middleware('auth.admin')->name('admin.index');

