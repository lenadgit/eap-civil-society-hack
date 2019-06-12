<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ApplicationRequest as StoreRequest;
use App\Http\Requests\ApplicationRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class ApplicationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ApplicationCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Application');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/application');
        $this->crud->setEntityNameStrings('application', 'applications');
        $this->crud->orderBy('id', 'DESC');
        $this->crud->enableExportButtons();
        $this->crud->denyAccess('create');
        $this->crud->allowAccess('show');
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        $this->crud->addColumns([
            [
                'name' => 'id',
                'label' => 'ID'
            ],
            [
                'name' => 'full_name',
                'label' => 'Full Name'
            ],
            [
                'name' => 'phone',
                'label' => 'Phone'
            ],
            [
                'name' => 'email',
                'label' => 'Email'
            ],
            [
                'name' => 'status',
                'type' => 'text',
            ],
        ]);
        $this->crud->addFields([
            [
                'name' => 'full_name',
                'label' => 'Full Name',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ],
                'attributes'        => [
                    'disabled' => 'disabled',
                ],
            ],
            [
                'name' => 'phone',
                'label' => 'Phone',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ],
                'attributes'        => [
                    'disabled' => 'disabled',
                ],
            ],

            [
                'name'       => 'message',
                'type'       => 'textarea',
                'label'      => 'Message',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12',
                ],
                'attributes' => [
                    'style' => "resize: none;",
                    'rows' => 5,
                    'disabled' => 'disabled',
                ],
            ],
            [
                'name' => 'email',
                'label' => 'Email',
                'type' => 'text',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-8',
                ],
                'attributes'        => [
                    'disabled' => 'disabled',
                ],
            ],
            [
                'name' => 'status',
                'label' => 'Status',
                'type' => 'enum',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
            ],

            [
                'name'       => 'admin_note',
                'type'       => 'textarea',
                'label'      => 'Admin note',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12',
                ],
                'attributes' => [
                    'style' => "resize: none;",
                    'rows' => 5,
                ],
            ],
        ]);

        // add asterisk for fields that are required in ApplicationRequest
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

    public function show($id)
    {
        $content = parent::show($id);
        $this->crud->removeColumns([
            'admin_note',
        ]);
        $this->crud->addColumns([
            [
                'name' => 'attachment',
                'type' => 'image',
            ],
        ]);
        return $content;
    }
}
