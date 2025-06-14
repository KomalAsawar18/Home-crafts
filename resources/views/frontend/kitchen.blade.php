@extends('frontend.layout.main')
@section('title', 'Kitchen')
@section('main-container')
<!-- Slider main container Start -->
<div class="home5-slider swiper-container section">
    <div class="swiper-wrapper">
        <div class="home5-slide-item swiper-slide" data-swiper-autoplay="5000">
            <div class="row align-items-center learts-mb-n20">
                <div class="home5-slide1-content col-12 learts-mb-50">
                    <span class="sub-title">Live out your life</span>
                    <h2 class="title">Little simple things</h2>
                </div>
                <div class="col-12 learts-mb-20">
                    <div class="row align-items-center learts-mb-n20">
                        <div class="home5-slide1-image text-sm-right col-sm-7 col-12 learts-mb-20"><img src="frontend/images/slider/home5/slide1-1.webp" alt="Home 5 Slider Image"></div>
                        <div class="home5-slide1-image text-sm-right col-sm-5 col-12 learts-mb-20"><img src="frontend/images/slider/home5/slide1-2.webp" alt="Home 5 Slider Image"></div>
                    </div>
                </div>
                <div class="home5-slide-collection">NEW COLLECTION</div>
                <div class="home5-slide-sale">30% OFF</div>
                <div class="home5-slide-shop-link"><a href="{{ url("/shop")}}">Online Store</a></div>
            </div>
        </div>
        <div class="home5-slide-item swiper-slide" data-swiper-autoplay="5000">
            <div class="row align-items-center learts-mb-n20">
                <div class="home5-slide2-content col-md-6 col-12 learts-mb-20">
                    <span class="sub-title">Large </span>
                    <h2 class="title">Marquetry Shelf</h2>
                    <div class="link"><a href="{{ url("/shop")}}" class="btn">shop now</a></div>
                </div>
                <div class="home5-slide2-image col-md-6 col-12 learts-mb-20"><img src="frontend/images/slider/home5/slide2-1.webp" alt="Home 5 Slider Image"></div>
                <div class="home5-slide-collection">NEW COLLECTION</div>
                <div class="home5-slide-sale">30% OFF</div>
                <div class="home5-slide-shop-link"><a href="{{ url("/shop")}}">Online Store</a></div>
            </div>
        </div>
        <div class="home5-slide-item swiper-slide" data-swiper-autoplay="5000">
            <div class="row align-items-center learts-mb-n20">
                <div class="home5-slide3-content col-12 learts-mb-50">
                    <span class="sub-title">Live out your life</span>
                    <h2 class="title">HANDICRAFT SHOP</h2>
                </div>
                <div class="home5-slide3-image col-12 learts-mb-20">
                    <img src="frontend/images/slider/home5/slide3-1.webp" alt="Home 5 Slider Image">
                </div>
                <div class="home5-slide-collection">NEW COLLECTION</div>
                <div class="home5-slide-sale">30% OFF</div>
                <div class="home5-slide-shop-link"><a href="{{ url("/shop")}}">Online Store</a></div>
            </div>
        </div>
    </div>
    <div class="home5-slider-prev swiper-button-prev d-none"></div>
    <div class="home5-slider-next swiper-button-next d-none"></div>
    <div class="home5-slider-pagination swiper-pagination"></div>
</div>
<!-- Slider main container End -->

