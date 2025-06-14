@extends('frontend.layout.main')
@section('title', 'Contact Us')
@section('main-container')
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="frontend/images/contact/contact.jpg">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Contact us</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">Contact us</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->
    <!-- Contact Information & Map Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">Keep in touch with us</h2>
            </div>
            <!-- Section Title End -->

            <!-- Contact Information Start -->
            <div class="row learts-mb-n30">
                <div class="col-lg-4 col-md-6 col-12 learts-mb-30">
                    <div class="contact-info">
                        <h4 class="title">ADDRESS</h4>
                        <span class="info"><i class="icon fas fa-map-marker-alt"></i> Model Town-A Bahawalpur</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 learts-mb-30">
                    <div class="contact-info">
                        <h4 class="title">CONTACT</h4>
                        <span class="info"><i class="icon fas fa-phone-alt"></i> Mobile: (+92) 3002468414 </span>
                        <span class="info"><i class="icon far fa-envelope"></i> Mail: <a href="#">contact@home-craftifyedstore.com</a></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 learts-mb-30">
                    <div class="contact-info">
                        <h4 class="title"> HOUR OF OPERATION</h4>
                        <span class="info"><i class="icon far fa-clock"></i> Monday – Friday : 09:00 – 20:00 <br> Sunday & Saturday: 10:30 – 22:00</span>
                    </div>
                </div>
            </div>
            <!-- Contact Information End -->

            <!-- Contact Map Start -->
            <div class="row learts-mt-60">
                <div class="col">
                    <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13905.071815847032!2d71.6622642!3d29.3917165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b973430443153%3A0xf35cc0641bcee00d!2sModel%20Town%2C%20Bahawalpur%2C%20Punjab!5e0!3m2!1sen!2s!4v1735154362659!5m2!1sen!2s" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <!-- Contact Map End -->

        </div>
    </div>
    <!-- Contact Information & Map Section End -->

    <!-- Contact Form Section Start -->
    <div class="section section-padding pt-0">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">Send a message</h2>
            </div>
            <!-- Section Title End -->

            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <div class="contact-form">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-block p-4 border-left-warning" style="background-color:#EC8E22; opacity:1">
                            <strong>
                                <h1 style="color:#ffffff">{{$message}}</h1>
                            </strong>
                        </div>
                    @endif
                        <form action="{{ url('/contact') }}" id="contact-form" method="post">
                            @csrf
                            <div class="row learts-mb-n30">
                                <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Your Name *" name="name" value="{{old('name')}}"></div>
                                @if ($errors->has('name'))
                                    <span class="text-danger">
                                        {{$errors->first('name')}}
                                    </span>
                                @endif
                                <div class="col-md-6 col-12 learts-mb-30"><input type="email" placeholder="Email *" name="email" value="{{old('email')}}"></div>
                                @if ($errors->has('email'))
                                    <span class="text-danger">
                                        {{$errors->first('email')}}
                                    </span>
                                @endif
                                <div class="col-12 learts-mb-30"><textarea name="message" placeholder="Message" value="{{old('message')}}"></textarea></div>
                                @if ($errors->has('message'))
                                <span class="text-danger">
                                    {{$errors->first('message')}}
                                </span>
                            @endif
                                <div class="col-12 text-center learts-mb-30"><button class="btn btn-dark btn-outline-hover-dark" name="submit">Submit</button></div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact Form Section End -->

  @endsection
