@extends('layouts.master')

@section('content')

    <form action="{{route('user.create')}}" method="post" enctype="multipart/form-data">
        <div class="form-group">
           <label for="title">
               Name
           </label>
            <br>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="price">
                Price
            </label>
            <br>
            <input type="text" class="form-control" id="price" name="price">
        </div>

        <div class="form-group">
            <label for="details">
               Details
            </label>
            <br>
            <input type="text" class="form-control" id="details" name="details">
        </div>




        <div class="form-group">
            <label for="state">
                State
            </label>
            <br>
            <input type="text" class="form-control" id="state" name="state">
        </div>




        <div class="form-group">
            <label for="category">Category</label>
            <select id="category" name="category" class="form-control">
                <option value="services">Clothing</option>
                <option value="sports">Sports</option>
                <option value="electronics">Electronics</option>
                <option value="others">Others</option>
                <option value="animals">Animals</option>
                <option value="books">Books</option>
                <option value="cars">Cars</option>
                <option value="services">Service</option>
            </select>
        </div>
        <div class="form-group">
            <label>
                Image
            </label>
            <br>
            <input type="file" name="image" class="form-control-file" id="image">
        </div>

       @csrf
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>

@endsection

