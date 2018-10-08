<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TreckRequest as StoreRequest;
use App\Http\Requests\TreckRequest as UpdateRequest;

/**
 * Class TreckCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TreckCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Treck');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/treck');
        $this->crud->setEntityNameStrings('treck', 'trecks');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        $this->crud->addField([ // image
            'label' => "Image",
            'name' => "imag",
            'type' => 'image',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
//            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            'disk' => 'uploads',
//            'prefix' => 'uploads'
            // 'disk' => 's3_bucket', // in case you need to show images from a different disk
            // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
        ]);


        $this->crud->addField([
            'name' => 'name',
            'label' => "Название",
        ], "update/create/both");

        // add asterisk for fields that are required in TreckRequest
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
