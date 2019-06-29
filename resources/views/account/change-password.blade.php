@extends('layouts/main')


@section('title')
E-Commerce Store | Change Password
@endsection

@section('content')
<section class='content-area account-page'>
    <div class="container">
        <div class="box-container">
            <h1>Change Password</h1>
            <hr>
            <div class="checkout-grid">

                <div class="forms">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="currentPassword">Current Password</label>
                            <input type="password" id="currentPassword" name="currentPassword">
                        </div>
                        <div class="form-group">
                            <label for="newPassword">New Password</label>
                            <input type="password" id="newPassword" name="newPassword">
                        </div>
                        <div class="form-group">
                            <button type="submit">Save</button>
                        </div>
                    </form>
                </div>
                <div class="sub-menu">
                    @include('account/sub-menu')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
