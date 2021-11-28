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
    Route::get('/team', 'TeamController@index')->name('team');
    Route::get('/news', 'NewsController@index')->name('news');
    Route::get('/news/detail/{id}', 'NewsController@detail');
    Route::post('/message/create', 'HomeController@store');
    Route::get('/service', 'ServiceController@index')->name('service');
});

Auth::routes();

Route::namespace('admin')
    ->middleware('auth')->group(function () {
        // banner
        Route::get('/banner', 'BannerController@index')->name('banner');
        Route::post('/banner/create', 'BannerController@create');

        //Content Main
        Route::get('/content', 'ContentController@index')->name('content');
        Route::get('/content/{id}', 'ContentController@edit');
        Route::post('/content/create', 'ContentController@create');
        Route::get('/content/delete/{id}', 'ContentController@destroy');
        Route::post('/content/update', 'ContentController@update');

        //Team
        Route::get('/team-cms', 'TeamsController@index')->name('team-cms');
        Route::post('/team-cms/create', 'TeamsController@create');
        Route::get('/team-cms/{id}', 'TeamsController@edit');
        Route::get('/team-cms/delete/{id}', 'TeamsController@destroy');
        Route::post('/team-cms/update', 'TeamsController@update');

        //News
        Route::get('/news-cms', 'NewsCMSController@index')->name('news-cms');
        Route::post('/news-cms/create', 'NewsCMSController@create');
        Route::get('/news-cms/{id}', 'NewsCMSController@edit');
        Route::get('/news-cms/delete/{id}', 'NewsCMSController@destroy');
        Route::post('/news-cms/update', 'NewsCMSController@update');

        //Carousel
        Route::get('/carousel', 'CarouselController@index')->name('carousel');
        Route::post('/carousel/create', 'CarouselController@create');
        Route::get('/carousel/{id}', 'CarouselController@edit');
        Route::get('/carousel/delete/{id}', 'CarouselController@destroy');
        Route::post('/carousel/update', 'CarouselController@update');

        //Contact Us
        Route::get('/contact-us-cms', 'ContactUsCMSController@index')->name('contact-us-cms');
        Route::post('/contact-us-cms/create', 'ContactUsCMSController@create');
        Route::get('/contact-us-cms/{id}', 'ContactUsCMSController@edit');
        Route::get('/contact-us-cms/delete/{id}', 'ContactUsCMSController@destroy');
        Route::post('/contact-us-cms/update', 'ContactUsCMSController@update');

        // Message
        Route::get('/message', 'MessageController@index')->name('message');
        Route::get('/message/delete/{id}', 'MessageController@destroy');

        //Sosmed
        Route::get('/sosmed', 'SosmedController@index')->name('sosmed');
        Route::post('/sosmed/create', 'SosmedController@create');
        Route::get('/sosmed/{id}', 'SosmedController@edit');
        Route::get('/sosmed/delete/{id}', 'SosmedController@destroy');
        Route::post('/sosmed/update', 'SosmedController@update');

        // Footer
        Route::get('/footer', 'FooterController@index')->name('footer');
        Route::post('/footer/create', 'FooterController@create');
        Route::get('/footer/delete/{id}', 'FooterController@destroy_image');

        // Copyright
        Route::post('/copyright/create', 'CopyrightController@create');

        // About Us
        Route::get('/about-cms', 'AboutUsCMSController@index')->name('about-cms');
        Route::post('/about-cms/create', 'AboutUsCMSController@create');
        Route::get('/about-cms/{id}', 'AboutUsCMSController@edit');
        Route::get('/about-cms/delete/{id}', 'AboutUsCMSController@destroy');
        Route::post('/about-cms/update', 'AboutUsCMSController@update');

        // Services
        Route::get('/service-cms', 'ServiceCMSController@index')->name('service-cms');
        Route::post('/service-cms/create', 'ServiceCMSController@create');
        Route::post('/service-cms/update', 'ServiceCMSController@update');
    });
