<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Weather\WeatherController;

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

Route::get('weather', [weatherController::class, 'index'])->name('weather.index');
Route::get('weather-list', [weatherController::class, 'searchList'])->name('weather.list');
Route::post('weather-store', [WeatherController::class, 'store'])->name('weather.save');
// Route::get('user/filter', [WeatherController::class, 'filter'])->name('user.filter');
