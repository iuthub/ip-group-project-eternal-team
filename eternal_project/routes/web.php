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

Route::post('sendmail',[
    'uses'=>'ContactController@saveContact',
    'as'=>'contact.save'
]);


Route::get('/',[
   'uses'=>'ItemController@getItemsMain',
    'as'=>'main.index'
]);

Route::get('contact_us',[
    'uses'=>'ContactController@getContactView',
    'as'=>'contact.us'
]);

Route::post('create',[
   'uses'=> 'ItemController@postUserItemAdd',
    'as'=>'user.create'
]);


Route::get('/edit/{id}',[
    'uses' => 'ItemController@getEditItem',
    'as'=>'edit.item'
]);

Route::post('/update/{id}',[
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


Route::get('/itemInfo/{id}',[
    'uses' => 'ItemController@getItemInfo',
    'as' => 'info.item'
]);


Route::get('/cart/item/{id}',
    ['uses'=>'ItemController@addItemToCart',
        'as' => 'cart.item']);

Route::get('/myCart/{id}',[
    'uses'=>'ItemController@myCart',
    'as'=>'mycart.items'
]);

Route::get('removefromcart/{id}',[
    'uses'=>'ItemController@removeFromCart',
    'as'=>'remove.item.cart'
]);

Route::get('search/category',[
    'uses'=>'ItemController@displayCategory',
    'as'=>'display.category'
]);

Route::post('/rate/item/{id}',[
    'uses'=>'ItemController@rateItem',
    'as'=>'rate.item'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('protected',['middleware'=>['auth','admin']],function (){
    return view('admin.index');
});