<?php

Route::group([
    'middleware' => ['auth', 'verified'],
    'prefix'    => 'user',
], function () {
    Route::get('/', 'UserController@index');
});