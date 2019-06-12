<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {

    CRUD::resource('article', 'ArticleCrudController');
    CRUD::resource('articlecategory', 'ArticleCategoryCrudController');
    CRUD::resource('faq', 'FaqCrudController');
    CRUD::resource('feedback', 'FeedbackCrudController');
    CRUD::resource('page', 'PageCrudController');
    CRUD::resource('partner', 'PartnerCrudController');
    CRUD::resource('admin', 'UserCrudController');
    CRUD::resource('application', 'ApplicationCrudController');
    CRUD::resource('slider', 'SliderCrudController');

});
