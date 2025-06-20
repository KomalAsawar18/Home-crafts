@extends('frontend.layout.main')
@section('title', 'Home')
@section('main-container')
    <!-- Slider main container Start -->
    <div class="home1-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="home1-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-image="frontend/images/slider/home1/slide-1.webp">
                <div class="home1-slide1-content">
                    <span class="bg"></span>
                    <span class="slide-border"></span>
                    <span class="icon"><img src="frontend/images/slider/home1/slide-1-1.webp" alt="Slide Icon"></span>
                    <h2 class="title">Handicraft Shop</h2>
                    <h3 class="sub-title">Just for you</h3>
                    <div class="link"><a href="{{ url("/shop")}}">shop now</a></div>
                </div>
            </div>
            <div class="home1-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-image="frontend/images/slider/home1/slide-2.webp">
                <div class="home1-slide2-content">
                    <span class="bg" data-bg-image="frontend/images/slider/home1/slide-2-1.webp"></span>
                    <span class="slide-border"></span>
                    <span class="icon">
                        <img src="frontend/images/slider/home1/slide-2-2.webp" alt="Slide Icon">
                        <img src="frontend/images/slider/home1/slide-2-3.webp" alt="Slide Icon">
                    </span>
                    <h2 class="title">Newly arrived</h2>
                    <h3 class="sub-title">Sale up to <br>10%</h3>
                    <div class="link"><a href="{{ url("/shop")}}">shop now</a></div>
                </div>
            </div>
            <div class="home1-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-image="frontend/images/slider/home1/slide-3.webp">
                <div class="home1-slide3-content">
                    <h2 class="title">Affectious gifts</h2>
                    <h3 class="sub-title">
                        <img class="left-icon " src="frontend/images/slider/home1/slide-2-2.webp" alt="Slide Icon">
                        For friends & family
                        <img class="right-icon " src="frontend/images/slider/home1/slide-2-3.webp" alt="Slide Icon">
                    </h3>
                    <div class="link"><a href="{{ url("/shop")}}">shop now</a></div>
                </div>
            </div>
        </div>
        <div class="home1-slider-prev swiper-button-prev"><i class="ti-angle-left"></i></div>
        <div class="home1-slider-next swiper-button-next"><i class="ti-angle-right"></i></div>
    </div>
    <!-- Slider main container End -->

    <!-- Sale Banner Section Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h3 class="sub-title">Just for you</h3>
                <h2 class="title title-icon-both">Making & crafting</h2>
            </div>
            <!-- Section Title End -->

            <div class="row learts-mb-n40">

                <div class="col-lg-5 col-md-6 col-12 me-auto learts-mb-40">
                    <div class="sale-banner1" data-bg-image="frontend/images/banner/sale/sale-banner1-1.webp">
                        <div class="inner">
                            <img src="frontend/images/banner/sale/sale-banner1-1.1.webp" alt="Sale Banner Icon">
                            <span class="title">Spring sale</span>
                            <h2 class="sale-percent">
                                <span class="number">40</span> % <br> off
                            </h2>
                            <a href="{{ url("/shop")}}" class="link">shop now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 learts-mb-40">
                    <div class="sale-banner2">
                        <div class="inner">
                            <div class="image"><img src="frontend/images/banner/sale/sale-banner2-1.webp" alt=""></div>
                            <div class="content row justify-content-between mb-n3">
                                <div class="col-auto mb-3">
                                    <h2 class="sale-percent">10% off</h2>
                                    <span class="text">YOUR NEXT PURCHASE</span>
                                </div>
                                <div class="col-auto mb-3">
                                    <a class="btn btn-hover-dark" href="{{ url("/shop")}}">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Sale Banner Section End -->

    <!-- Category Banner Section Start -->
    <div class="section section-fluid section-padding pt-0">
        <div class="container">
            <div class="category-banner1-carousel">

                <div class="col">
                    <div class="category-banner1">
                        <div class="inner">
                            <a href="{{ url("/gifts")}}" class="image"><img src="frontend/images/banner/category/banner-s1-1.webp" alt=""></a>
                            <div class="content">
                                <h3 class="title">
                                    <a href="{{ url("/gifts")}}">Gift ideas</a>
                                    <span class="number">16</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="category-banner1">
                        <div class="inner">
                            <a href="{{ url("/shop")}}" class="image"><img src="frontend/images/banner/category/banner-s1-2.webp" alt=""></a>
                            <div class="content">
                                <h3 class="title">
                                    <a href="{{ url("/shop")}}">Home Decor</a>
                                    <span class="number">16</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="category-banner1">
                        <div class="inner">
                            <a href="{{ url("/shop")}}" class="image"><img src="frontend/images/banner/category/banner-s1-3.webp" alt=""></a>
                            <div class="content">
                                <h3 class="title">
                                    <a href="{{ url("/shop")}}">Kids & Babies</a>
                                    <span class="number">6</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="category-banner1">
                        <div class="inner">
                            <a href="{{ url("/kitchen")}}" class="image"><img src="frontend/images/banner/category/banner-s1-4.webp" alt=""></a>
                            <div class="content">
                                <h3 class="title">
                                    <a href="{{ url("/kitchen")}}">Kitchen</a>
                                    <span class="number">15</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="category-banner1">
                        <div class="inner">
                            <a href="{{ url("/shop")}}" class="image"><img src="frontend/images/banner/category/banner-s1-5.webp" alt=""></a>
                            <div class="content">
                                <h3 class="title">
                                    <a href="{{ url("/shop")}}">Kniting & Sewing</a>
                                    <span class="number">4</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Category Banner Section End -->

    <!-- Product Section Start -->
    <div class="section section-fluid section-padding pt-0">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h3 class="sub-title">Shop now</h3>
                <h2 class="title title-icon-both">Shop our best-sellers</h2>
            </div>
            <!-- Section Title End -->

            <!-- Products Start -->
            <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/mug")}}" class="image">
                                <span class="product-badges">
                                    <span class="onsale">-13%</span>
                                </span>
                                <img src="frontend/images/product/s328/product-1.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-1-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/mug")}}">Boho Beard Mug</a></h6>
                            <span class="price">
                                <span class="old">RS.2500</span>
                            <span class="new">RS.1900</span>
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/motorcycle")}}" class="image">
                                <img src="frontend/images/product/s328/product-2.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-2-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/motorcycle")}}">Motorized Tricycle</a></h6>
                            <span class="price">
                               RS.3500
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <span class="product-badges">
                                <span class="hot">hot</span>
                            </span>
                            <a href="{{ url("/walnut")}}" class="image">
                                <img src="frontend/images/product/s328/product-3.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-3-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/walnut")}}">Walnut Cutting Board</a></h6>
                            <span class="price">
                                RS.500
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/product-details")}}" class="image">
                                <span class="product-badges">
                                    <span class="onsale">-27%</span>
                                </span>
                                <img src="frontend/images/product/s328/product-4.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-4-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Pizza Plate Tray</a></h6>
                            <span class="price">
                                <span class="old">RS.350</span>
                            <span class="new">RS.200</span>
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/product-details")}}" class="image">
                                <img src="frontend/images/product/s328/product-5.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-5-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            <div class="product-options">
                                <ul class="colors">
                                    <li style="background-color: #c2c2c2;">color one</li>
                                    <li style="background-color: #374140;">color two</li>
                                    <li style="background-color: #8ea1b2;">color three</li>
                                </ul>
                                <ul class="sizes">
                                    <li>Large</li>
                                    <li>Medium</li>
                                    <li>Small</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Minimalist Ceramic Pot</a></h6>
                            <span class="price">
                                RS.1200
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/product-details")}}" class="image">
                                <img src="frontend/images/product/s328/product-6.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-6-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Clear Silicate Teapot</a></h6>
                            <span class="price">
                                Rs.899
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/product-details")}}" class="image">
                                <span class="product-badges">
                                    <span class="hot">hot</span>
                                </span>
                                <img src="frontend/images/product/s328/product-7.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-7-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Lucky Wooden Elephant</a></h6>
                            <span class="price">
                               RS.3500
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/fox")}}" class="image">
                                <span class="product-badges">
                                    <span class="outofstock"><i class="far fa-frown"></i></span>
                                <span class="hot">hot</span>
                                </span>
                                <img src="frontend/images/product/s328/product-8.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-8-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            <div class="product-options">
                                <ul class="colors">
                                    <li style="background-color: #000000;">color one</li>
                                    <li style="background-color: #b2483c;">color two</li>
                                </ul>
                                <ul class="sizes">
                                    <li>Large</li>
                                    <li>Medium</li>
                                    <li>Small</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/fox")}}">Decorative Fox</a></h6>
                            <span class="price">
                                RS.999
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/product-details")}}" class="image">
                                <img src="frontend/images/product/s328/product-9.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-9-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Aluminum Equestrian</a></h6>
                            <span class="price">
                                RS.500
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/product-details")}}" class="image">
                                <img src="frontend/images/product/s328/product-10.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-10-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Fish Cut Out Set</a></h6>
                            <span class="price">
                                RS.199
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/product-details")}}" class="image">
                                <img src="frontend/images/product/s328/product-11.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-11-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Electric Egg Blender</a></h6>
                            <span class="price">
                                RS.1250
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/product-details")}}" class="image">
                                <img src="frontend/images/product/s328/product-12.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-12-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Cape Cottage Playhouse</a></h6>
                            <span class="price">
                               RS.3500
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/product-details")}}" class="image">
                                <img src="frontend/images/product/s328/product-13.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-13-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            <div class="product-options">
                                <ul class="colors">
                                    <li style="background-color: #ffffff;">color one</li>
                                    <li style="background-color: #01796f;">color two</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Kernel Popcorn Bowl</a></h6>
                            <span class="price">
                                RS.1250
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/product-details")}}" class="image">
                                <span class="product-badges">
                                    <span class="outofstock"><i class="far fa-frown"></i></span>
                                </span>
                                <img src="frontend/images/product/s328/product-14.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-14-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            <div class="product-options">
                                <ul class="colors">
                                    <li style="background-color: #000000;">color one</li>
                                    <li style="background-color: #ffffff;">color two</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Abstract Folded Pots</a></h6>
                            <span class="price">
                                RS.2999 - RS.4999
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url("/product-details")}}" class="image">
                                <img src="frontend/images/product/s328/product-15.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-15-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Brush & Dustpan Set</a></h6>
                            <span class="price">
                                RS.199
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Products End -->

        </div>
    </div>

    @endsection

