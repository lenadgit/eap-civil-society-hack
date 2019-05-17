<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ArticleCategoryRequest as StoreRequest;
use App\Http\Requests\ArticleCategoryRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class ArticleCategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ArticleCategoryCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\ArticleCategory');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/articlecategory');
        $this->crud->setEntityNameStrings('', 'Categories');

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
                'name'  => 'name',
                'label' => 'Name',
            ],

            [
                'name'  => 'slug',
                'label' => 'Slug',
            ],

            [
                'label'     => 'Parent',
                'type'      => 'select',
                'name'      => 'parent_id',
                'entity'    => 'parent',
                'attribute' => 'name',
                'model'     => 'App\Models\ArticleCategory',
            ],
        ]);

        $this->crud->addFields([
            [
                'name'  => 'name',
                'label' => 'Name',
            ],

            [
                'name'    => 'slug',
                'label'   => 'Slug',
                'type'    => 'text',
                'hint' => '<span style="color: purple">Leave it blank in order to automate the process!</span>',
            ],

            [
                'label'     => 'Parent',
                'type'      => 'select2',
                'name'      => 'parent_id',
                'entity'    => 'parent',
                'attribute' => 'name',
                'model'     => 'App\Models\ArticleCategory',
            ],

        ]);

//        dd($this->crud->model);
        // add asterisk for fields that are required in ArticleCategoryRequest
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