<!-- Product & Banner Section Start -->
<div class="section section-fluid learts-mt-40">
    <div class="container">
        <div class="isotope-grid row learts-mb-n30">

            <div class="grid-sizer col-1"></div>

            <div class="grid-item col-lg-6 col-12 learts-mb-30">
                <div class="sale-banner7">
                    <div class="inner">
                        <div class="image"><img src="frontend/images/banner/sale/sale-banner7-1.webp" alt="Sale Banner Image"></div>
                        <div class="content">
                            <h2 class="title">Spring sale</h2>
                            <h3 class="sub-title">up to 10% all</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="product">
                    <div class="product-thumb">
                        <a href="{{ url("/product-details")}}" class="image">
                            <img src="frontend/images/product/s328/product-9.webp" alt="Product Image">
                            <img class="image-hover " src="frontend/images/product/s328/product-9-hover.webp" alt="Product Image">
                        </a>
                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product2-info">
                        <h6 class="title"><a href="{{ url("/product-details")}}">Aluminum Equestrian</a></h6>
                        <span class="price">
                            RS.1499
                        </span>
                    </div>
                    <div class="product2-buttons">
                        <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                    </div>
                </div>
            </div>

            <div class="grid-item col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="product">
                    <div class="product-thumb">
                        <a href="{{ url("/product-details")}}" class="image">
                            <img src="frontend/images/product/s328/product-16.webp" alt="Product Image">
                            <img class="image-hover " src="frontend/images/product/s328/product-16-hover.webp" alt="Product Image">
                        </a>
                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product2-info">
                        <h6 class="title"><a href="{{ url("/product-details")}}">Metal Wall Clock</a></h6>
                        <span class="price">
                            RS.1999 - RS.3999
                        </span>
                    </div>
                    <div class="product2-buttons">
                        <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                    </div>
                </div>
            </div>

            <div class="grid-item col-lg-6 col-12 learts-mb-30">
                <div class="sale-banner7">
                    <div class="inner">
                        <div class="image"><img src="frontend/images/banner/sale/sale-banner7-2.webp" alt="Sale Banner Image"></div>
                        <div class="content">
                            <h2 class="title">Caught</h2>
                            <h3 class="sub-title">in the present</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="product">
                    <div class="product-thumb">
                        <a href="{{ url("/product-details")}}" class="image">
                            <img src="frontend/images/product/s328/product-9.webp" alt="Product Image">
                            <img class="image-hover " src="frontend/images/product/s328/product-9-hover.webp" alt="Product Image">
                        </a>
                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product2-info">
                        <h6 class="title"><a href="{{ url("/product-details")}}">Aluminum Equestrian</a></h6>
                        <span class="price">
                            RS.1499
                        </span>
                    </div>
                    <div class="product2-buttons">
                        <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                    </div>
                </div>
            </div>

            <div class="grid-item col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="product">
                    <div class="product-thumb">
                        <a href="{{ url("/product-details")}}" class="image">
                            <img src="frontend/images/product/s328/product-15.webp" alt="Product Image">
                            <img class="image-hover " src="frontend/images/product/s328/product-15-hover.webp" alt="Product Image">
                        </a>
                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product2-info">
                        <h6 class="title"><a href="{{ url("/product-details")}}">Metal Wall Clock</a></h6>
                        <span class="price">
                            RS.199
                        </span>
                    </div>
                    <div class="product2-buttons">
                        <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                    </div>
                </div>
            </div>

            <div class="grid-item col-lg-6 col-12 learts-mb-30">
                <div class="sale-banner7">
                    <div class="inner">
                        <div class="image"><img src="frontend/images/banner/sale/sale-banner7-3.webp" alt="Sale Banner Image"></div>
                        <div class="content">
                            <h2 class="title">Cool summer</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-item col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="product">
                    <div class="product-thumb">
                        <a href="{{ url("/product-details")}}" class="image">
                            <img src="frontend/images/product/s328/product-15.webp" alt="Product Image">
                            <img class="image-hover " src="frontend/images/product/s328/product-15-hover.webp" alt="Product Image">
                        </a>
                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product2-info">
                        <h6 class="title"><a href="{{ url("/product-details")}}">3D Attractive Pot</a></h6>
                        <span class="price">
                            RS.999
                        </span>
                    </div>
                    <div class="product2-buttons">
                        <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                    </div>
                </div>
            </div>

            <div class="grid-item col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="product">
                    <div class="product-thumb">
                        <a href="{{ url("/product-details")}}" class="image">
                            <img src="frontend/images/product/s328/product-18.webp" alt="Product Image">
                            <img class="image-hover " src="frontend/images/product/s328/product-18-hover.webp" alt="Product Image">
                        </a>
                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product2-info">
                        <h6 class="title"><a href="{{ url("/product-details")}}">Ultimate Glass Mug</a></h6>
                        <span class="price">
                            RS.1250
                        </span>
                    </div>
                    <div class="product2-buttons">
                        <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Product & Banner Section End -->
@endsection
