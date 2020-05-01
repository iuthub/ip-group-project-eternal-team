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


Route::get('/edit/{id}',[
    'uses' => 'ItemController@getEditItem',
    'as'=>'edit.item'
]);

Route::post('/edit',[
    'uses'=>'ItemController@postEditItem',
    'as'=>'update.item'
]);


Route::get('/delete/{id}',[
    'uses' => 'ItemController@deleteItem',
    'as'=>'delete.item'
]);


Route::get('/search',[
    'uses' => 'ItemController@searchItem',
    'as' => 'search.item'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
