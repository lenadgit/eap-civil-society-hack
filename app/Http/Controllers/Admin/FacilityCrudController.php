<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\FacilityRequest as StoreRequest;
use App\Http\Requests\FacilityRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class FacilityCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class FacilityCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Facility');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/facility');
        $this->crud->setEntityNameStrings('facility', 'facilities');

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
            [  // Select
                'label' => "Official",
                'type' => 'select',
                'name' => 'official_id', // the db column for the foreign key
                'entity' => 'official', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\Official",
            ],
//            [  // Select
//                'label' => "City",
//                'type' => 'select',
//                'name' => 'city_id', // the db column for the foreign key
//                'entity' => 'city', // the method that defines the relationship in your Model
//                'attribute' => 'name', // foreign key attribute that is shown to user
//                'model' => "App\Models\City",
//            ],
            [
                'name' => 'description',
                'label' => 'Description'
            ],
            [
                'name' => 'image',
                'label' => 'Image',
                'type' => 'image',
            ],
            [
                'name' => 'invested_sum',
                'label' => 'Ivested Money'
            ],
            [
                'name' => 'latitude',
                'label' => 'Latitude'
            ],
            [
                'name' => 'longitude',
                'label' => 'Longitude'
            ],
        ]);

        $this->crud->addFields([
            [
                'name' => 'name',
                'label' => 'Name',
            ],
            [  // Select
                'label' => "Official",
                'type' => 'select',
                'name' => 'official_id', // the db column for the foreign key
                'entity' => 'official', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\Official",
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ],
            ],
//            [  // Select
//                'label' => "City",
//                'type' => 'select',
//                'name' => 'city_id', // the db column for the foreign key
//                'entity' => 'city', // the method that defines the relationship in your Model
//                'attribute' => 'name', // foreign key attribute that is shown to user
//                'model' => "App\Models\City",
//                'wrapperAttributes' => [
//                    'class' => 'form-group col-md-6',
//                ],
//            ],
            [
                'name' => 'description',
                'label' => "Description",
                'type' => 'ckeditor',
            ],
            [
                'name' => 'image', // The db column name
                'label' => "Image", // Table column heading
                'type' => 'browse',
            ],
            [
                'name' => 'latitude',
                'label' => 'Latitude',
                'type' => 'text',
            ],
            [
                'name' => 'longitude',
                'label' => 'Longitude',
                'type' => 'text',
            ],
            [
                'name' => 'slug',
                'label' => 'Slug',
                'type' => 'text',
                'hint' => 'Slug will be created automatically. You could also add yours',
            ],
            [
                'name' => 'invested_sum',
                'label' => "Invested Money Sum",
                'type' => 'number',
            ],
        ]);


        // add asterisk for fields that are required in FacilityRequest
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
