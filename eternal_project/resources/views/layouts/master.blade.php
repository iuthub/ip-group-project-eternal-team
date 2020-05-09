<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mum Buy</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--Custom Styles -->
    <link href="{{ asset('css/login-and-registration.css') }}" rel="stylesheet" >

    {{--  Bootsrap files  --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>

<div id="app">


    @include('partials.navbar')
    
    @auth
    @include('partials.message')
    @include('partials.category')

    @endauth

    <main class="py-4">
        @yield('content')
    </main>
</div>
{{--@include('partials.footer')--}}
   <!--Jquery-->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script defer src="{{asset('js/modeChanger.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
<!--Custom-js-file-->
</html>
