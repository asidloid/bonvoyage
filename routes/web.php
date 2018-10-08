<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', function () {
//    return view('index');
//});
Route::get('maket', 'IndexController@index');

Route::get('k', 'KorsinaController@index');
Route::get('categories', 'CategoryController@index');
Route::get('categoriesid/{id}', 'CategoryController@id');

Route::get('filtrtrek', 'FiltrController@filtrtrek');
Route::get('filtr', 'FiltrController@index');
Route::get('filter', 'FiltrController@vse');

Route::get('gl', 'GlController@index');
Route::get('gl2', 'GlController@index2');

 Route::group(['prefix' => config('backpack.base.route_prefix'), 'middleware' => ['admin'], 'namespace' => 'Admin'], function()
 {
    CRUD::resource('menu', 'MenuCrudController');
     CRUD::resource('podmenu', 'PodmenuCrudController');
     CRUD::resource('galery', 'GaleryCrudController');
     CRUD::resource('treck', 'TreckCrudController');
     CRUD::resource('treklocation', 'TreklocationCrudController');
     CRUD::resource('podtreck', 'PodtreckCrudController');
     CRUD::resource('tovar', 'TovarCrudController');
  CRUD::resource('predlog', 'PredlogCrudController');
  CRUD::resource('news', 'NewsCrudController');
 });