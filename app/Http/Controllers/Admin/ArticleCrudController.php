<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ArticleRequest as StoreRequest;
use App\Http\Requests\ArticleRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class ArticleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ArticleCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Article');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/article');
        $this->crud->setEntityNameStrings('article', 'articles');
        $this->crud->orderBy('id', 'desc');
        $this->crud->allowAccess('show');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumns([
            [
                'name'  => 'id',
                'label' => 'ID',
            ],

            [
                'name'  => 'image',
                'label' => "Cover",
                'type'  => 'image',
                'width' => '60px',
            ],

            [
                'name'  => 'title',
                'label' => 'Title',
            ],


            [
                'name'  => 'status',
                'label' => 'Status',
                'type'  => 'enum',
            ],

            [
                'name'  => 'featured',
                'label' => 'Featured',
                'type'  => 'check',
            ],

        ]);

        $this->crud->addFields([

            [
                'name'  => 'image',
                'label' => "Cover photo",
                'type'  => 'browse',
            ],

            [
                'name'  => 'title',
                'label' => 'Title',
                'type'        => 'text',
                'placeholder' => 'Your title here',
            ],

            [
                'name'     => 'slug',
                'label'    => 'Slug (URL)',
                'type'     => 'text',
                'hint'     => 'Will be automatically generated from your title, if left empty.',
                'disabled' => 'disabled',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-7'
                ],
            ],

            [
                'name'  => 'date',
                'label' => 'Publish article at:',
                'type'  => 'datetime_picker',
                'allows_null' => true,
                'default' => now(),
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-5'
                ],
            ],


            [
                'name'  => 'description',
                'label' => "Content",
                'type'  => 'ckeditor',
                'placeholder' => 'A Content text here',
            ],

            [
                'label'     => 'Category',
                'type'      => 'select2_multiple',
                'name'      => 'categories',
                'entity'    => 'categories',
                'attribute' => 'name',
                'model'     => 'App\Models\ArticleCategory',
                'pivot'     => true,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6'
                ]
            ],

            [
                'name'              => 'status',
                'label'             => 'Status',
                'type'              => 'enum',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ],
            ],

            [
                'name'  => 'featured',
                'label' => 'Featured item',
                'type'  => 'checkbox',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6'
                ]

            ],

        ]);

        // add asterisk for fields that are required in ArticleRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {

        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
