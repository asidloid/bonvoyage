<?php

namespace App\Http\Controllers;
use App\Models\Menu;
//use App\Models\Podmenu;
use Illuminate\Http\Request;
//use App\Menu;

class GlController extends Controller
{
    //

    public function index()
    {

       // $menu = Menu::all();
       // dd($menu);
        //return response()->json($menu);

//        $podmenu = Menu::find(3)->podmenu;
//        dd($podmenu);


        $menu = Menu::all();

        return view('gl', ['menu' => $menu]);
//        foreach ($menu as $men) {
//           echo $men['name'] ." " . $men->podmenu  ."<p>";
        }

        public function index2()
    {


        $menu = Menu::all();
//        return $menu->tojson();
        return view('gl2', ['menu' => $menu->tojson()]);
    }

}
