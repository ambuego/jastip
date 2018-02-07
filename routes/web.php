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

Route::get('/', function() {
    return view('welcome');
});

Route::get('email-check/{email}', 'Api\TMoney\GeneralController@emailCheck');

Route::get('signin', 'Api\TMoney\GeneralController@signIn');

Route::get('signup', 'Api\TMoney\GeneralController@signUp');

Route::get('email-verif/{activationCode}', 'Api\TMoney\GeneralController@emailVerification');
