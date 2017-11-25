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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('personals', 'Personals\PersonalsController');
Route::resource('articles', 'Articles\ArticlesController');
Route::resource('feedbacks', 'Feedbacks\FeedbacksController');
Route::resource('reviews', 'Reviews\ReviewsController');
Route::resource('keywords', 'Keywords\KeywordsController');
Route::resource('categories', 'Categories\CategoriesController');
Route::resource('numbers', 'Numbers\NumbersController');
Route::resource('volumes', 'Volumes\VolumesController');
Route::resource('magazines', 'Magazines\MagazinesController');
Route::resource('preferences', 'Preferences\PreferencesController');
Route::resource('appearances', 'Appearances\AppearancesController');
Route::resource('informations', 'Information\InformationController');
