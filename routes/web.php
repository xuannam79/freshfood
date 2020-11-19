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

Route::namespace('App\Http\Controllers\Shop')->group(function(){
//    Route::get('change-language/{language}', 'IndexController@changeLanguage')->name('user.change-language');
    Route::get('/',[
        'uses' => 'IndexController@index',
        'as' => 'shop.index'
    ]);
//    Route::resource('product', 'ProductController')->only([
//        'show',
//    ]);
    Route::get('/product-feature',[
        'uses' => 'ProductController@getListFeature',
        'as' => 'product.feature'
    ]);
    Route::get('/category-product',[
        'uses' => 'CategoryController@getCategoryWithProduct',
        'as' => 'category.product'
    ]);
//    Route::resource('category', 'CategoryController')->only([
//        'index', 'show',
//    ]);
//    Route::group(['middleware' => 'checkAuth'], function () {
//        Route::post('/cart', 'CartController@cart');
//        Route::get('/cart',[
//            'uses' => 'CartController@index',
//            'as' => 'shop.cart.index'
//        ]);
//        Route::post('/cart-update',[
//            'uses' => 'CartController@updateCart',
//            'as' => 'shop.cart.cart_update'
//        ]);
//        Route::get('/cart-update-{productId}',[
//            'uses' => 'CartController@fastingAdd',
//            'as' => 'shop.cart.fasting_add'
//        ]);
//        Route::get('/cart-remove-{productId}',[
//            'uses' => 'CartController@removeProduct',
//            'as' => 'shop.cart.remove'
//        ]);
//        Route::resource('order', 'OrderController')->only([
//            'index', 'store',
//        ]);
//        Route::post('/rating', 'ProductController@rating');
//    });
//    Route::post('/sort-bytype',[
//        'uses' => 'SearchController@sortByType',
//        'as' => 'search.sort_bytype'
//    ]);
//    Route::post('/sort-byprice',[
//        'uses' => 'SearchController@sortByPrice',
//        'as' => 'search.sort_byprice'
//    ]);
//    Route::get('/search/name', 'SearchController@searchByName');
});

//Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
//    Route::get('', 'IndexController@index');
//    Route::resource('users', 'UserController');
//});
//
//Route::namespace('Auth')->group(function() {
//    Route::resource('login', 'LoginController')->only([
//        'index', 'store'
//    ]);
//    Route::resource('logout', 'LogoutController')->only([
//        'index',
//    ]);
//});
