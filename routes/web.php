<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VistaRController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\reviewController;
use App\Http\Controllers\ShopController;

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
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
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
    Route::get('/esData/{establecimiento}', 'editEs')->name('editarEs.index');
    Route::put('/esData/{establecimiento}', 'updateEs')->name('updateEs');
    Route::delete('/deleteEs/{establecimiento}', 'destroyEs')->name('es.destroy');
    //CRUD RESEÑA
    Route::get('/reData/{resena}', 'edit')->name('editarRe.index');
    Route::put('/reData/{resena}', 'update')->name('updateRe');
    Route::delete('/deleteRe/{resena}', 'destroyRe')->name('re.destroy');
});

Route::get('vistaReview', [VistaRController::class, 'vista'])->name('vistaReview');

//Route::get('/dashboard', 'index')->name('dashboard1') ->middleware('auth.admin')->name('admin.index');
