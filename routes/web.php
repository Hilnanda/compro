<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\HomeController;

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
// compro

Route::namespace('user')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');