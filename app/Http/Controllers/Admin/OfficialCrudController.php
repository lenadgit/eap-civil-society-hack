<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\OfficialRequest as StoreRequest;
use App\Http\Requests\OfficialRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class OfficialCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class OfficialCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Official');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/official');
        $this->crud->setEntityNameStrings('official', 'officials');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumns([
            [
                'name' => 'name',
                'label' => 'Name'
            ],
            [
                'name' => 'email',
                'label' => 'Email'
            ],
            [
                'name' => 'phone',
                'label' => 'Phone'
            ],
            [
                'name' => 'description',
                'label' => 'Description'
            ],
            [
                'name' => 'position',
                'label' => 'Position'
            ],
        ]);

        $this->crud->addFields([
            [
                'name' => 'name',
                'label' => 'Name',
            ],
            [
                'name' => 'email',
                'label' => 'Email',
            ],
            [
                'name' => 'phone',
                'label' => 'Phone',
            ],
            [
                'name' => 'description',
                'label' => "Description",
                'type' => 'ckeditor',
            ],
            [
                'name' => 'position',
                'label' => 'Position',
                'type' => 'text',
            ],
            [
                'name' => 'slug',
                'label' => 'Slug',
                'type' => 'text',
                'hint' => 'Slug will be created automatically. You could also add yours',
            ],
        ]);

        // add asterisk for fields that are required in OfficialRequest
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
