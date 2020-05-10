<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--            Mum Buy--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <!-- Left Side Of Navbar -->--}}
{{--            <ul class="navbar-nav mr-auto">--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{route('user.create')}}">New Item</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{route('home')}}">Dashboard</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{route('contact.us')}}">Contact Us</a>--}}
{{--                </li>--}}


{{--            </ul>--}}

{{--            <!-- Right Side Of Navbar -->--}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                <!-- Authentication Links -->--}}


{{--                @guest--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                    </li>--}}
{{--                    @if (Route::has('register'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                        </a>--}}

{{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}

{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="bg-white shadow-sm">
        <div class="container m-auto">
            <div class="row justify-content-between">
                <div class="col-3 d-flex">
                    <div class="border-right border-dark m-auto">
                        <a href="{{route('main.index')}}">
                            <img src="{{ asset('img/Logo 1.png') }}" alt="">
                        </a>
                    </div>
                    <h3 class="p-2">BUY<br>SELL <br>STAY AT HOME</h3>
                </div>
                <div class="col-7 m-auto">
                    <div class="d-flex w-75 m-auto">
                        <div class="w-100 m-auto custom-red b-border-20">
                            <form action="{{route('search.item')}}" class="m-0" method="get">
                                <input type="text" class="w-75 px-3 py-1 b-border-20 border border-danger" name="search"  id="search">
                                <button class="b-border-20 py-1 border border-danger ml--2 bg-white" type="submit">Search</button>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2 m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact.us')}}">Contact Us</a>
                    </li>
                    <a href="{{route('home')}}">
                        <img src="{{ asset('img/Vector.png') }}" alt="#">
                    </a>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <a class="pl-2" href="{{route('mycart.items',['id'=>auth()->user()->id])}}">
                            <img class="w-75 m-auto" src="{{ asset('img/union.png') }}" alt="">
                        </a>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                </div>
            </div>
        </div>
    </div>

