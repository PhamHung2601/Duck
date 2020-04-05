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
    Route::get('course/register/{id}/sendemail', [
        'middleware' => 'admin.user',
        'uses' => 'MailController@sendEmailRegister',
        'as' => 'voyager.course-register.sendemail',
    ]);
    Route::get('sales/rule/{id}/sendemail', [
        'middleware' => 'admin.user',
        'uses' => 'MailController@sendEmailSalesRule',
        'as' => 'voyager.sales-rule.sendemail',
    ]);
});
Route::get('/cac-khoa-hoc', function () {
    return view('landing-page/courses/course_overview');
});
Route::get('/khoa-hoc/lop-online', function () {
    return view('landing-page/list/online');
});
Route::get('/khoa-hoc/lop-online/khoa-hoc-live-stream-overview', function () {
    return view('landing-page/list/live_stream_overview');
});
Route::get('/khoa-hoc/lop-offline', function () {
    return view('landing-page/list/offline');
});
Route::post('/course/register', 'CourseController@register')->name('course.register');
Route::get('/gioi-thieu', function () {
    return view('landing-page/introduction/about');
});
Route::get('/hoc-sinh', function () {
    return view('landing-page/introduction/students');
});
Route::get('/tuyen-dung', function () {
    return view('landing-page/introduction/hiring');
});
Route::get('/hoc-bong-AT-foundation', function () {
    return view('landing-page/introduction/scholarship');
});
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'homepage.index'
]);

Route::get('/books/sach-xu-li-nhanh', function () {
    return view('landing-page/book/book-landing');
});
Route::get('/book/{id}-{slug?}.html', 'BookController@index')
    ->where('slug', '[a-zA-Z0-9-_]+')
    ->where('id', '[0-9]+')->name('book.detail');

Route::get('/books/list', 'BookController@list')->name('books.list');

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
Route::get('new/{id}-{slug?}.html', 'NewsController@view')
    ->where('slug', '[a-zA-Z0-9-_]+')
    ->where('id', '[0-9]+')
    ->name('new.view');

Route::resource('/test', 'TestController');
Route::get('test/{id}-{slug?}.html', 'TestController@show')
    ->where('slug', '[a-zA-Z0-9-_]+')
    ->where('id', '[0-9]+')
    ->name('test.view');

Route::post('/account/contact', 'HomeController@addContactEmail')->name('home.addContactEmail');


Route::get('/send/email', 'MailController@mail');
Route::post('/search', 'SearchController@search')->name('search.search');
Route::post('cart/discount', 'CartController@discount')->name('cart.discount');

Route::post('review/submit', 'ReviewController@submit')->name('review.submit');

Route::get('document/{id}-{slug?}.html', 'DocumentController@view')
    ->where('slug', '[a-zA-Z0-9-_]+')
    ->where('id', '[0-9]+')
    ->name('document.view');

