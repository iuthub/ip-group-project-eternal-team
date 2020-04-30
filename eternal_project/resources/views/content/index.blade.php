
@extends('layouts.master')

@section('content')

    <h1>This is index page</h1>
<div class="index-items-table">
     @foreach($items as $item)

    <div class="item-card-view">
        <div class="image-card">
            <img src="{{asset('uploads/item/' . $item->image)}}"  width="auto;" height="100px;" alt="image">
        </div>
         <h1>{{ $item->name }}</h1>
          <p>{{ $item->price }}</p>

    </div>



    @endforeach
</div>
@endsection
