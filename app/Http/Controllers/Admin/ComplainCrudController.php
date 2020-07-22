<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ComplainRequest as StoreRequest;
use App\Http\Requests\ComplainRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class ComplainCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ComplainCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Complain');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/complain');
        $this->crud->setEntityNameStrings('complain', 'complains');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumns([
            [
                'name' => 'complain_number',
                'label' => '#'
            ],
            [
                'name' => 'name',
                'label' => 'Name'
            ],
            [  // Select
                'label' => "Admin",
                'type' => 'select',
                'name' => 'admin_id', // the db column for the foreign key
                'entity' => 'admin', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\Admin",
            ],
            [  // Select
                'label' => "User",
                'type' => 'select',
                'name' => 'user_id', // the db column for the foreign key
                'entity' => 'user', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\User",
            ],
            [  // Select
                'label' => "Facility",
                'type' => 'select',
                'name' => 'facility_id', // the db column for the foreign key
                'entity' => 'facility', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\Facility",
            ],
            [
                'name' => 'description',
                'label' => 'Description'
            ],
            [
                'name' => 'attachment',
                'label' => 'Photo',
                'type' => 'image',
            ],
            [
                'name' => 'type',
                'label' => 'Status'
            ],
        ]);

        $this->crud->addFields([
            [
                'name' => 'complain_number',
                'label' => 'Complain number',
            ],
            [
                'name' => 'name',
                'label' => 'Name',
            ],
            [  // Select
                'label' => "Admin",
                'type' => 'select',
                'name' => 'admin_id', // the db column for the foreign key
                'entity' => 'admin', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\Admin",
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [  // Select
                'label' => "User",
                'type' => 'select',
                'name' => 'user_id', // the db column for the foreign key
                'entity' => 'user', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\User",
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [  // Select
                'label' => "Facility",
                'type' => 'select',
                'name' => 'facility_id', // the db column for the foreign key
                'entity' => 'facility', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\Facility",
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-4',
                ],
            ],
            [
                'name'  => 'description',
                'label' => "Description",
                'type'  => 'ckeditor',
            ],
            [
                'name' => 'attachment', // The db column name
                'label' => "Attachment", // Table column heading
                'type' => 'browse',
            ],
            [
                'name' => 'type',
                'label' => 'Status',
                'type' => 'enum',
            ],
            [
                'name' => 'slug',
                'label' => 'Slug',
                'type' => 'text',
                'hint'  => 'Slug will be created automatically. You could also add yours',
            ],
            [
                'name'  => 'admin_note',
                'label' => "Admin Note",
                'type'  => 'ckeditor',
            ],
        ]);


        // add asterisk for fields that are required in ComplainRequest
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
