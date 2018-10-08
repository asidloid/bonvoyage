<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function all()
    {
       // $data = Menu::paginate(5);
        $menu = Menu::all();
        return response()->json($menu);
    }

}
