@extends('layouts.master')

@section('content')


    @if(count($items)>0)
     @foreach($items as $item)
         <a href="{{route('info.item',['id'=>$item->id])}}">
             <div class="item-card-view">
                 <div class="image-card">
                     <img src="{{asset('uploads/item/' . $item->image)}}"  width="auto;" height="100px;" alt="image">
                 </div>
                 <h1>{{ $item->name }}</h1>
                 <p>{{ $item->price }} {{$item->currency}}</p>
                 <a href="{{route('remove.item.cart',['id'=>$item->id])}}">Remove from cart</a>
             </div>
         </a>
             @endforeach
     <h2>Total price is: {{$price}} {{$item->currency}}</h2>
         @else
             <a href="{{route('main.index')}}">
                 <button class="btn btn-danger">
                     Go choose something
                 </button>
             </a>
         @endif





@endsection