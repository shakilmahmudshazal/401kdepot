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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {

    return view('advisors.signup');
})->name('home');

Route::post('/createUser','UserController@createUser');
Route::get('/user/verify/{token}', 'UserController@verifyEmail');

Route::get('/login','SessionController@create'); 
Route::post('/login','SessionController@login');
Route::get('/logout','SessionController@destroy');  

// 	function () {
//     return view('advisors.login');
// });
Route::get('/advisorProfile','ProfileController@show');
Route::get('/advisorProfilePicCreate','ProfilePicController@create');
Route::post('/save-profile','ProfilePicController@save');


