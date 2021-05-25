<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\BasketController;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/tours-types/{slug}', [MainController::class, 'getTourType']);
Route::get('/tours-types', [MainController::class, 'getToursTypes'])->name("tours-types");

Route::get('/tours', [MainController::class, 'getToursSpecial'])->name("tours");
Route::get('/tours/{slug}', [MainController::class, 'getTour']);

Route::get('/basket', [BasketController::class, 'basket']);
Route::get('/basket-place', [BasketController::class, 'basketPlace']);

Route::post('/basket-confirm', [BasketController::class, 'basketConfirm']);
Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');

// Route::get('login', [UserAuthController::class, 'login'])->middleware('alreadyLogged');
// Route::get('register', [UserAuthController::class, 'register'])->middleware('alreadyLogged');
// Route::post('create', [UserAuthController::class, 'create'])->name('auth.create');
// Route::post('check', [UserAuthController::class, 'check'])->name('auth.check');
// Route::get('profile', [ProfileController::class, 'profile'])->middleware('isLogged');
// Route::get('logout', [UserAuthController::class, 'logout']);
// Route::get('/', [HomePageController::class, 'data']);
