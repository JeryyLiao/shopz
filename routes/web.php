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

Route::namespace ('App\Http\Controllers')->group(function () {

    Route::get('/', 'SiteController@index');
    Route::get('/shop', 'SiteController@shop');
    Route::get('/contact', 'SiteController@contact');
    Route::get('/confirmation', 'SiteController@confirmation');
    Route::get('/elements', 'SiteController@elements');
    Route::get('/about', 'SiteController@about');
    Route::get('/blog', 'SiteController@blog');
    Route::get('/product_details', 'SiteController@product_details');
    Route::get('/product_list', 'SiteController@product_shop');
    Route::get('/blog_details', 'SiteController@blog_details');
    Route::get('/shop', 'SiteController@index');
    Route::get('/product_details', 'SiteController@product_details');
    Route::get('/blog-details', 'SiteController@blog_details');
    Route::get('/cart', 'SiteController@cart');
    Route::get('/checkout', 'SiteController@checkout');

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
