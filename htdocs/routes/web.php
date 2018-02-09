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
})->name('welcome');

Auth::routes();
Route::group(['middleware' => ['guest']], function (){
    Route::get('/demo-yomerter'   , 'Yomerter\DemoYomerterController@index')->name('demo-yomerter');
    Route::get('/termsofuse'      , 'Auth\TermsOfUseController@index')->name('terms-of-use');
    Route::get('/choice-position' , 'Auth\ChoicePositionController@index')->name('choice-position');
    Route::post('/choice-position', 'Auth\ChoicePositionController@goNext')->name('choice-position');
});

Route::group(['middleware' => ['auth']], function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/yomerter', 'Yomerter\YomerterController@index')->name('yomerter');
    Route::post('/yomerter', 'Yomerter\YomerterController@post')->name('yomerter');
});
