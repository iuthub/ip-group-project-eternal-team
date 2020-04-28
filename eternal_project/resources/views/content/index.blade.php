
@extends('layouts.master')

@section('content')

    <h1>This is index page</h1>
<div class="index-items-table">
     @foreach($items as $item)

    <div class="item-card-view">
         <h1>{{ $item->name }}</h1>
          <p>{{ $item->price }}</p>
    </div>

    @endforeach
</div>
@endsection
