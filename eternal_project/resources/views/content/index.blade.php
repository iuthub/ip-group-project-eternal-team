
@extends('layouts.master')

@section('content')

    <h1>This is index page</h1>

    @foreach($items as $item)

    <div class="item-container-main">
         <h1>{{ $item->name }}</h1>
          <p>{{ $item->price }}</p>
    </div>

    @endforeach

@endsection
