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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/leaves', function () {
    return view('leave');
});
Route::get('/login', function () {
    return view('login');
});
// Route::get('/registration', function () {
//     return view('registration');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/db', function () {
//     return view('db');
// });

// Route::get('/','path_finding@index');
// Route::get('/contact','path_finding@contact');
// Route::get('/leave', function () {
//     return view('header');
// });

