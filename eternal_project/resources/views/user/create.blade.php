@extends('layouts.master')

@section('content')
<div class="form-background">
    <form action="{{route('user.create')}}" method="post" enctype="multipart/form-data">
        <div class="form-user-create">
           <label for="title">
               Name
           </label>
            <br>
            <input type="text" class="form-input-user" id="name" name="name">
        </div>
        <div class="form-user-create">
            <label for="price">
                Price
            </label>
            <br>
            <input type="text" class="form-input-user" id="price" name="price">
        </div>

        <div class="form-user-create">
            <label for="details">
               Details
            </label>
            <br>
            <input type="text" class="form-input-user" id="details" name="details">

        </div>
        <div class="form-user-create">
            <label for="year">
                Year
            </label>
            <br>
            <input type="date"  class="form-input-user" id="year" name="year">
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
            </select>
        </div>
        <div class="form-user-create">

            <label>
                Image
            </label>
            <br>
            <input type="file" name="image" class="form-input-user" id="image">
        </div>
       @csrf
        <button type="submit" class="btn-submit" >Submit</button>
    </form>
</div>
@endsection

