<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('','IndexController@index');
Route::get('topic','TopicController@index');

Route::group(['prefix'=>'home','namespace'=>'User','middleware'=>'auth'],function(){
    Route::get('','IndexController@index');

    Route::resource('category','CategoryController');
    Route::resource('group','GroupController');
    Route::resource('link','LinkController');

    Route::get('setting','SettingController@index');
});

Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController'
]);