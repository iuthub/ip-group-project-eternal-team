<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use App\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;
use function GuzzleHttp\Promise\task;

class ItemController extends Controller
{
public function __construct()
{
$this->middleware('auth');
}


    public  function getItemsMain()
   {
    $items = Item::orderBy('created_at', 'desc')->paginate(15);
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


   public function postEditItem(Request $request,$id){

       $this->validate($request,[
           'name'=>'required|min:5',
           'price'=>'required|min:5',
       ]);

       $item =Item::find($id);
//       if(Gate::denies('auth-only',$item)){
//           return redirect()->back()->with([
//               'error' => 'Unauthorized action'
//           ]);
//       }
//       dd($item);
       $item->name = $request->input('name');
       $item->price = $request->input('price');
       $item->details = $request->input('details');
       $item->state = $request->input('state');
       $item->category = $request->input('category');
       if($request->hasFile('image')){
           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           $filename = time() . '.' .$extension;
           $file->move('uploads/item',$filename);
           $item->image = $filename;
       }

       $item->save();
       return redirect()->route('home')->with('success','Item Edited!');

   }

   public function deleteItem($id){
        $item =Item::find($id);
//        if(Gate::denies('auth-only',$item)){
//            return redirect()->back()->with('error','You are not authorized to delete this! bee');
//        }
        $item->delete();
       return redirect()->route('home')->with('success','Item Deleted!');
   }


   public function searchItem(Request $request){
        $search = $request->get('search');
        $items = DB::table('items')->where('name','like','%'.$search.'%')->paginate();
        return view('content.index',['items'=>$items]);

   }

   public function getItemInfo($id){
      $item = Item::find($id);
      $user = User::find($item->user_id);
      return view('content.itemInfo',['item' => $item,
          'user'=>$user]);
   }


   public function addItemToCart($id){
      $item= Item::find($id);
      $cart = new Cart();
      $cart->user_id = auth()->user()->id;
      $cart->item_id = $item->id;
      $cart->save();
      return redirect()->back()->with('success','This item was added to the Cart!');
   }



   public function myCart($id){
       $user = auth()->user()->id;
        $items_id = Cart::select('item_id')->where('user_id',$user)->get();
        $items=Item::findMany($items_id);
        return view('content.mycart', ['items'=> $items]);
   }


   public function removeFromCart($id){
    Cart::select('id')->where('item_id',$id)->delete();
    $user = auth()->user()->id;
    return redirect()->route('mycart.items',['id'=>$user])->with('success','Item removed from your Cart!');

   }

   public function displayCategory(Request $request){
    $search = $request->input('category');
       $items = DB::table('items')->where('category','like','%'.$search.'%')->paginate();
       return view('content.index',['items'=>$items]);
   }












}
