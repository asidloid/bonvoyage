<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Podmenu;
use App\Models\Predlog;
use Illuminate\Http\Request;

use DB;

class IndexController extends Controller
{
    //
        public function index()
        {

     //  $men =  Menu::with('podmenu')->get();
             //dd ($men);

       $predl = DB::table('predlog')->orderBy('id','DESC')->take(3)->get();
       $news = DB::table('news')->orderBy('id','DESC')->take(3)->get();
//dd($news);
              return view('maket',['predl'=>$predl, 'news'=>$news]);
        }
}
