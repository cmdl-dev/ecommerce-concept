@extends('layouts/main')


@section('title')
E-Commerce Store | Checkout
@endsection

@section('content')
<section class='content-area checkout-page'>
    <div class="container">
        <div class="box-container">
            <h1>Check Out</h1>
            <hr>
            <div class="checkout-grid">

                <div class="forms">
                    <h3>Shipping Information</h3>
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname">
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname">
                        </div>
                        <div class="form-group">
                            <label for="address1">Address 1</label>
                            <input type="text" name="address1" id="address-1">
                        </div>
                        <div class="form-group">
                            <label for="address2">Address 2</label>
                            <input type="text" name="address2" id="address2">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city">
                        </div>
                        <div class="form-group">
                            <label for="zipcode">ZipCode</label>
                            <input type="text" name="zipcode" id="zipcode">
                        </div>
                        <div class="form-group">
                            <label for="country">country</label>
                            <input type="text" name="country" id="country">
                        </div>
                    </form>

                    <h3>Shipping Information</h3>
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname">
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname">
                        </div>
                        <div class="form-group">
                            <label for="address1">Address 1</label>
                            <input type="text" name="address1" id="address-1">
                        </div>
                        <div class="form-group">
                            <label for="address2">Address 2</label>
                            <input type="text" name="address2" id="address2">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city">
                        </div>
                        <div class="form-group">
                            <label for="zipcode">ZipCode</label>
                            <input type="text" name="zipcode" id="zipcode">
                        </div>
                        <div class="form-group">
                            <label for="country">country</label>
                            <input type="text" name="country" id="country">
                        </div>
                    </form>
                </div>
                <div class="totals">
                    <div class="items">Items:<span>10</span></div>
                    <div class="tax">Tax:<span>10</span></div>
                    <div class="shipping">Shipping:<span>10</span></div>
                    <div class="total">Total:<span>10</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
