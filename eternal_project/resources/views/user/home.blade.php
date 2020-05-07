@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div>
        <h1>My personal Info</h1>
{{--        @dd($user)--}}
        <h1>Name: {{$user->name}}</h1>
        <h2>Mail: {{$user->email}}</h2>
        <h3>Items posted: {{count($items)}}</h3>
    </div>






    <a href="{{route('mycart.items',['id'=>auth()->user()->id])}}"><button class="btn btn-success">My Cart</button></a>
    @if(count($items)>0)
    <h1>My Sale Announcements</h1>
    <div class="index-items-table">
        @foreach($items as $item)
            <div class="item-card-view">
                <div class="image-card">
                    <img src="{{asset('uploads/item/' . $item->image)}}"  width="auto;" height="100px;" alt="image">
                </div>
                <h1>{{ $item->name }}</h1>
                <p>{{ $item->price }}</p>
                <a href="{{route('delete.item',['id'=>$item->id])}}">Delete</a>
                <a href="{{route('edit.item',['id'=>$item->id])}}">Edit</a>
            </div>
        @endforeach
        <a href="{{route('user.create')}}"><button class="btn btn-primary">Add Items</button></a>
    </div>
        @else
    <h1>You haven't posted any items!</h1>
        <a href="{{route('user.create')}}"><button class="btn btn-primary"> + Let's add some</button></a>
        @endif




</div>
@endsection
