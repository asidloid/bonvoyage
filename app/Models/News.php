<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class News extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'news';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name','stat','imag','galer','hidden'];
     protected $hidden = ['stat','imag','galer'];
    // protected $dates = [];
     public function galery()
        {
            return $this->belongsTo('App\Models\Galery', 'galer', 'id');
        }
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
     public function setImagAttribute($value)
            {
                $attribute_name = "imag";
                $disk = "uploads";
                $destination_path = "";
                // if the image was erased
                if ($value==null) {
                    // delete the image from disk
                    \Storage::disk($disk)->delete($this->{$attribute_name});

                    // set null in the database column
                    $this->attributes[$attribute_name] = null;
                }

                // if a base64 was sent, store it in the db
                if (starts_with($value, 'data:image'))
                {
                    // 0. Make the image
                    $imag = \Image::make($value);
                    // 1. Generate a filename.
                    $filename = md5($value.time()).'.jpg';
                    // 2. Store the image on disk.
        //            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
                    \Storage::disk($disk)->put($destination_path.'/'.$filename, $imag->stream());
                    // 3. Save the path to the database
                    $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
                }
            }
}
