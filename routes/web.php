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
Route::get('/courses', function () {
    return view('landing-page/courses/course_overview');
});
Route::get('/courses/list/overview', function () {
    return view('landing-page/list/overview');
});
Route::get('/courses/list/test-and-express', function () {
    return view('landing-page/list/sidecourse');
});

Route::get('/home', [
    'uses' => 'HomeController@index',
    'as' => 'homepage.index'
]);

Route::get('/books', function () {
    return view('book/list');
});
Route::get('/books/detail/{id?}', function () {
    return view('book/detail');
});
Route::resource('/cart', 'CartController');

Route::resource('/checkout', 'CheckoutController');
Route::post('/checkout/submit', 'CheckoutController@saveOrder');

Route::post('cart/add/{id?}', 'CartController@addCart')->name('cart.add');
Route::get('cart/updateCartItem/{rowId?}', 'CartController@updateCartItem')->name('cart.updateCart');
Route::post('cart/updateCart', 'CartController@updateCart')->name('cart.updateCart');
Route::post('cart/deleteCart', 'CartController@deleteCart')->name('cart.deleteCart');
Route::get('cart/removeItem/{rowId?}', 'CartController@removeItem')->name('cart.removeItem');


Route::resource('/news', 'NewsController');
Route::get('news/detail/{id?}', 'CartController@detail')->name('news.detail');

