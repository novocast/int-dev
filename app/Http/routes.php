<?php

use ../../DemoTwoControllers;

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

Route::get('Controller', 'DemoTwoController@showWelcome');

Route::get('../../DemoTwoControllers', ['uses' => 'DemoTwoControllers@showWelcome']);

Route::get('/', function () {
    return view('welcome');
});
