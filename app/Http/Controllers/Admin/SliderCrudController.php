<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SliderRequest as StoreRequest;
use App\Http\Requests\SliderRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\CrudPanel;

// VALIDATION: change the requests to match your own file names if you need form validation

/**
 * Class SliderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SliderCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Slider');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/slider');
        $this->crud->setEntityNameStrings('slider', 'sliders');

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
                'name' => 'image',
                'label' => 'Image',
                'type' => 'image',
            ],

            [
                'name' => 'small_title',
                'label' => 'Small Title',
            ],

            [
                'name' => 'big_title',
                'label' => 'Big Title',
            ],
        ]);

        $this->crud->addFields([
            [
                'name' => 'image',
                'label' => 'Image',
                'type' => 'browse',
            ],

            [
                'name' => 'small_title',
                'label' => 'Small Title',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ],
            ],

            [
                'name' => 'big_title',
                'label' => 'Big Title',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ],
            ],
            [
                'name' => 'text',
                'label' => 'Text',
                'type' => 'textarea',
                'attributes' => [
                    'style' => "resize: none;",
                    'rows' => 5,
                ],
            ],
            [
                'name' => 'button_label',
                'label' => 'Button Label',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ],
            ],

            [
                'name' => 'button_url',
                'label' => 'Button Url',
                'type' => 'url',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6',
                ],
            ],

        ]);

        // add asterisk for fields that are required in SliderRequest
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
