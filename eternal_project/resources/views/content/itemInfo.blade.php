@extends('layouts.master')

@section('content')
<div>
    <div class="bg-dark">
        <div class="container">
            <ul class="d-inline-flex py-3 m-auto">
                <li class="mx-4">
                    <a class="text-white" href="">Homepage</a>
                </li>
                <li class="mx-4">
                    <a class="text-white" href="">Special Offer</a>
                </li>
                <li class="mx-4">
                    <a class="text-white" href="">Hottest</a>
                </li>
                <li class="mx-4">
                    <a class="text-white" href="">Reviews</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container m-5">
        <div class="row">
            <div class="col-4 b-border-20">
                <img class="b-border-20 w-100" src="{{ asset('img/JBlue1.png') }}" alt="">
                <h3 class="p-4">Ratings:12</h3>
            </div>
            <div class="col-8">
                <small>Product</small>
                <h2>Pikachu</h2>
                <small>Description</small>
                <h2>Jeans Jacket with Pikachu print on back</h2>
                <small>Value</small>
                <h2>25$</h2>
            </div>
        </div>
    </div>
</div>

    
@endsection