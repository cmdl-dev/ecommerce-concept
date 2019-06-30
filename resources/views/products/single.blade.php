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
            <div class="brand">{{$brand}}</div>
        <div class="product">{{$productName}}</div>
        </div>
        <div class="details">
            <p>
                The adidas Yeezy Boost 350 v2 "True Form" is one
                of the three colorways for the silhouette that released
                regionally in March of 2019. This colorway of the Yeezy 350
                was available only in Europe and Russia. The “True Form”
                Yeezy features a grey Primeknit upper with translucent
                post-dyed monofilament side stripes. The grey palette
                is accented with a muted orange shade that can be seen
                under the clear stripe and translucent midsole, as well as
                on the rear pull tab. Paired with the “Hyperspace” and
                “Clay” colorways that also were available in specific markets
                around the globe, this adidas Yeezy Boost 350 v2 "True Form" released
                in limited quantities exclusively in Europe and Russia on March 16, 2019.
            </p>
            <div id="productAddToCart"
                data-imgRoute={{ asset('img/products/adidas-yeezy-boost-white.png') }}
                data-name="{{$productName}}" />
        </div>
    </div>
</section>
@endsection
@section('javascript')
@endsection