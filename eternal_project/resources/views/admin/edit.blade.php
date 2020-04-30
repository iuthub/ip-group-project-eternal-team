@extends('layouts.master')



@section('content')

    <div class="form-background">
        <h1>{{$item->id}}</h1>
        <form action="{{route('update.item')}}" method="post" enctype="multipart/form-data">
            <div class="form-user-create">
                <label for="title">
                    Name
                </label>
                <br>
                <input type="text" class="form-input-user" id="name" name="name" value="{{$item->name}}">
            </div>
            <div class="form-user-create">
                <label for="price">
                    Price
                </label>
                <br>
                <input type="text" class="form-input-user" id="price" name="price" value="{{$item->price}}">
            </div>

            <div class="form-user-create">
                <label for="details">
                    Details
                </label>
                <br>
                <input type="text" class="form-input-user" id="details" name="details" value="{{$item->details}}">

            </div>
            <div class="form-user-create">
                <label for="year">
                    Year
                </label>
                <br>
                <input type="date"  class="form-input-user" id="year" name="year" value="{{$item->year}}">
            </div>
            <div class="form-user-create">
                <label for="category">Category</label>
                <select id="category" name="category" class="form-user-create">
                    <option value="sports">Sports</option>
                    <option value="electronics">Electronics</option>
                    <option value="others">Others</option>
                    <option value="animals">Animals</option>
                    <option value="books">Books</option>
                    <option value="services">Service</option>
                    <option value="clothes">Clothes</option>
                </select>
            </div>
            <input type="hidden" name="id" value="{{$item->id}}">
            @csrf
            <button type="submit" class="btn-submit" >Submit</button>
        </form>
    </div>



@endsection
