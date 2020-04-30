<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\task;

class ItemController extends Controller
{
    public  function getItemsMain()
   {
    $items = Item::orderBy('created_at', 'desc')->paginate();
    return view('content.index', ['items' => $items]);
   }

   public function postUserItemAdd(Request $request){
      $this->validate($request,[
         'name'=>'required|min:5',
          'price'=>'required|min:5',
          'image' => 'file|image|max:4000'
      ]);
      $item =new Item([
          'name'=>$request->input('name'),
          'price'=>$request->input('price'),
          'details'=>$request->input('details'),
          'year'=>$request->input('year'),
          'category'=>$request->input('category'),
      ]);

      if($request->hasFile('image')){
          $file = $request->file('image');
          $extension = $file->getClientOriginalExtension();
          $filename = time() . '.' .$extension;
          $file->move('uploads/item',$filename);
          $item->image = $filename;
      }
      else{
          return $request;
          $item->image='';
      }
      $item->save();
      return redirect()->route('main.index')->with('success','Item added to the store!');
   }



   public function getEditItem($id){
        $item =Item::find($id);
        return  view('user.edit',['item' => $item, 'id'=>$id]);
   }


   public function postEditItem(Request $request){

       $this->validate($request,[
           'name'=>'required|min:5',
           'price'=>'required|min:5',
       ]);

       $item =Item::find($request->input('id'));

       $item->name = $request->input('name');
       $item->price = $request->input('price');
       $item->details = $request->input('details');
       $item->year = $request->input('year');
       $item->category = $request->input('category');
       $item->save();
       return redirect()->route('main.index')->with('success','Item Edited!');

   }

   public function deleteItem($id){
        $item =Item::find($id);
      $item->delete();
      return redirect()->route('main.index')->with('success','Task Deleted!');
   }








}
