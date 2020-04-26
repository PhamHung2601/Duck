<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

    Route::post('orders-status', [
        'middleware' => 'admin.user',
        'uses' => 'Voyager\OrderController@updateStatus',
        'as' => 'voyager.orders.status',
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
Route::get('/thanh-tich', function () {
    return view('landing-page/introduction/students');
});
Route::get('/hoc-sinh', function () {
    return view('landing-page/introduction/achive');
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
Route::get('/sach/{id}-{slug?}.html', 'BookController@index')
    ->where('slug', '[a-zA-Z0-9-_]+')
    ->where('id', '[0-9]+')->name('book.detail');

Route::get('/tat-ca-sach', 'BookController@list')->name('books.list');

Route::resource('/cart', 'CartController');

Route::resource('/checkout', 'CheckoutController');
Route::post('/checkout/submit', 'CheckoutController@saveOrder');

Route::post('cart/add/{id?}', 'CartController@addCart')->name('cart.add');
Route::get('cart/updateCartItem/{rowId?}', 'CartController@updateCartItem')->name('cart.updateCart');
Route::post('cart/updateCart', 'CartController@updateCart')->name('cart.updateCart');
Route::post('cart/deleteCart', 'CartController@deleteCart')->name('cart.deleteCart');
Route::get('cart/removeItem/{rowId?}', 'CartController@removeItem')->name('cart.removeItem');
Route::resource('/success', 'SuccessController');

Route::resource('/tin-tuc', 'NewsController');
Route::get('tin-tuc/{id}-{slug?}.html', 'NewsController@show')
    ->where('id', '[0-9]+')
    ->name('news.view');

Route::resource('/de-thi', 'TestController');
Route::get('de-thi/{id}-{slug?}.html', 'TestController@show')
    ->where('slug', '[a-zA-Z0-9-_]+')
    ->where('id', '[0-9]+')
    ->name('test.view');

Route::post('/account/contact', 'HomeController@addContactEmail')->name('home.addContactEmail');

Route::post('/tim-kiem', 'SearchController@search')->name('search.search');
Route::post('cart/discount', 'CartController@discount')->name('cart.discount');

Route::post('review/submit', 'ReviewController@submit')->name('review.submit');

Route::get('/tai-lieu', 'DocumentController@index');
Route::get('/tai-lieu/the-loai/{category}', 'DocumentController@showByCategory')->name('document.by.category');
Route::get('/tai-lieu/{id}-{slug}.html', 'DocumentController@view')
    ->where('slug', '[a-zA-Z0-9-_]+')
    ->where('id', '[0-9]+')
    ->name('document.view');

Route::get('/config-clear', function () {
    try {
        Artisan::call('config:clear');
        return 'success';
    } catch (\Exception $e) {
        return $e->getMessage();
    }
});

Route::get('/config-cache', function () {
    try {
        Artisan::call('config:cache');
        return 'success';
    } catch (\Exception $e) {
        return $e->getMessage();
    }
});

Route::get('/cache-clear', function () {
    try {
        Artisan::call('cache:clear');
        return 'success';
    } catch (\Exception $e) {
        return $e->getMessage();
    }
});

Route::get('/view-clear', function () {
    try {
        Artisan::call('view:clear');
        return 'success';
    } catch (\Exception $e) {
        return $e->getMessage();
    }
});

Route::get('/master-clear', function () {
    try {
        Artisan::call('view:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('config:clear');
        return 'success';
    } catch (\Exception $e) {
        return $e->getMessage();
    }
});
