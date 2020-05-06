@extends('layouts.master')

@section('content')
    <form action="{{route('search.item')}}" method="get" class="form-group">
        <label for="search">
            <input type="text" name="search" id="search" class="form-control">
        </label>
        @csrf
        <button type="submit" class="btn-submit">Search</button>
    </form>
<h1>Hello admin</h1>
    <div class="index-items-table">
        @foreach($items as $item)
            <a href="{{route('info.item',['id'=>$item->id])}}">
                <div class="item-card-view">
                    <div class="image-card">
                        <img src="{{asset('uploads/item/' . $item->image)}}"  width="auto;" height="100px;" alt="image">
                    </div>
                    <h1>{{ $item->name }}</h1>
                    <p>{{ $item->price }} {{$item->currency}}</p>
                    <a href="{{route('delete.item',['id'=>$item->id])}}">Delete</a>
                </div>
            </a>
        @endforeach
    </div>
@endsection