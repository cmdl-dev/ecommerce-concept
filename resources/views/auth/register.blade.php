@extends('layouts/main')
{{-- name email password password-confirm --}}
@section('title')
E - Commerce | Register 
@endsection

@section('content')
<section class="content-area login_register-page">
    <div class="">
        <div class="box-container">
            <h2>Register</h2>
            <div class="login-grid register">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="text" name='name' placeholder="Name">
                    <input type="email" name='email' placeholder="Email">
                    <input type="password" name='password' placeholder="Password">
                    <input type="password" name='confirm-password' placeholder="Confirm Password">
                    <button type='submit'>Log In</button>
                </form>

                <div class="line"></div>

            </div>
            <div class="footer">
                Already have an Account? <a href="{{ route('login') }}">Login In</a>
            </div>
        </div>
    </div>
</section>
@endsection
