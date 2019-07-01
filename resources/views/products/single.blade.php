@extends('layouts/main')


@section('title')
E-Commerce Store
@endsection

@section('content')
<section class='content-area product-single-page'>
    <div class="product-imgs">
        <div class="product">
            <div class="circle">
                <img src="{{ asset('img/products/adidas-yeezy-boost-white.png') }}" alt="Yeezy Boost">
            </div>
        </div>
    </div>
    <div class="product-detail">
        <div class="titles">
            <div class="brand">{{$product->brand}}</div>
        <div class="product"><span class="product-name">{{$product->name}}</span><span class='price'>- ${{$product->price}}</span></div>
        </div>
        <div class="details">
        <p>{{$product->description}}</p>
            <div id="productAddToCart"
                data-imgRoute={{ asset('img/products/adidas-yeezy-boost-white.png') }}
                data-price="{{$product->price}}"
                data-name="{{$product->name}}" />
        </div>
    </div>
</section>
@endsection
@section('javascript')
@endsection