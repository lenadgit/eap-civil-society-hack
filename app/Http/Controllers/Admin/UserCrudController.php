<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\UserRequest as StoreRequest;
use App\Http\Requests\UserRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel('App\Models\Admin');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/admin');
        $this->crud->setEntityNameStrings('admin', 'admins');
//        $this->crud->addClause('whereEmail', 'not',  'lut_milcey@mail.ru');

        $this->crud->setColumns([
            [
                'name'  => 'name',
                'label' => trans('backpack::permissionmanager.name'),
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type'  => 'email',
            ],
        ]);

        $this->crud->addFields([
            [
                'name'  => 'name',
                'label' => 'Name',
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => 'Email',
                'type'  => 'email',
            ],
            [
                'name'  => 'password',
                'label' => 'Password',
                'type'  => 'password',
            ],
            [
                'name'  => 'password_confirmation',
                'label' => 'Confirm Password',
                'type'  => 'password',
            ],
        ]);
    }

    public function store(StoreRequest $request)
    {
        $this->crud->hasAccessOrFail('create');

        // insert item in the db
        if ($request->input('password'))
        {
            $item = $this->crud->create(\Request::except(['redirect_after_save']));

            // now bcrypt the password
            $item->password = bcrypt($request->input('password'));
            $item->save();
        }
        else
        {
            $item = $this->crud->create(\Request::except(['redirect_after_save', 'password']));
        }

        // show a success message
        \Alert::success(trans('backpack::crud.insert_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();

        return $this->performSaveAction($item->getKey());
    }

    public function update(UpdateRequest $request)
    {
        //encrypt password and set it to request
        $this->crud->hasAccessOrFail('update');

        $dataToUpdate = \Request::except(['redirect_after_save', 'password']);

        //encrypt password
        if ($request->input('password'))
        {
            $dataToUpdate['password'] = bcrypt($request->input('password'));
        }

        // update the row in the db
        $this->crud->update(\Request::get($this->crud->model->getKeyName()), $dataToUpdate);

        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        // save the redirect choice for next time
        $this->setSaveAction();

        return $this->performSaveAction();
    }
}
