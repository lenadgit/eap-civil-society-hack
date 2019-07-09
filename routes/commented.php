<?php

Route::get('articles', 'ArticlesController@index')->name('articles');
Route::get('article/{slug}', 'ArticlesController@detailed')->name('article');
Route::get('category/{slug}', 'ArticlesController@category')->name('category');
Route::post('apply', 'PagesController@application')->name('apply');
Route::get('faq', 'PagesController@faq')->name('faq');