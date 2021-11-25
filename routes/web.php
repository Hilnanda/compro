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
    Route::get('/about_us', 'AboutUsController@index')->name('about_us');
    Route::get('/contact_us', 'ContactUsController@index')->name('contact_us');
    Route::get('/news', 'NewsController@index')->name('news');
    Route::get('/detail-news', 'NewsController@detailNews')->name('detail-news');
});

Auth::routes();

Route::namespace('admin')->group(function () {
    // banner
    Route::get('/banner', 'BannerController@index')->name('banner');
    Route::post('/banner/create', 'BannerController@create');

    //Content Main
    Route::get('/content', 'ContentController@index')->name('content');
});
