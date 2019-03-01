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
        $this->crud->orderBy('id', 'DESC');

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
                'label' => 'image',
                'type'  => 'image',
            ],

            [
                'name'  => 'title',
                'label' => 'Title',
            ],

            [
                'label'       => "Category", // Table column heading
                'type'        => "select",
                'name'        => 'category_id', // the column that contains the ID of that connected entity;
                'entity'      => 'category', // the method that defines the relationship in your Model
                'attribute'   => "name", // foreign key attribute that is shown to user
                'model'       => "App\Models\Category", // foreign key model
                'searchLogic' => function ($query, $column, $searchTerm) {
                    $query->orWhereHas('category', function ($q) use ($column, $searchTerm) {
                        $q->where('name', 'like', '%' . $searchTerm . '%');
                    });
                },
            ],

            [
                'name'  => 'status',
                'label' => 'Status',
                'type'  => 'enum',
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
            ],

            [
                'name'  => 'description',
                'label' => "Content",
                'type'  => 'ckeditor',
            ],

            [
                'label'     => "Category",
                'type'      => "select2",
                'name'      => 'category_id',
                'entity'    => 'category',
                'attribute' => "name",
                'model'     => "App\Models\ArticleCategory",
            ],

            [
                'label'             => "Category",
                'type'              => "select2",
                'name'              => 'category_id',
                'entity'            => 'category',
                'attribute'         => "name",
                'model'             => "App\Models\ArticleCategory",
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ],
            ],

            [
                'name'              => 'status',
                'label'             => 'Status',
                'type'              => 'enum',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ],
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
