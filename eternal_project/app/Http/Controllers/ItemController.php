<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public  function getItemsMain()
   {
    $items = Item::orderBy('created_at', 'desc')->paginate(2);
    return view('content.index', ['items' => $items]);
   }

   public function postUserItemAdd(Request $request){
      $this->validate($request,[
         'name'=>'required|min:5',
          'price'=>'required|min:5',
      ]);
      $item =new Item([
          'name'=>$request->input('name'),
          'price'=>$request->input('price'),
          'details'=>$request->input('details'),
          'year'=>$request->input('year')
      ]);
      $item->save();
      return redirect()->route('main.index');
   }



}
