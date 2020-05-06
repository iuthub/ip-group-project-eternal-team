
@extends('layouts.master')


@section('content')

<table class="table-primary">

    <tr>
        <th>User Name</th>
        <th>Email</th>
        <th>Delete</th>
    </tr>
    @foreach($users as $user)
        @if(!$user->isAdmin)
        <tr><td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
            <td><a href="{{route('delete.user',['id'=>$user->id])}}">Delete</a></td>
        </tr>
        @endif
    @endforeach
</table>



@endsection