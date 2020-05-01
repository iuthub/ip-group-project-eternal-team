<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\task;

class ItemController extends Controller
{
public function __construct()
{
$this->middleware('auth');
}


    public  function getItemsMain()
   {
    $items = Item::orderBy('created_at', 'desc')->paginate(20);
    return view('content.index', ['items' => $items]);
   }

   public function postUserItemAdd(Request $request){
      $this->validate($request,[
          'name'=>'required|min:5',
          'price'=>'required',
          'image' => 'file|image|max:4000',
      ]);


      $item =new Item([
          'name'=>$request->input('name'),
          'price'=>$request->input('price'),
          'details'=>$request->input('details'),
          'category'=>$request->input('category'),
           'state'=>$request->input('state')
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

      $item->user_id = auth()->user()->id;
//      if(Gate::denies('auth-only',$item)){
//          return redirect()->back()->with('error','You are not authorized to delete this! bee');
//      };

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
//       if(Gate::denies('auth-only',$item)){
//           return redirect()->back()->with([
//               'error' => 'Unauthorized action'
//           ]);
//       }
       $item->name = $request->input('name');
       $item->price = $request->input('price');
       $item->details = $request->input('details');
       $item->state = $request->input('state');
       $item->category = $request->input('category');
       $item->save();
       return redirect()->route('main.index')->with('success','Item Edited!');

   }

   public function deleteItem($id){
        $item =Item::find($id);
//        if(Gate::denies('auth-only',$item)){
//            return redirect()->back()->with('error','You are not authorized to delete this! bee');
//        }
        $item->delete();
       return redirect()->route('main.index')->with('success','Item Deleted!');
   }


   public function searchItem(Request $request){
        $search = $request->get('search');
        $items = DB::table('items')->where('name','like','%'.$search.'%')->paginate(2);
        return view('content.index',['items'=>$items]);

   }








}
