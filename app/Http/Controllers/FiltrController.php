<?php

namespace App\Http\Controllers;
use App\Models\Treck;
use App\Models\Podtreck;
use App\Models\TrekLocation;
use Illuminate\Http\Request;

class FiltrController extends Controller
{
    //
    public function index()
    {
        //return view('filtr');
        $results = Podtreck::with('location','podtreck')->get();
       // dd($results);
        return response()->json($results);
    }
    public function vse()
    {
         return view('filtr');
//        $results = Podtreck::with('location','podtreck')->get();
//        // dd($results);
//        return response()->json($results);
    }

        public function filtrtrek()
        {

         //   $results2 = Treck::all();
         //   return response()->json($results2);

           $results = Treck::with('trecto')->get();


     $res = $results->map(function ($item, $key) {
      //$item['rating'] *= 2;
    return $item;
    });

          dd($res.treck);
        }

}
