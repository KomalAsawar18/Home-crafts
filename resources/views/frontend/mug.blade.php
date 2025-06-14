@extends('frontend.layout.main')
@section('title', 'Mug')
@section('main-container')
  <!-- Slider main container Start -->
  <div class="home2-slider swiper-container">
    <div class="swiper-wrapper">
        <div class="home2-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-color="#EEE5DD">
            <div class="home2-slide1-image">
                <img src="frontend/images/slider/home2/slider-1-1.webp" alt="Slide One Image">

                <div class="home2-slide1-product1">
                    <button class="slide-pointer"><span>+</span></button>
                    <div class="slide-product">
                        <div class="image"><img src="frontend/images/slider/home2/slider-1-2.webp" alt="Slide Product Image"></div>
                        <h6 class="title">Country Feast set </h6>
                        <span class="price">Rs.5000</span>
                    </div>
                </div>

            </div>
            <div class="home2-slide-content">
                <h5 class="sub-title">DAILY OFFER</h5>
                <h2 class="title">Country Feast Set</h2>
                <div class="link"><a href="{{ url("/shop")}}">shop collection</a></div>
            </div>
            <div class="home2-slide-pages">
                <span class="current">1</span>
                <span class="border"></span>
                <span class="total">3</span>
            </div>
        </div>
        <div class="home2-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-color="#F5F1F1">
            <div class="home2-slide2-image">
                <img src="frontend/images/slider/home2/slider-2-1.webp" alt="Slide One Image">

                <div class="home2-slide2-product1">
                    <button class="slide-pointer"><span>+</span></button>
                    <div class="slide-product">
                        <div class="image"><img src="frontend/images/slider/home2/slider-2-2.webp" alt="Slide Product Image"></div>
                        <h6 class="title">Country Feast set </h6>
                        <span class="price">Rs.5000</span>
                    </div>
                </div>
                <div class="home2-slide2-product2">
                    <button class="slide-pointer"><span>+</span></button>
                    <div class="slide-product">
                        <div class="image"><img src="frontend/images/slider/home2/slider-2-3.webp" alt="Slide Product Image"></div>
                        <h6 class="title">Country Feast set </h6>
                        <span class="price">Rs.5000</span>
                    </div>
                </div>

            </div>
            <div class="home2-slide-content">
                <h5 class="sub-title">DAILY OFFER</h5>
                <h2 class="title">DESIGNS FOR YOU</h2>
                <div class="link"><a href="{{ url("/shop")}}">shop collection</a></div>
            </div>
            <div class="home2-slide-pages">
                <span class="current">2</span>
                <span class="border"></span>
                <span class="total">3</span>
            </div>
        </div>
        <div class="home2-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-color="#F1DED0">
            <div class="home2-slide3-image">
                <img src="frontend/images/slider/home2/slider-3-1.webp" alt="Slide One Image">

                <div class="home2-slide3-product1">
                    <button class="slide-pointer"><span>+</span></button>
                    <div class="slide-product">
                        <div class="image"><img src="frontend/images/slider/home2/slider-3-2.webp" alt="Slide Product Image"></div>
                        <h6 class="title">Country Feast set </h6>
                        <span class="price">Rs.5000</span>
                    </div>
                </div>
                <div class="home2-slide3-product2">
                    <button class="slide-pointer"><span>+</span></button>
                    <div class="slide-product">
                        <div class="image"><img src="frontend/images/slider/home2/slider-3-3.webp" alt="Slide Product Image"></div>
                        <h6 class="title">Country Feast set </h6>
                        <span class="price">Rs.5000</span>
                    </div>
                </div>

            </div>
            <div class="home2-slide-content">
                <h5 class="sub-title">DAILY OFFER</h5>
                <h2 class="title">Country Feast Set</h2>
                <div class="link"><a href="{{ url("/shop")}}">shop collection</a></div>
            </div>
            <div class="home2-slide-pages">
                <span class="current">3</span>
                <span class="border"></span>
                <span class="total">3</span>
            </div>
        </div>
    </div>
    <div class="home2-slider-prev swiper-button-prev"><i class="ti-angle-left"></i></div>
    <div class="home2-slider-next swiper-button-next"><i class="ti-angle-right"></i></div>
