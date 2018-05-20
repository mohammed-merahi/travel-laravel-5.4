<?php

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

//Route::get('/', 'SuperTravelController@index');
/* Route::get('/', function () {
    return view('admin/dashboard');
}); */


Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    Route::get('/admin', 'HomeController@index')->name('Tableau de bord');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/admin/sejour', 'SejourController@index')->name('Séjours');

    Route::get('/admin/settings/general', 'SettingsController@general')->name('Général');
    Route::get('/admin/settings/home', 'SettingsController@home')->name('Général');
    Route::get('/admin/settings/logo', 'SettingsController@logo')->name('Général');
    Route::get('/admin/settings/slider', 'SettingsController@slider')->name('Général');
    Route::get('/admin/settings/partners_logos', 'SettingsController@partners_logos')->name('Général');
    Route::get('/admin/settings/social_networks', 'SettingsController@social_networks')->name('Général');

    Route::get('admin/omra', 'OmraController@index');

    Route::resource('/admin/countryTour', 'FrontendCountryController');
    Route::resource('/admin/omra', 'OmraController');
    Route::resource('/admin/tour', 'FrontendController');
    Route::resource('/admin/order', 'OrderController');

    Route::resource('/supertravel', 'SuperTravelController');
    Route::resource('/country', 'CountryController');

});

Route::get('/search', 'SuperTravelController@search');
Route::get('/', 'FrontendController@index');
Route::get('/omra', 'FrontendController@omra');
Route::get('/omra/subscribe_omra', 'FrontendController@subscribe_omra');
Route::get('/contact', 'FrontendController@contact');
Route::get('/hotellerie', 'FrontendController@hotellerie');
Route::resource('/albumdetails', 'AlbumDetailsController');

