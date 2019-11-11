@extends('layouts/main')


@section('title')
E-Commerce Store
@endsection

@section('content')
<section class='content-area home-page'>
    <div class="top-section">
        <div class="product">
            <div class="circle">
                <img src="{{ secure_asset('img/products/adidas-yeezy-boost-white.png') }}" alt="Yeezy Boost">
            </div>
        </div>
        <div class="titles">
            <h3>Yeezy</h3>
            <h1>Boost 350</h1>
        </div>
    </div>
</section>
@endsection