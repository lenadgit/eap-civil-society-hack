<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FeedbackRequest as StoreRequest;
use App\Http\Requests\FeedbackRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\CrudPanel;

// VALIDATION: change the requests to match your own file names if you need form validation

/**
 * Class FeedbackCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class FeedbackCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Feedback');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/feedback');
        $this->crud->setEntityNameStrings('', 'Feedbacks');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumns([
            ['name' => 'image',
                'label' => 'Image',
                'type' => 'image'],

            ['name' => 'name',
                'label' => 'Name'],

            ['name' => 'position',
                'label' => 'Profession'],

            ['name' => 'feedback',
                'label' => 'Comment'],
        ]);

        $this->crud->addFields([
            ['name' => 'image',
                'label' => 'Image',
                'type' => 'browse'],

            ['name' => 'name',
                'label' => 'Name'],

            ['name' => 'position',
                'label' => 'Profession'],

            ['name' => 'feedback',
                'label' => 'Comment',
                'type' => 'ckeditor'],
        ]);

        // add asterisk for fields that are required in FeedbackRequest
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
