@extends('layouts.master')

@section('content')

    <h1>Author: {{$user->name}}</h1>

    <div class="item-card-view">
        <img src="{{asset('uploads/item/' . $item->image)}}"  width="500px;" height="500px" alt="image" >
        <h1>{{$item->name}}</h1>
        <p>Cateogry:{{$item->category}}</p>
        <p>State: {{$item->state}}</p>
        <p>
            Details: {{$item->details}}
        </p>
        <p>
           Date of post: {{$item->created_at}}
        </p>

    </div>

@endsection