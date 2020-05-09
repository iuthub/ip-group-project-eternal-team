<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $user_id = auth()->user()->id;
       $items = Item::where('user_id','=',$user_id)->get();
       $user = User::find($user_id);
       if(Auth::user()->isAdmin==0){
            return view('user.home',['items'=>$items,'user'=>$user]);
        }
       else{
           return view('admin.index');
       }
    }
    public function items(){
        $items1= Item::orderBy('created_at','desc')->paginate(10);
        return view('admin.items',['items'=>$items1]);
    }

    public function getUsers(){
        $users = User::all();
        return view('admin.users',['users'=>$users]);
    }

    public function deleteUser($id){
        $user=User::findOrFail($id);
        if ($user->isAdmin){
            return redirect()->back()->with('error','cannot delete admin');

        }else{
        $user->delete();
            return route('users.table');
        }


    }


}
