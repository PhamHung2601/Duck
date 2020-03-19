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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/', function () {
    return view('landing-page/welcome');
});

Route::get('/home', function () {
    return view('home-page/home');
});
Route::get('/books', function () {
    return view('book/list');
});
Route::get('/books/detail/{id?}', function () {
    return view('book/detail');
});