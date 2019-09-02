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

Route::post('/createAdvisor','AdvisorLoginController@createAdvisor');
Route::get('/advisor/verify/{token}', 'AdvisorLoginController@verifyEmail');

Route::get('/login', function () {
    return view('advisors.login');
});



