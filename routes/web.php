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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/courses', function () {
    return view('landing-page/courses/course_overview');
});
Route::get('/courses/list/online', function () {
    return view('landing-page/list/online');
});
Route::get('/courses/list/offline', function () {
    return view('landing-page/list/offline');
});
Route::get('/about/us', function () {
    return view('landing-page/introduction/about');
});
Route::get('/about/students', function () {
    return view('landing-page/introduction/students');
});
Route::get('/about/hiring', function () {
    return view('landing-page/introduction/hiring');
});
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'homepage.index'
]);

Route::get('/books/sach-xu-li-nhanh', function () {
    return view('landing-page/book/book-landing');
});
Route::get('/books/detail/{id?}', 'BookController@index');
Route::get('/books/list', 'BookController@list');

Route::resource('/cart', 'CartController');

Route::resource('/checkout', 'CheckoutController');
Route::post('/checkout/submit', 'CheckoutController@saveOrder');

Route::post('cart/add/{id?}', 'CartController@addCart')->name('cart.add');
Route::get('cart/updateCartItem/{rowId?}', 'CartController@updateCartItem')->name('cart.updateCart');
Route::post('cart/updateCart', 'CartController@updateCart')->name('cart.updateCart');
Route::post('cart/deleteCart', 'CartController@deleteCart')->name('cart.deleteCart');
Route::get('cart/removeItem/{rowId?}', 'CartController@removeItem')->name('cart.removeItem');
Route::resource('/success', 'SuccessController');
Route::resource('/news', 'NewsController');
Route::get('news/view/{id?}', 'NewsController@view')->name('news.view');

Route::resource('/test', 'TestController');
Route::get('test/view/{id?}', 'TestController@view')->name('test.view');

Route::post('/account/contact', 'HomeController@addContactEmail')->name('home.addContactEmail');



Route::get('/send/email', 'MailController@mail');
Route::post('/search', 'SearchController@search')->name('search.search');


