<?php

Route::namespace('Front')->group(function () {
    Route::get('/', 'PagesController@index')->name('home');
    Route::get('about', 'PagesController@about');
    Route::get('contact', 'PagesController@contact');
    Route::get('map', 'PagesController@map')->name('map');
    Route::post('sendmail', 'PagesController@sendmail')->name('sendmail');


});

Auth::routes();

Route::get('logout', [
    'as'   => 'logout',
    'uses' => 'Auth\LoginController@logout',
]);

Route::get('/{slug}', 'App\Http\Controllers\Front\PagesController@pages')->name('page');

