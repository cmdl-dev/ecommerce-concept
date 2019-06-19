@extends('layouts/main')

@section('title')
E - Commerce | Login
@endsection

@section('content')
<section class="content-area login_register-page">
    <div class="">
        <div class="box-container">
            <h2>Login</h2>
            <div class="login-grid login">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="email" name='email' placeholder="Email">
                    <input type="password" name='password' placeholder="Password">
                    <a href="/account/forgot-password">Forgot Passowrd</a>
                    <button type='submit'>Log In</button>
                </form>
                <div class="line"></div>
                <div class="social-accounts">
                    <a href="#">
                        <span class="ti-google"></span>
                        Google
                    </a>
                    <a href="#">
                        <span class="ti-facebook"></span>
                        FaceBook</a>
                    <a href="#">
                        <span class="ti-twitter"></span>
                        Twitter</a>
                </div>
            </div>
            <div class="footer">
                Need an Account? <a href="{{ route('register') }}">Sign Up</a>
            </div>
        </div>
    </div>
</section>
@endsection
