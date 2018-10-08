<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Models\Menu;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PodmenuRequest as StoreRequest;
use App\Http\Requests\PodmenuRequest as UpdateRequest;

/**
 * Class PodmenuCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PodmenuCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Podmenu');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/podmenu');
        $this->crud->setEntityNameStrings('подменю', 'podmenu');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
       $this->crud->setFromDb();

        $this->crud->addField([
            'name' => 'name',
            'label' => "Заголовок",
        ], "update/create/both");

        $this->crud->addField([
            'label' => "Раздел меню",
            'type' => 'select',
            'name' => 'id_pod', // the db column for the foreign  key
            'entity' => 'menu', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Menu" // foreign key model
        ]);


        $this->crud->addField([   // Text
            'name' => 'stat',
            'label' => "Статья",
            'type' => 'wysiwyg'
        ]);
        // add asterisk for fields that are required in PodmenuRequest
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
