@extends('layouts/main')


@section('title')
E-Commerce Store | Account
@endsection

@section('content')
<section class='content-area account-page'>
    <div class="container">
        <div class="box-container">
            <h1>Account</h1>
            <hr>
            <div class="checkout-grid">

                <div class="forms">
                    Welcome to the account page
                </div>
                <div class="sub-menu">
                    @include('account/sub-menu')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
