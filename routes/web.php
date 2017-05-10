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

Route::get('{username}/profile', 'ProfileController@index')->name('profile');
Route::get('{username}/profile/create', 'ProfileController@create')->name('profile.create');
Route::get('{username}/profile/{id}', 'ProfileController@show')->name('profile.show');

//CRUD
Route::post('{username}/profile', 'ProfileController@store')->name('profile.store');
Route::get('{username}/profile/{id}/edit', 'ProfileController@edit')->name('profile.edit');
Route::put('{username}/profile/{id}', 'ProfileController@update')->name('profile.update');

Route::get('/profiles', 'ProfileController@getAllProfiles')->name('all.profiles');
Route::get('/profile/{id}', 'ProfileController@getOneProfile')->name('one.profile');
