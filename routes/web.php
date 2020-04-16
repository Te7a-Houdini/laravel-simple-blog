<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', 'TestController@testAction');

//to make a table of posts :-

/**
 * 1- define a new route for the user in order to hit the url in browser
 * 2- define a new controller
 * 3- define a new view
 * 4- define $posts array and pass it to the view
 */