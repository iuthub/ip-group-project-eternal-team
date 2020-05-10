@extends('layouts.master')

@section('content')
<div>

    <div class="container m-5">
        <div class="row">
            <div class="col-4 b-border-20">
                <img class="b-border-20 w-100" src="{{asset('uploads/item/' . $item->image)}}" alt="">
                <h3 class="p-4">Current rating: {{$item->rating}}</h3>
                <form method="post" action="{{route('rate.item',['id'=>$item->id])}}">
                    @csrf
                    @method('post')
                    <select name="mark" id="mark">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <button type="submit">Rate</button>
                </form>
            </div>

            <div class="col-8">
                <h1>Author: {{$user->name}}</h1>
                <small>Product</small>
                <h2>{{$item->name}}</h2>
                <small>Details: </small>
                <h2>{{$item->details}}</h2>
                <small>Category:</small>
                <h2>{{$item->category}}</h2>
                <small>State</small>
                <h2>{{$item->state}}</h2>
                <small>Value</small>
                <h2>{{$item->price}}  {{$item->currency}}</h2>
            </div>
        </div>
    </div>
</div>

<div class="comments">
    @foreach($comments as $lya)
        @if($lya->item_id == $item->id)
        <h5>{{$lya->user_name}}</h5>
        <h6>{{$lya->comment}}</h6>
        @endif
    @endforeach
</div>
<form class="form-group" method="post" action="{{route('add.comment',['id'=>$item->id])}}">
    <input id="comment" type="text" class="form-control" placeholder="Leave a comment here" name="comment">
    @csrf
    <button type="submit" class="btn btn-success">Comment</button>
</form>

    
@endsection