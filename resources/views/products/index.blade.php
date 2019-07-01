@extends('layouts/main')


@section('title')
E-Commerce | All Products
@endsection

@section('content')
<section class='content-area products-all-page'>
    <div class="filter-section">
        {{-- Start of filter --}}
        <div class="filter">
            <input type="checkbox" class="toggle" id="gender-options" >
            <label class='title' for="gender-options">Gender</label>
            <div class="content">
                <div class="gender">
                    <div class="option">Male</div>
                    <div class="option">Female</div>
                </div>
            </div>
        </div>
        {{-- End of filter --}}

        {{-- Start of filter --}}
        <div class="filter">
            <input type="checkbox" class="toggle" id="brand-options" >
            <label class='title' for="brand-options">Brand</label>
            <div class="content">
                <div class="brand">
                    <div class="option">Adidas</div>
                    <div class="option">Nike</div>
                    <div class="option">Gucci</div>
                    <div class="option">New Balance</div>
                    <div class="option">Dolce & Gabbana</div>
                    <div class="option">Versace</div>
                </div>
            </div>
        </div>
        {{-- End of filter --}}
    
        {{-- Start of filter --}}
        <div class="filter">
            <input type="checkbox" class="toggle" id="size-options" >
            <label class='title' for="size-options">Size</label>
            <div class="content">
                <div class="size">
                    <div class="option">4</div>
                    <div class="option">4.5</div>
                    <div class="option">5</div>
                    <div class="option">5.5</div>
                    <div class="option">6</div>
                    <div class="option">6.5</div>
                    <div class="option">7</div>
                    <div class="option">7.5</div>
                    <div class="option">8</div>
                    <div class="option">8.5</div>
                    <div class="option">9</div>
                    <div class="option">9.5</div>
                </div>
            </div>
        </div>
        {{-- End of filter --}}
    
        {{-- Start of filter --}}
        <div class="filter">
            <input type="checkbox" class="toggle" id="price-options" >
            <label class='title' for="price-options">Price</label>
            <div class="content">
                <div class="price">
                    <input type="text" name="min" placeholder="min" class="option">
                    <input type="text" name="max" placeholder="max" class="option">
                </div>
            </div>
        </div>
        {{-- End of filter --}}

        <button>Filter</button>
    </div>
    <div class="all-products-grid">
        @foreach ($productArray as $product)
        <a href='/product/{{$product->brand}}/{{$product->slug}}'>
            <div class="product-wrap">
                <div class="product">
                    <div class="circle">
                        <img src="{{ asset('img/products/adidas-yeezy-boost-white.png') }}" alt="Yeezy Boost">
                    </div>
                </div>
            <div class="title">{{$product->name}}</div>
            <div class="price">${{$product->price}}</div>
            </div>
        </a>
        @endforeach
    </div>
</section>
@endsection