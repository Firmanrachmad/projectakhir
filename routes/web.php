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

Route::get('/home', 'WisataController@index')->name('home');

Auth::routes();

// Route::get('/home1', 'HomeController@index')->name('home1');
// --------------------------------------------------------------------
Route::get('/manage', 'WisataController@index1')->name('manage');
Route::get('/wisata/add','WisataController@add');
Route::post('/wisata/create','WisataController@create');
Route::get('/wisata/edit/{id}','WisataController@edit');
Route::post('/wisata/update/{id}','WisataController@update');
Route::get('/wisata/delete/{id}','WisataController@delete');
Route::get('/wisata/cetak_pdf', 'WisataController@cetak_pdf');
Route::get('/wisata/{id}/addComment', 'WisataController@addComment');
// --------------------------------------------------------------------
Route::get('/manageusers', 'UserController@index')->name('manageusers');
Route::get('/manageusers/add','UserController@add');
Route::post('/manageusers/create','UserController@create');
Route::get('/manageusers/edit/{id}','UserController@edit');
Route::post('/manageusers/update/{id}','UserController@update');
Route::get('/manageusers/delete/{id}','UserController@delete');
Route::get('/manageusers/cetak_pdf', 'UserController@cetak_pdf');
Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', 'ProfileController@edit')->name('profile.edit');
});
Route::group(['middleware' => 'auth'], function () {

    Route::get('profile', 'ProfileController@edit')
        ->name('profile.edit');

    Route::patch('profile', 'ProfileController@update')
        ->name('profile.update');
});
// --------------------------------------------------------------------
Route::get('/managereview', 'WisataController@index2')->name('managereview');
Route::get('/wisatar/add','WisataController@add1');
Route::get('/wisataru/add','WisataController@addu');
Route::post('/wisatar/create','WisataController@create1');
Route::post('/wisataru/create','WisataController@createu');
Route::get('/wisatar/edit/{id}','WisataController@edit1');
Route::post('/wisatar/update/{id}','WisataController@update1');
Route::get('/wisatar/delete/{id}','WisataController@delete1');
Route::get('/wisatar/cetak_pdf', 'WisataController@cetak_pdf1');