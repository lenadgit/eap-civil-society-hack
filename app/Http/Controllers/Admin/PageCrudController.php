<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PageRequest as StoreRequest;
use App\Http\Requests\PageRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class PageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PageCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Page');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/page');
        $this->crud->setEntityNameStrings('', 'Pages');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumns([
            [
                'name' => 'id',
                'label' => 'ID',
            ],
            [
                'name' => 'key',
                'label' => 'Key',
            ],
            [
                'name' => 'icon',
                'label' => 'Icon',
                'type' => 'image',
            ],
            [
                'name' => 'title',
                'label' => 'Title',
            ],
            [
                'name' => 'slug',
                'label' => 'Slug',
            ],
            [
                'name' => 'short_description',
                'label' => 'Short Desc',
            ],
        ]);


        $this->crud->addFields([
            [
                'name' => 'icon',
                'label' => 'Icon',
                'type' => 'browse',
            ],
            [
                'name' => 'type',
                'label' => "Type Of Page",
                'type' => 'select2_from_array',
                'options' => ['portfolio' => 'Portfolio', 'services' => 'Services','pages' => 'Page'],
                'allows_null' => false,
                'default' => 'services',
            ],
            [
                'name' => 'key',
                'label' => 'Key',
                'hint' => '<span class="text-danger">Do not change it!</span>'
            ],
            [
                'name' => 'slug',
                'label' => 'Slug',
                'hint' => '<span style="color: purple">Leave it blank in order to automate the process!</span>',
            ],
            [
                'name' => 'title',
                'label' => 'Title',
            ],
            [
                'name' => 'short_description',
                'label' => 'Short Desc',
                'type' => 'textarea',
                'attributes' => [
                    'style' => "resize: none;",
                    'rows' => 5,
                ],
            ],
            [
                'name' => 'body',
                'label' => 'Body',
                'type' => 'ckeditor',
            ],
            [
                'name' => 'images',
                'label' => 'Images',
                'type' => 'browse_multiple',
                'multiple' => true,
            ],
        ]);

        // add asterisk for fields that are required in PageRequest
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
