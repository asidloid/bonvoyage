<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    //

    public function index()
    {
        $data = Category::paginate(5);
        return response()->json($data);
    }


    public function id($id)
    {
//        $id = Request::input('id');
        $data = DB::table('category')->where('id', '=', $id)->get();
//        dd($data);
//        $data = Category::input('name');
         return response()->json($data);
    }

}
