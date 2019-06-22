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

Route::get('/', 'FrontController@index')->name('/.index');
Route::get('news', 'FrontController@news')->name('news.index');
Route::get('new/{id}', 'FrontController@new')->name('new.index');
Route::get('videos', 'FrontController@videos');
Route::get('connect', 'FrontController@connect')->name('connects.index');
Route::get('pages/{id}', 'FrontController@pages')->name('pagess.index');
Route::get('questions', 'FrontController@questions')->name('questions.index');
Route::Post('questions', 'FrontController@question');
Route::post('sends', 'FrontController@sends');

Route::get('registers', 'FrontController@register')->name('register.index');
Route::Post('registers', 'FrontController@registers');
Auth::routes();
Route::group(['middleware'=>'auth','prefix'=>'admin'],function (){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('setting','SettingController');

    Route::resource('video','VideoController');

    Route::resource('post','PostController');

    Route::resource('connect','ConnectController');

    Route::resource('question','QuestionController');

    Route::resource('catogery','CatogeryController');


    Route::resource('pages','PagesController');

    Route::resource('company','CompanyController');


    Route::resource('slider','SliderController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
