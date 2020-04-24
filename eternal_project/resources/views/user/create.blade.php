@extends('layouts.master')

@section('content')

    <form action="{{route('user.create')}}" method="post">
        <div class="form-user-create">
           <label for="title">
               Name
           </label>
            <input type="text" class="form-input-user" id="name" name="name">
        </div>
        <div class="form-user-create">
            <label for="price">
                Price
            </label>
            <input type="text" class="form-input-user" id="price" name="price">
        </div>

        <div class="form-user-details">
            <label for="details">
               Date
            </label>
            <input type="text" id="details" name="details">

        </div>
        <div class="form-user-details">
            <label for="year">
                Year
            </label>
            <input type="date" id="year" name="year">

        </div>
       @csrf
        <button type="submit" >Submit</button>
    </form>

@endsection

