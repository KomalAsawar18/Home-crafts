@extends('frontend.layout.main')
@section('title', 'Blog')
@section('main-container')
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="frontend/images/blog/bg/blog.jpg">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Blog</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url("/")}}">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Single Blog Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row learts-mb-n50">

                <div class="col-xl-9 col-lg-8 col-12 learts-mb-50">
                    <div class="single-blog">
                        <div class="image">
                            <a href="{{url("/blog")}}"><img src="frontend/images/blog/s870/blog-1.webp" alt="Blog Image"></a>
                        </div>
                        <div class="content">
                            <ul class="category">
                                <li><a href="#">Decor</a></li>
                                <li><a href="#">Kitchen</a></li>
                            </ul>
                            <h2 class="title">Where Art Meets Living Spaces.</h2>
                            <ul class="meta">
                                <li><i class="far fa-user"></i> By <a href="#">Zunaisha Javed</a></li>
                                <li><i class="far fa-calendar"></i><a href="#">November 22, 2024</a></li>
                                <li><i class="far fa-comment"></i><a href="#">3 Comments</a></li>
                                <li><i class="far fa-eye"></i> 150 views</li>
                            </ul>
                            </div>
                        </div>
                        <div class="blog-footer row g-0 justify-content-between align-items-center">
                            <div class="col-auto">
                                <ul class="tags">
                                    <li class="icon"><i class="fas fa-tags"></i></li>
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">fashion</a></li>

                                </ul>
                            </div>
                            <div class="col-auto">
                                <div class="post-share">
                                    Share this post
                                    <span class="toggle"><i class="fas fa-share-alt"></i></span>
                                    <ul class="social-list">
                                        <li class="hintT-top" data-hint="Facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="hintT-top" data-hint="Pinterest"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li class="hintT-top" data-hint="Email"><a href="#"><i class="far fa-envelope-open"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-author">
                        <div class="thumbnail">
                            <img src="frontend/images/comment/umama.webp" alt="">
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="name">Komal Asawar</a>
                            <p>"Adding a Touch of Artistry to Everyday Living with Craftsmanship and creativity.</p>
                        </div>
                    </div>
                    <div class="related-blog">
                        <div class="block-title pb-0 border-bottom-0">
                            <h2 class="title">Related Blog</h2>
                        </div>
                        <div class="row learts-mb-n40">
                            <div class="col-md-6 col-12 learts-mb-40">
                                <div class="blog">
                                    <div class="image">
                                        <a href="{{ url("/blog")}}"><img src="frontend/images/blog/s370/blog-2.webp" alt="Blog Image"></a>
                                    </div>
                                    <div class="content">
                                        <ul class="meta">
                                            <li><i class="far fa-calendar"></i><a href="{{ url("/blog")}}">October 27, 2024</a></li>
                                            <li><i class="far fa-eye"></i> 130 views</li>
                                        </ul>
                                        <h5 class="title mb-0"><a href="{{ url("/blog")}}">Tile Tray with Brass Handles</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 learts-mb-40">
                                <div class="blog">
                                    <div class="image">
                                        <a href="{{ url("/blog")}}"><img src="frontend/images/blog/s370/blog-3.webp" alt="Blog Image"></a>
                                    </div>
                                    <div class="content">
                                        <ul class="meta">
                                            <li><i class="far fa-calendar"></i><a href="#">November 22, 2024</a></li>
                                            <li><i class="far fa-eye"></i> 184 views</li>
                                        </ul>
                                        <h5 class="title mb-0"><a href="{{ url("/blog")}}">Dining Table Chairs Makeover</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Comments-wrapper">
                        <div class="block-title pb-0 border-bottom-0">
                            <h2 class="title">Comments <span class="text-muted">(4)</span></h2>
                        </div>
                        <ul class="comment-list">
                            <li>
                                <div class="comment">
                                    <div class="thumbnail">
                                        <img src="frontend/images/comment/abdullah.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="name">Abdullah Rafiq</h4>
                                        <p>"Your commitment to keeping Home Craftifyed updated and functioning flawlessly is greatly appreciated. The support you provide is truly exceptional."</p>
                                        {{-- <div class="actions">
                                            <span class="date">April 22, 2024 at 2:10 am</span>
                                            <a class="reply-link" href="#">Reply</a>
                                        </div> --}}
                                    </div>
                                </div>
                                <ul class="child-comment">
                                    <li>
                                        <div class="comment">
                                            <div class="thumbnail">
                                                <img src="frontend/images/comment/mahnoor.webp" alt="">
                                            </div>
                                            <div class="content">
                                                <h4 class="name">MahNoor Khalid</h4>
                                                <p>"We are grateful for the continuous updates and support you offer for Home Craftifyed. Your dedication ensures a smooth and reliable experience."</p>
                                                <div class="actions">
                                                    <span class="date">April 22, 2024 at 2:10 am</span>
                                                    <a class="reply-link" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment">
                                    <div class="thumbnail">
                                        <img src="frontend/images/comment/fatima.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="name">Fatima</h4>
                                        <p>"Thank you for the outstanding support and regular updates to Home Craftifyed. Your attention to detail and customer care is unmatched."</p>
                                        <div class="actions">
                                            <span class="date">April 22, 2024 at 2:10 am</span>
                                            <a class="reply-link" href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="comment">
                                    <div class="thumbnail">
                                        <img src="frontend/images/comment/umama.webp" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="name">Umama Sajjad</h4>
                                        <p>Thank you very much!</p>
                                        <div class="actions">
                                            <span class="date">April 22, 2024 at 2:10 am</span>
                                            <a class="reply-link" href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="block-title pb-0 border-bottom-0">
                            <h2 class="title">Leave your thought here</h2>
                        </div>
                        <div class="comment-form">
                            @if ($message = Session::get('success'))
                                        <div class="alert alert-block p-4 border-left-warning"
                                            style="background-color:#EC8E22; opacity:1">
                                            <strong>
                                                <h1 style="color:#ffffff">{{ $message }}</h1>
                                            </strong>
                                        </div>
                                    @endif
                            <form action=""{{ url('/blog') }}"" method="post">
                                <div class="row learts-mb-n20">
                                    <div class="col-md-6 col-12 learts-mb-20">
                                        <input type="text" placeholder="Your name (*)" name="name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                                        <span class="text-danger">
                                                            {{ $errors->first('name') }}
                                                        </span>
                                                    @endif
                                    </div>
                                    <div class="col-md-6 col-12 learts-mb-20">
                                        <input type="text" placeholder="Mail (*)" name="mail" value="{{ old('mail') }}">
                                        @if ($errors->has('mail'))
                                                        <span class="text-danger">
                                                            {{ $errors->first('mail') }}
                                                        </span>
                                                    @endif
                                    </div>
                                    <div class="col-12 learts-mb-20">
                                        <textarea placeholder="Message"name="message" value="{{ old('message') }}">@if ($errors->has('message'))
                                            <span class="text-danger">
                                                {{ $errors->first('message') }}
                                            </span>
                                        @endif</textarea>
                                    </div>
                                    <div class="col-12 text-center learts-mb-20 learts-mt-20">
                                        <button class="btn btn-dark btn-outline-hover-dark" type="submit" name="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-12 learts-mb-10">
                    <!-- Search Start -->
                    <div class="single-widget learts-mb-40">
                        <div class="widget-search">
                            <form action="#">
                                <input type="text" placeholder="Search products....">
                                <button><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Search End -->

                    <!-- Blog Post Widget Start -->
                    <div class="single-widget learts-mb-40">
                        <h3 class="widget-title product-filter-widget-title">Recent Post</h3>
                        <ul class="widget-blogs">
                            <li class="widget-blog">
                                <div class="thumbnail">
                                    <a href="{{ url('/blog')}}"><img src="frontend/images/blog/widget/widget-1.webp" alt="Widget Blog Post"></a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="{{ url("/blog")}}">Start a Kickass Online Blog</a></h6>
                                    <span class="date">November 22, 2024</span>
                                </div>
                            </li>
                            <li class="widget-blog">
                                <div class="thumbnail">
                                    <a href="{{ url('/blog')}}"><img src="frontend/images/blog/s370/blog-2.webp" alt="Widget Blog Post"></a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="{{ url('/blog')}}">Tile Tray with Brass Handles</a></h6>
                                    <span class="date">November 22, 2024</span>
                                </div>
                            </li>
                            <li class="widget-blog">
                                <div class="thumbnail">
                                    <a href="{{ url('/blog')}}"><img src="frontend/images/blog/widget/widget-3.webp" alt="Widget Blog Post"></a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="{{ url('/blog')}}">Dining Table Chairs Makeover</a></h6>
                                    <span class="date">November 22, 2024</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Blog Post Widget End -->

                    <!-- Categories Start -->
                    <div class="single-widget learts-mb-40">
                        <div class="widget-banner">
                            <img src="frontend/images/banner/widget-banner.webp" alt="">
                        </div>
                    </div>
                    <!-- Categories End -->

                    <!-- Categories Start -->
                    <div class="single-widget learts-mb-40">
                        <h3 class="widget-title product-filter-widget-title">Categories</h3>
                        <ul class="widget-list">
                            <li><a href="#">Gift ideas</a> <span class="count">11</span></li>
                            <li><a href="#">Feature</a> <span class="count">2</span></li>
                            <li><a href="#">Kitchen</a> <span class="count">11</span></li>
                        </ul>
                    </div>
                    <!-- Categories End -->

                    <!-- Tags Start -->
                    <div class="single-widget learts-mb-40">
                        <h3 class="widget-title product-filter-widget-title">Product Tags</h3>
                        <div class="widget-tags">
                            <a href="#">design</a>
                            <a href="#">fashion</a>
                            <a href="#">learts</a>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>

            </div>
        </div>

    </div>
    <!-- Single Blog Section End -->

    @endsection

