<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\FaqRequest as StoreRequest;
use App\Http\Requests\FaqRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class FaqCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class FaqCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Faq');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/faq');
        $this->crud->setEntityNameStrings('Question', 'FAQ');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->allowAccess('reorder');
        $this->crud->enableReorder('question', 2);

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name'  => 'question',
            'label' => 'Question',
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name'  => 'question',
            'label' => 'Question',
        ]);

        $this->crud->addField([
            'name'  => 'answer',
            'label' => 'Answer',
            'type'  => 'ckeditor',
        ]);

        // add asterisk for fields that are required in FaqRequest
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
