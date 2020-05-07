@extends('layouts.master')

@section('content')

    <h1>Author: {{$user->name}}</h1>

    <div class="item-card-view">
        <img src="{{asset('uploads/item/' . $item->image)}}"  width="500px;" height="500px" alt="image" >
        <h1>{{$item->name}}</h1>
        <p>{{$item->price}}  {{$item->currency}}</p>
        <p>Cateogry:{{$item->category}}</p>
        <p>State: {{$item->state}}</p>
        <p>
            Details: {{$item->details}}
        </p>
        <p>
           Date of post: {{$item->created_at}}
        </p>
        <p>Current Rating: {{$item->rating}}</p>
        <p>Rate:</p>
{{--        @for($i=0;$i<6;$i+1)--}}
{{--            @dd($i)--}}
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
{{--        @endfor--}}
{{--        <a href="{{route('rate.item',['id'=>$item->id,'mark'=>1])}}"><button>{{1}}</button></a>--}}
{{--        <a href="{{route('rate.item',['id'=>$item->id,'mark'=>2])}}"><button>{{2}}</button></a>--}}
{{--        <a href="{{route('rate.item',['id'=>$item->id,'mark'=>3])}}"><button>{{3}}</button></a>--}}
{{--        <a href="{{route('rate.item',['id'=>$item->id,'mark'=>4])}}"><button>{{4}}</button></a>--}}
{{--        <a href="{{route('rate.item',['id'=>$item->id,'mark'=>5])}}"><button>{{5}}</button></a>--}}



    </div>

@endsection