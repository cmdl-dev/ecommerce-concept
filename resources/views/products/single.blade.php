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
            <div id="productAddToCart"></div>
            {{-- Start of Detail--}}
            <div class="detail-section">

                <div class="detail">
                    <input type="checkbox" class="toggle" id="delivery-dropdown">
                    <label class='title' for="delivery-dropdown">Delivery</label>
                    <div class="content">
                        <p>
                            Overnight delivery by 8 a.m. to more ZIP Codes than FedEx
                            Priority handling at every stage of transit for added reliability
                            Up to three delivery attempts at no cost for added flexibility
                        </p>
                    </div>
                </div>
            </div>
            {{-- End of Detail--}}

            {{-- Start of Refund--}}
            <div class="detail-section">

                <div class="detail">
                    <input type="checkbox" class="toggle" id="refund-dropdown">
                    <label class='title' for="refund-dropdown">Refund Policy</label>
                    <div class="content">
                        <p>
                            We accept returns for store credit, within 3 business days of receipt.
                            Items must be tagged and in new/unworn condition. Read more here.
                        </p>
                    </div>
                </div>
            </div>
            {{-- End of Refund--}}
        </div>
    </div>
</section>
@endsection
@section('javascript')
    
@endsection