</div>
<!-- Slider main container End -->

<!-- Sale Banner Section Start -->
<div class="section section-padding" data-bg-image="frontend/images/bg/home-2.webp">
    <div class="container">
        <div class="row learts-mb-n30">

            <div class="col-lg-5 col-12 ms-auto align-self-center learts-mb-30">
                <div class="about-us">
                    <div class="inner">
                        <img class="logo " src="frontend/images/logo/logo-3.webp" alt="Site Logo">
                        <h2 class="title">Making & crafting</h2>
                        <span class="special-title">Handicraft shop</span>
                        <p>Crafting beautiful stuff with our own hands and the help from useful tools is a wonderful process, where you can enjoy yourself while pulling out some ideas and busy perfecting your work.</p>
                        <a href="#" class="link">Online Store</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-12 ms-auto learts-mb-30">
                <div class="category-banner2">
                    <a href="{{ url("/shop")}}" class="inner">
                        <div class="image"><img src="frontend/images/banner/category/banner-s2-1.webp" alt=""></div>
                        <div class="content">
                            <h3 class="title">Toys<span class="number">6 items</span></h3>
                        </div>
                    </a>
                    <span class="banner-desc right">NEW COLLECTION</span>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-12 learts-mb-30">
                <div class="category-banner2">
                    <a href="{{ url("/shop")}}" class="inner">
                        <div class="image"><img src="frontend/images/banner/category/banner-s2-2.webp" alt=""></div>
                        <div class="content">
                            <h3 class="title">Kniting & Sewing<span class="number">4 items</span></h3>
                        </div>
                    </a>
                    <span class="banner-desc right">SALE UP TO 40%</span>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-12 ms-auto learts-mb-30">
                <div class="section-padding pb-0 d-none d-lg-block"></div>
                <div class="category-banner2">
                    <a href="{{ url("/shop")}}" class="inner">
                        <div class="image"><img src="frontend/images/banner/category/banner-s2-3.webp" alt=""></div>
                        <div class="content">
                            <h3 class="title">Gift ideas<span class="number">16 items</span></h3>
                        </div>
                    </a>
                    <span class="banner-desc right">BEST SELLERS</span>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-12 ms-auto learts-mb-30">
                <div class="section learts-pt-40 d-none d-lg-block"></div>
                <div class="category-banner2">
                    <a href="{{ url("/shop")}}" class="inner">
                        <div class="image"><img src="frontend/images/banner/category/banner-s2-4.webp" alt=""></div>
                        <div class="content">
                            <h3 class="title">Home Decor<span class="number">16 items</span></h3>
                        </div>
                    </a>
                    <span class="banner-desc left">BEST SELLERS</span>
                </div>
            </div>

            <div class="d-flex align-items-center col-lg-5 col-12 ms-auto learts-mb-30">
                <div class="sale-banner3">
                    <span class="special-title">Spring sale</span>
                    <h2 class="title" data-text="ss – 18">Sale up to 10% all</h2>
                    <a href="#" class="link">ONLINE STORE</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Sale Banner Section End -->

<!-- Gallery Section Start -->
<div class="section section-padding border-top">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h3 class="sub-title">Follow us on Instagram</h3>
            <h2 class="title">@homecraftifyed_shop</h2>
        </div>
        <!-- Section Title End -->

        <div class="instafeed instafeed-carousel instafeed-carousel1">
            <a class="instafeed-item" href="#">
                <img src="frontend/images/instagram/instagram-1.webp" alt="instagram image" />
                <i class="fab fa-instagram"></i>
            </a>
            <a class="instafeed-item" href="#">
                <img src="frontend/images/instagram/instagram-2.webp" alt="instagram image" />
                <i class="fab fa-instagram"></i>
            </a>
            <a class="instafeed-item" href="#">
                <img src="frontend/images/instagram/instagram-3.webp" alt="instagram image" />
                <i class="fab fa-instagram"></i>
            </a>
            <a class="instafeed-item" href="#">
                <img src="frontend/images/instagram/instagram-4.webp" alt="instagram image" />
                <i class="fab fa-instagram"></i>
            </a>
            <a class="instafeed-item" href="#">
                <img src="frontend/images/instagram/instagram-4.webp" alt="instagram image" />
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</div>
@endsection
