@extends('layouts.master')

@section('content')
    <form action="{{route('search.item')}}" method="get" class="form-group">
        <label for="search">
            <input type="text" name="search" id="search" class="form-control">
        </label>
        @csrf
        <button type="submit" class="btn-submit">Search</button>
    </form>
<h1>Hello admin</h1>
    <a href="{{route('users.table')}}"><button class="btn btn-primary">Users Table</button></a>
    <a href="{{route('admin.items')}}"><button>Items</button></a>

@endsection