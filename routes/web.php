<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcerneController;
use App\Http\Controllers\ConstatsController;
use App\Http\Controllers\DescriptionController;


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
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('concernes', ConcerneController::class);
Route::resource('constats', ConstatsController::class);
Route::resource('descriptions', DescriptionController::class);
