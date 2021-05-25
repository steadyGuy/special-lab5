<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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

Route::get('/tours', [MainController::class, 'getTours'])->name("tours");
Route::get('/tours/{slug}', [MainController::class, 'getTour']);

Route::post('/send-order', [MainController::class, 'setOrderInfo']);
