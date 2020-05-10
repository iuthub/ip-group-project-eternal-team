
@extends('layouts.master')

@section('content')

        <div>

            <div class="list-group list-group-flush">
                <form method="get" action="{{route('display.category')}}">
                    <label for="category">Category</label>
                    <select id="category" name="category">
                        <option value="services">Clothing</option>
                        <option value="sports">Sports</option>
                        <option value="electronics">Electronics</option>
                        <option value="others">Others</option>
                        <option value="animals">Animals</option>
                        <option value="books">Books</option>
                        <option value="cars">Cars</option>
                        <option value="services">Services</option>
                    </select>
                    <button type="submit" class="btn btn-success">Search</button>
                </form>
            </div>
        </div>

<div class="index-items-table">
     @foreach($items as $item)
    <a href="{{route('info.item',['id'=>$item->id])}}">
    <div class="item-card-view">
        <div class="image-card">
            <img src="{{asset('uploads/item/' . $item->image)}}"  width="auto;" height="100px;" alt="image">
        </div>
         <h1>{{ $item->name }}</h1>
          <p>{{ $item->price }} {{$item->currency}}</p>
        @if($item->user_id!=auth()->user()->id)
        <a href="{{route('cart.item',['id'=>$item->id])}}">Add to Cart</a>
        @endif
    </div>
    </a>
    @endforeach
</div>


@endsection
