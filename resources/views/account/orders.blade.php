@extends('layouts/main')


@section('title')
E-Commerce Store | Orders
@endsection

@section('content')
<section class='content-area account-page'>
    <div class="container">
        <div class="box-container">
            <h1>Orders</h1>
            <hr>
            <div class="checkout-grid">

                <div class="forms">
                    <div class="order-list">
                        <table>
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Price</td>
                                    <td>Date</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>54</td>
                                    <td>$2,301</td>
                                    <td>4/28/2019</td>
                                    <td><span class='tag shipped'>Shipped</span></td>
                                </tr>
                                <tr>
                                    <td>54</td>
                                    <td>$2,301</td>
                                    <td>4/28/2019</td>
                                    <td><span class='tag'>Pending</span></td>
                                </tr>
                                <tr>
                                    <td>54</td>
                                    <td>$2,301</td>
                                    <td>4/28/2019</td>
                                    <td><span class='tag canceled'>Canceled</span></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="sub-menu">
                    @include('account/sub-menu')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
