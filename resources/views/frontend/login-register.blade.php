@extends('frontend.layout.main')
@section('title', 'Login')
@section('main-container')
 <!-- Page Title/Header Start -->
 <div class="page-title-section section" data-bg-image="frontend/images/bg/page-title-1.webp">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-title">
                    <h1 class="title">Login & Register</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active">Login & Register</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->


<!-- Login & Register Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="user-login-register bg-light">
                    <div class="login-register-title">
                        <h2 class="title">Login</h2>
                        <p class="desc">Great to have you back!</p>
                    </div>
                    <div class="login-register-form">
                        <form action="#">
                            <div class="row home_craftifyed-mb-n50">
                                <div class="col-12 learts-mb-50">
                                    <input type="email" placeholder="Username or email address">
                                </div>
                                <div class="col-12 learts-mb-50">
                                    <input type="password" placeholder="Password">
                                </div>
                                <div class="col-12 text-center learts-mb-50">
                                    <button class="btn btn-dark btn-outline-hover-dark">login</button>
                                </div>
                                <div class="col-12 learts-mb-50">
                                    <div class="row learts-mb-n20">
                                        <div class="col-12 learts-mb-20">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12 learts-mb-20">
                                            <a href="lost-password.html" class="fw-400">Lost your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="user-login-register">
                    <div class="login-register-title">
                        <h2 class="title">Register</h2>
                        <p class="desc">If you don’t have an account, register now!</p>
                    </div>
                    <div class="login-register-form">
                        <form action="#">
                            <div class="row learts-mb-n50">
                                <div class="col-12 learts-mb-20">
                                    <label for="registerEmail">Email address <abbr class="required">*</abbr></label>
                                    <input type="email" id="registerEmail">
                                </div>
                                {{-- <div class="col-12 learts-mb-50">
                                    <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy</p>
                                </div> --}}
                                <div class="col-12 text-center learts-mb-50">
                                    <button class="btn btn-dark btn-outline-hover-dark">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- Login & Register Section End -->
@endsection
