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
    Route::get('articles', 'ArticlesController@index')->name('articles');
    Route::get('article/{slug}', 'ArticlesController@detailed')->name('article');
    Route::get('category/{slug}', 'ArticlesController@category')->name('category');

    Route::post('apply', 'PagesController@application')->name('apply');
    Route::post('sendmail', 'PagesController@sendmail')->name('sendmail');

//    require_once 'user.php';

    Route::get('/{slug}', 'PagesController@pages')->name('page');

//    Route::get('faq', 'MainController@faq')->name('faq');
});