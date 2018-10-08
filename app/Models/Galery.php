<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Galery extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'galery';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name','galery'];
     protected $hidden = ['galery'];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    protected $casts = [
        'galery' => 'array'
    ];

    public function setGaleryAttribute($value)
    {
        $attribute_name = "galery";
//        $disk = "public";
        $disk = "uploads";
//        $destination_path = "folder_1/subfolder_1";
        $destination_path = "";
        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }
//    public function setGaleryAttribute($value)
//    {
//        $attribute_name = "galery";
//        $disk = "uploads";
//        $destination_path = "";
//        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
//    }
}
