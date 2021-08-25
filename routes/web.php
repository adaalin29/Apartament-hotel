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

Route::get('/', 'IndexController@index');
Route::get('/galerie', 'GalleryController@index');
Route::get('/apartamente', 'ApartamentsController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/termeni', 'GDPR@termeni');
Route::get('/politica', 'GDPR@politica');
Route::get('/confidentialitate', 'GDPR@confidentialitate');

Route::post('send-message','IndexController@send_message');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();


    Route::get('/storage/thumb/{query}/{file?}', 'ThumbController@index')
    ->where([
        'query' => '[A-Za-z0-9\:\;\-]+',
        'file'  => '[A-Za-z0-9\/\.\-\_]+',
    ])
    ->name('thumb');
});
