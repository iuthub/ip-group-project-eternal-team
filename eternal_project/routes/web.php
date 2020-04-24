<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/create',function(){
    return view('user/create');
});


Route::get('/',[
   'uses'=>'ItemController@getItemsMain',
    'as'=>'main.index'
]);

Route::post('create',[
   'uses'=> 'ItemController@postUserItemAdd',
    'as'=>'user.create'
]);
