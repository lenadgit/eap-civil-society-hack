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




Route::group([
    'prefix'    => LaravelLocalization::setLocale(),
    'namespace' => 'Front',
], function () {
    Route::get('/', 'PagesController@index');
//    Route::get('blog', 'MainController@blog')->name('blog');
//    Route::get('category/{slug}', 'MainController@category')->name('category');
//    Route::get('article/{slug}', 'MainController@article')->name('article');
//    Route::get('faq', 'MainController@faq')->name('faq');
});