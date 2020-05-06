<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
       return view('user.home',['items'=>$items,'user'=>$user]);
    }


}
