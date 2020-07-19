<?php

Route::group([
    'prefix'    => LaravelLocalization::setLocale(),
    'namespace' => 'Front',
], function () {
    Route::get('/', 'PagesController@index')->name('home');
    Route::get('about', 'PagesController@about');
    Route::get('contact', 'PagesController@contact');
    Route::get('map', 'PagesController@map')->name('map');
    Route::post('sendmail', 'PagesController@sendmail')->name('sendmail');

//    require_once 'user.php';

    Route::get('/{slug}', 'PagesController@pages')->name('page');

    Auth::routes(['verify' => true]);
});
