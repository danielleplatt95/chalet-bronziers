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

Route::get('/','HomeController@index');

Route::post('/make-enquiry', 'EnquiryController@create');
Route::post('/message-us', 'MessageController@create');
Route::post('/reviews/submit-review', 'ReviewController@create');