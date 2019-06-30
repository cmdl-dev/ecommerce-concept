<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/lt-themify-icons@1.1.0/themify-icons.min.css" rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Stripe -->
    <script src="https://js.stripe.com/v3/"></script>

</head>

<body>
    <div class="flex-center position-ref full-height">
        {{-- @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif --}}
        {{-- Start of the header  --}}
        <header>
            <div class="logo"><a href='/'>FreshGear</a></div>
            <div class="menu">
                @guest
                    <a href="/login" class="">Login</a>
                @else
                    <a href="javascript:void(0)">Hello {{Auth::user()->name}}</a>
                @endguest
                <a href="/about">About</a>
                <a href="/products/new-arrivals">New Arrival</a>
                <a href="/products">All Products</a>
                <div id='cart-btn'></div>
            </div>
        </header>
        {{-- End of the header  --}}
        @yield('content')
        <div id="modal1" class="modal" >
            <div id='modal-checkout'></div>
        </div>
        {{-- Start of cart section --}}
        <div id="cart-popup-root"
            data-imgRoute='{{ asset('img/products/adidas-yeezy-boost-white.png') }}'></div>
        {{-- End of the Cart--}}
    <script src="{{asset('/js/app.js')}}"></script>
    @yield('javascript')
    </div>
</body>

</html>
