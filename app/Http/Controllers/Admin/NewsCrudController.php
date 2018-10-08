<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\NewsRequest as StoreRequest;
use App\Http\Requests\NewsRequest as UpdateRequest;

/**
 * Class NewsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class NewsCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\News');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/news');
        $this->crud->setEntityNameStrings('news', 'news');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
         $this->crud->setFromDb();

                      $this->crud->addField([
                          'name' => 'name',
                          'label' => "Название",
                      ], "update/create/both");

            $this->crud->addField([   // Text
                  'name' => 'stat',
                  'label' => "Статья",
                  'type' => 'wysiwyg'
              ]);

               $this->crud->addField([   // Text
                              'name'        => 'hidden', // the name of the db column
                              'label'       => 'hidden', // the input label
                              'type'        => 'radio',
                              'options'     => [ // the key will be stored in the db, the value will be shown as label;
                                  'no' => "heden",
                                  'yes' => "wiew"
                              ],
                              // optional
                          'inline'      => true,
                              //'inline'      => false, // show the radios all on the same line?
               ]);

              $this->crud->addField([ // image
                  'label' => "imag",
                  'name' => "imag",
                  'type' => 'image',
                  'upload' => true,
                  'crop' => true, // set to true to allow cropping, false to disable
                 'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
                  'disk' => 'uploads',
      //            'prefix' => 'uploads'
                  // 'disk' => 's3_bucket', // in case you need to show images from a different disk
                  // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
              ]);

                      $this->crud->addField([
                          'label' => "Галерея",
                          'type' => 'select',
                          'name' => 'galer', // the db column for the foreign  key
                          'entity' => 'galery', // the method that defines the relationship in your Model
                          'attribute' => 'name', // foreign key attribute that is shown to user
                          'model' => "App\Models\Galery" // foreign key model
                      ]);

        // add asterisk for fields that are required in NewsRequest
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
