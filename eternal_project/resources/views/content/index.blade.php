
@extends('layouts.master')

@section('content')

    <div>
        <form action="{{route('search.item')}}" method="get" class="form-user-create">
            <label for="search">
                <input type="text" name="search" id="search" class="input-group">
            </label>
            @csrf
            <button type="submit" class="btn-submit">Search</button>
        </form>

    </div>
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
