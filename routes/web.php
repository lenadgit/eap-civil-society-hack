<?php

Route::namespace('Front')->group(function () {
    Route::get('/', 'PagesController@index')->name('home');
    Route::get('about', 'PagesController@about');
    Route::get('contact', 'PagesController@contact');
    Route::get('map', 'PagesController@map')->name('map');
    Route::get('complain/{slug?}', 'PagesController@complain')->name('complain');
    Route::get('official/{slug?}', 'PagesController@official')->name('official');
    Route::match(['get', 'post'], 'new_complain', 'PagesController@new_complain')->name('new_complain');
    Route::post('sendmail', 'PagesController@sendmail')->name('sendmail');
});

Auth::routes();

Route::get('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout',
]);

Route::get('/{slug}', 'App\Http\Controllers\Front\PagesController@pages')->name('page');

