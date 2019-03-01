<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PartnerRequest as StoreRequest;
use App\Http\Requests\PartnerRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class PartnerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PartnerCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Partner');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/partner');
        $this->crud->setEntityNameStrings('', 'Partners');
        $this->crud->orderBy('id', 'DESC');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumns([
            [
                'name' => 'id',
                'label' => 'ID',
                'type' => 'integer',
            ],

            [
                'name' => 'image',
                'type' => 'image',
            ],

            [
                'name' => 'name',
                'type' => 'text',
            ],

            [
                'name' => 'url',
                'type' => 'text',
            ],

        ]);

        $this->crud->addFields([
            ['name' => 'image',
                'type' => 'browse'],

            ['name' => 'name',
                'type' => 'text',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ]],

            ['name' => 'url',
                'type' => 'text',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ]],
        ]);

        // add asterisk for fields that are required in PartnerRequest
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
