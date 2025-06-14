@extends('frontend.layout.main')
@section('title', 'Gifts Ideas')
@section('main-container')
  <!-- Slider main container Start -->
  <div class="section section-fluid">
    <div class="container">
        <div class="row learts-mb-n30">

            <div class="col-lg-6 learts-mb-30">
                <div class="sale-banner4">
                    <div class="inner">
                        <img src="frontend/images/banner/sale/sale-banner4-1.webp" alt="Products Image">
                        <div class="content">
                            <h3 class="sub-title">Little simple things.</h3>
                            <h2 class="title">Live out your life</h2>
                            <a class="button-banner" href="{{ url("/shop")}}"><img src="frontend/images/banner/sale/sale-banner4-1.1.webp" alt="Sale Banner button"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 learts-mb-30">
                <div class="row learts-mb-n30">

                    <div class="col-12 learts-mb-30">
                        <div class="sale-banner5">
                            <a href="#" class="inner">
                                <img src="frontend/images/banner/sale/sale-banner5-1.webp" alt="Sale Banner Image">
                                <div class="content">
                                    <h3 class="title">Holiday<br> Gifts</h3>
                                    <span class="price">From Rs.199</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 learts-mb-30">
                        <div class="sale-banner6">
                            <div class="inner">
                                <img src="frontend/images/banner/sale/sale-banner6-1.webp" alt="Sale Banner Image">
                                <div class="content">
                                    <img class="icon " src="frontend/images/banner/sale/sale-banner1-1.1.webp" alt="">
                                    <h3 class="title">Spring sale</h3>
                                    <img class="price " src="frontend/images/banner/sale/sale-banner6-1.1.webp" alt="">
                                    <a href="#" class="link">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>
<!-- Slider main container End -->

<!-- Products Section Start -->
<div class="section section-padding">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title4 text-center">
            <h2 class="title title-icon-both">Just for you</h2>
        </div>
        <!-- Section Title End -->

        <!-- Product Tab Start -->
        <div class="row">
            <div class="col-12">
                <ul class="product-tab-list tab-hover2 nav">
                    <li><a class="active" data-bs-toggle="tab" href="#tab-new-sale">New arrivals</a></li>
                    <li><a data-bs-toggle="tab" href="#tab-sale-items">Sale items</a></li>
                    <li><a data-bs-toggle="tab" href="#tab-best-sellers">Best sellers</a></li>
                </ul>
                <div class="prodyct-tab-content1 tab-content">
                    <div class="tab-pane fade show active" id="tab-new-sale">
                        <!-- Products Start -->
                        <div class="products row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                            <div class="col">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="{{ url("/mug")}}" class="image">
                                            <span class="product-badges">
                                                <span class="onsale">-13%</span>
                                            </span>
                                            <img src="frontend/images/product/s270/product-1.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-1-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/mug")}}">Boho Beard Mug</a></h6>
                                        <span class="price">
                                            <span class="old">Rs.1500</span>
                                        <span class="new">Rs.1200</span>
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
                                            <img src="frontend/images/product/s270/product-2.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-2-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Motorized Tricycle</a></h6>
                                        <span class="price">
                                            Rs.3500
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
                                            <img src="frontend/images/product/s270/product-3.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-3-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/walnut")}}">Walnut Cutting Board</a></h6>
                                        <span class="price">
                                            Rs.350
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
                                        <a href="{{ url("/product-details")}}"class="image">
                                            <span class="product-badges">
                                                <span class="onsale">-27%</span>
                                            </span>
                                            <img src="frontend/images/product/s270/product-4.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-4-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href=product-details>Pizza Plate Tray</a></h6>
                                        <span class="price">
                                            <span class="old">Rs.350</span>
                                        <span class="new">Rs.299</span>
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
                                            <img src="frontend/images/product/s270/product-5.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-5-hover.webp" alt="Product Image">
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
                                        <h6 class="title"><a href="{{ url("/mug")}}">Minimalist Ceramic Pot</a></h6>
                                        <span class="price">
                                            Rs.1299
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
                                            <img src="frontend/images/product/s270/product-6.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-6-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Clear Silicate Teapot</a></h6>
                                        <span class="price">
                                            Rs.1399
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
                                            <img src="frontend/images/product/s270/product-7.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-7-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Lucky Wooden Elephant</a></h6>
                                        <span class="price">
                                            Rs.3500
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
                                            <span class="hot">hot</span>
                                            </span>
                                            <img src="frontend/images/product/s270/product-8.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-8-hover.webp" alt="Product Image">
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
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Decorative Christmas Fox</a></h6>
                                        <span class="price">
                                            Rs.1099
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
                    <div class="tab-pane fade" id="tab-sale-items">
                        <!-- Products Start -->
                        <div class="products row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                            <div class="col">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="{{ url("/product-details")}}" class="image">
                                            <span class="product-badges">
                                                <span class="onsale">-27%</span>
                                            </span>
                                            <img src="frontend/images/product/s270/product-4.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-4-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Pizza Plate Tray</a></h6>
                                        <span class="price">
                                            <span class="old">Rs.350</span>
                                        <span class="new">Rs.299</span>
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
                                            <img src="frontend/images/product/s270/product-5.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-5-hover.webp" alt="Product Image">
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
                                            Rs.1299
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
                                            <img src="frontend/images/product/s270/product-6.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-6-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Clear Silicate Teapot</a></h6>
                                        <span class="price">
                                            Rs.1399
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
                                            <img src="frontend/images/product/s270/product-7.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-7-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Lucky Wooden Elephant</a></h6>
                                        <span class="price">
                                            Rs.3500
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
                                            <span class="hot">hot</span>
                                            </span>
                                            <img src="frontend/images/product/s270/product-8.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-8-hover.webp" alt="Product Image">
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
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Decorative Christmas Fox</a></h6>
                                        <span class="price">
                                            Rs.1099
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
                                            <img src="frontend/images/product/s270/product-9.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-9-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Aluminum Equestrian</a></h6>
                                        <span class="price">
                                            Rs.350
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
                                            <img src="frontend/images/product/s270/product-10.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-10-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Fish Cut Out Set</a></h6>
                                        <span class="price">
                                            Rs.199
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
                                                <span class="onsale">-13%</span>
                                            </span>
                                            <img src="frontend/images/product/s270/product-1.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-1-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Boho Beard Mug</a></h6>
                                        <span class="price">
                                            <span class="old">Rs.1500</span>
                                        <span class="new">Rs.1200</span>
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
                    <div class="tab-pane fade" id="tab-best-sellers">
                        <!-- Products Start -->
                        <div class="products row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                            <div class="col">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="{{ url("/product-details")}}" class="image">
                                            <img src="frontend/images/product/s270/product-6.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-6-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Clear Silicate Teapot</a></h6>
                                        <span class="price">
                                            Rs.1399
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
                                            <img src="frontend/images/product/s270/product-7.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-7-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Lucky Wooden Elephant</a></h6>
                                        <span class="price">
                                            Rs.3500
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
                                            <span class="hot">hot</span>
                                            </span>
                                            <img src="frontend/images/product/s270/product-8.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-8-hover.webp" alt="Product Image">
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
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Decorative Christmas Fox</a></h6>
                                        <span class="price">
                                            Rs.1099
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
                                            <img src="frontend/images/product/s270/product-9.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-9-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Aluminum Equestrian</a></h6>
                                        <span class="price">
                                            Rs.350
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
                                            <img src="frontend/images/product/s270/product-10.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-10-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Fish Cut Out Set</a></h6>
                                        <span class="price">
                                            Rs.199
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
                                                <span class="onsale">-13%</span>
                                            </span>
                                            <img src="frontend/images/product/s270/product-1.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-1-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Boho Beard Mug</a></h6>
                                        <span class="price">
                                            <span class="old">Rs.1500</span>
                                        <span class="new">Rs.1200</span>
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
                                            <img src="frontend/images/product/s270/product-2.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-2-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Motorized Tricycle</a></h6>
                                        <span class="price">
                                            Rs.3500
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
                                        <a href="{{ url("/product-details")}}" class="image">
                                            <img src="frontend/images/product/s270/product-3.webp" alt="Product Image">
                                            <img class="image-hover " src="frontend/images/product/s270/product-3-hover.webp" alt="Product Image">
                                        </a>
                                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="{{ url("/product-details")}}">Walnut Cutting Board</a></h6>
                                        <span class="price">
                                            Rs.350
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
            </div>
        </div>
        <!-- Product Tab End -->
        <div class="row g-0 justify-content-center learts-mt-50">
            <a href="{{ url("/shop")}}" class="btn p-0"><i class="ti-plus"></i> load more ...</a>
        </div>

    </div>
</div>
<!-- Products Section End -->

<!-- Sale Banner Start -->
<div class="section section-padding" data-bg-color="#f4ede7">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 align-self-center">
                <div class="product-deal-image text-center">
                    <img src="frontend/images/banner/sale/sale-banner9-2.webp" alt="">
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="sale-banner9 p-0">
                    <div class="inner">
                        <div class="content">
                            <h3 class="title">New collection</h3>
                            <span class="offer">30% OFF</span>
                            <a href="{{ url("/shop")}}" class="btn btn-dark btn-hover-primary">shop now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Sale Banner End -->
<!-- Feature Section Start -->
<div class="section learts-pt-30 learts-pb-30" data-bg-color="#eee4dc">
    <div class="container">
        <div class="row learts-mb-n30">

            <div class="col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="icon-box5">
                    <div class="icon"><i class="fas fa-truck"></i></div>
                    <div class="content">
                        <h4 class="title">Free shipping</h4>
                        <p>All orders over Rs.1999</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="icon-box5">
                    <div class="icon"><i class="fas fa-redo-alt"></i></div>
                    <div class="content">
                        <h4 class="title">Free returns</h4>
                        <p>Free 7-day returns</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="icon-box5">
                    <div class="icon"><i class="fas fa-headset"></i></div>
                    <div class="content">
                        <h4 class="title">24/7 Support</h4>
                        <p>Dedicated support</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12 learts-mb-30">
                <div class="icon-box5">
                    <div class="icon"><i class="fas fa-gift"></i></div>
                    <div class="content">
                        <h4 class="title">Gift cards</h4>
                        <p>Code promotion</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Feature Section End -->

<!-- Banner & List Product Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row learts-mb-n30">

            <!-- Sale banner Start -->
            <div class="col-lg-4 col-12 learts-mb-30">
                <div class="sale-banner10">
                    <div class="inner">
                        <img src="frontend/images/banner/sale/sale-banner10-1.webp" alt="Sale Banner Image">
                        <div class="content">
                            <span class="sub-title">Superb quality</span>
                            <h2 class="title">GIFT IDEAS</h2>
                            <img src="frontend/images/banner/sale/sale-banner4-1.1.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale banner End -->

            <!-- Top rate Start -->
            <div class="col-lg-4 col-md-6 col-12 learts-mb-30">

                <div class="block-title">
                    <h3 class="title">Top rate</h3>
                </div>

                <div class="product-list-slider">

                    <div class="list-product">
                        <div class="thumbnail">
                            <a href="{{ url("/product-details")}}"><img src="frontend/images/product/list-product-7.webp" alt="List product"></a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Pottery Bowl Set</a></h6>
                            <span class="price">
                                <span class="old">Rs.1500</span>
                            <span class="new">Rs.1200</span>
                            </span>
                            <div class="ratting">
                                <span class="rate" style="width: 100%;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="list-product">
                        <div class="thumbnail">
                            <a href="{{ url("/product-details")}}"><img src="frontend/images/product/list-product-8.webp" alt="List product"></a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Electric Egg Blender</a></h6>
                            <span class="price">
                                Rs.999
                            </span>
                            <div class="ratting">
                                <span class="rate" style="width: 100%;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="list-product">
                        <div class="thumbnail">
                            <a href="{{ url("/product-details")}}"><img src="frontend/images/product/list-product-9.webp" alt="List product"></a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Hallmark Grandma Mug</a></h6>
                            <span class="price">
                                <span class="old">Rs.1500</span>
                            <span class="new">Rs.1200</span>
                            </span>
                            <div class="ratting">
                                <span class="rate" style="width: 100%;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="list-product">
                        <div class="thumbnail">
                            <a href="{{ url("/product-details")}}"><img src="frontend/images/product/list-product-10.webp" alt="List product"></a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Modern Camera</a></h6>
                            <span class="price">
                                Rs.5000
                            </span>
                            <div class="ratting">
                                <span class="rate" style="width: 100%;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="list-product">
                        <div class="thumbnail">
                            <a href="{{ url("/product-details")}}"><img src="frontend/images/product/list-product-11.webp" alt="List product"></a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Steel Watering Can</a></h6>
                            <span class="price">
                                <span class="old">Rs.450</span>
                            <span class="new">Rs.380</span>
                            </span>
                            <div class="ratting">
                                <span class="rate" style="width: 100%;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="list-product">
                        <div class="thumbnail">
                            <a href="{{ url("/product-details")}}"><img src="frontend/images/product/list-product-12.webp" alt="List product"></a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Minimalist Ceramic Pot</a></h6>
                            <span class="price">
                                Rs.1299
                            </span>
                            <div class="ratting">
                                <span class="rate" style="width: 100%;"></span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- Top rate End -->

            <!-- Sale items Start -->
            <div class="col-lg-4 col-md-6 col-12 learts-mb-30">

                <div class="block-title">
                    <h3 class="title">Sale items</h3>
                </div>

                <div class="product-list-slider">

                    <div class="list-product">
                        <div class="thumbnail">
                            <a href="{{ url("/product-details")}}"><img src="frontend/images/product/list-product-1.webp" alt="List product"></a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Boho Beard Mug</a></h6>
                            <span class="price">
                                <span class="old">Rs.1500</span>
                            <span class="new">Rs.1200</span>
                            </span>
                        </div>
                    </div>

                    <div class="list-product">
                        <div class="thumbnail">
                            <a href="{{ url("/product-details")}}"><img src="frontend/images/product/list-product-13.webp" alt="List product"></a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Antique Sewing Scissors</a></h6>
                            <span class="price">
                                <span class="old">Rs.300</span>
                            <span class="new">RRs.250</span>
                            </span>
                            <div class="ratting">
                                <span class="rate" style="width: 80%;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="list-product">
                        <div class="thumbnail">
                            <a href="{{ url("/product-details")}}"><img src="frontend/images/product/list-product-4.webp" alt="List product"></a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="{{ url("/product-details")}}">Pizza Plate Tray</a></h6>
                            <span class="price">
                                <span class="old">Rs.350</span>
                            <span class="new">Rs.299</span>
                            </span>
                            <div class="ratting">
                                <span class="rate" style="width: 80%;"></span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- Sale items End -->

        </div>
    </div>
</div>
<!-- Banner & List Product Section End -->

<!-- Separator -->
<div class="section">
    <div class="container">
        <hr class="m-0">
    </div>
</div>
<!-- Separator -->

<!-- Brands Section Start -->
<div class="section section-padding">
    <div class="container">

        <div class="section-title2 text-md-left text-center row justify-content-between align-items-center">
            <div class="col-md-auto col-12">
                <!-- Section Title Start -->
                <h2 class="title title-icon-right">Shop by brands</h2>
                <!-- Section Title End -->
            </div>
            <div class="col-md-auto d-none d-md-block mt-4 mt-md-0">
                <a href="#" class="btn btn-light btn-hover-black">view all</a>
            </div>
        </div>

        <div class="row align-items-center row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 learts-mb-n50">

            <div class="col learts-mb-50">
                <div class="brand-item">
                    <a href="#"><img src="frontend/images/brands/brand-1.webp" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col learts-mb-50">
                <div class="brand-item">
                    <a href="#"><img src="frontend/images/brands/brand-2.webp" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col learts-mb-50">
                <div class="brand-item">
                    <a href="#"><img src="frontend/images/brands/brand-3.webp" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col learts-mb-50">
                <div class="brand-item">
                    <a href="#"><img src="frontend/images/brands/brand-4.webp" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col learts-mb-50">
                <div class="brand-item">
                    <a href="#"><img src="frontend/images/brands/brand-5.webp" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col learts-mb-50">
                <div class="brand-item">
                    <a href="#"><img src="frontend/images/brands/brand-6.webp" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col learts-mb-50">
                <div class="brand-item">
                    <a href="#"><img src="frontend/images/brands/brand-7.webp" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col learts-mb-50">
                <div class="brand-item">
                    <a href="#"><img src="frontend/images/brands/brand-8.webp" alt="Brands Image"></a>
                </div>
            </div>

        </div>

        <div class="row d-md-none learts-mt-50">
            <div class="col text-center">
                <a href="#" class="btn btn-light btn-hover-black">view all</a>
            </div>
        </div>

    </div>
</div>
<!-- Brands Section End -->

<!-- Testimonials Section Start -->
<div class="section section-fluid">
    <div class="container">
        <div class="section-padding" data-bg-image="frontend/images/bg/bg-1.webp">

            <div class="container">
                <div class="testimonial-slider">
                    <div class="col">
                        <div class="testimonial2">
                            <div class="author">
                                <img src="frontend/images/testimonial/testimonial-1.webp" alt="">
                                <div class="content">
                                    <p>"The handmade wall art I purchased is a masterpiece. You can tell it’s made with care and creativity. Thank you, Craftifyed!"</p>
                                    <h6 class="name">Anas</h6>
                                    <span class="title">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial2">
                            <div class="author">
                                <img src="frontend/images/testimonial/testimonial-2.webp" alt="">
                                <div class="content">
                                    <p>"Beautiful products that add a personal touch to any home. I’ll definitely be ordering again!"</p>
                                    <h6 class="name">Ali</h6>
                                    <span class="title">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial2">
                            <div class="author">
                                <img src="frontend/images/testimonial/testimonial-3.webp" alt="">
                                <div class="content">
                            <p>Craftifyed’s customer service is amazing! They helped me choose the perfect wall art for my home. Highly recommended!</p>
                                    <h6 class="name">Faizan</h6>
                                    <span class="title">Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="testimonial2">
                            <p>Absolutely love the handcrafted vase I ordered! The quality is top-notch, and it looks stunning in my living room.</p>
                            <div class="author">
                                <img src="frontend/images/testimonial/testimonial-4.webp" alt="">
                                <div class="content">
                                    <h6 class="name">Saad Ramey</h6>
                                    <span class="title">Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Testimonials Section End -->

<!-- Blog Section Start -->
<div class="section section-padding">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h3 class="sub-title">Blog updates</h3>
            <h2 class="title title-icon-both">From our blogs</h2>
        </div>
        <!-- Section Title End -->

        <div class="blog-carousel">

            <div class="col">
                <div class="blog">
                    <div class="image">
                        <a href="{{ url("/blog")}}"><img src="frontend/images/blog/s370/blog-1.webp" alt="Blog Image"></a>
                    </div>
                    <div class="content">
                        <ul class="meta">
                            <li><i class="far fa-calendar"></i><a href="#">November 22, 2024</a></li>
                            <li><i class="far fa-eye"></i> 201 views</li>
                        </ul>
                        <h5 class="title"><a href="{{ url("/blog")}}">Start a Kickass Online Blog</a></h5>
                        <div class="desc">
                            <p> Behind handcrafted home decor that add a touch of elegance to every room.</p>
                        </div>
                        <a href="{{ url("/blog")}}" class="link">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="blog">
                    <div class="image">
                        <a href="{{ url("/blog")}}"><img src="frontend/images/blog/s370/blog-2.webp" alt="Blog Image"></a>
                    </div>
                    <div class="content">
                        <ul class="meta">
                            <li><i class="far fa-calendar"></i><a href="#">November22, 2024</a></li>
                            <li><i class="far fa-eye"></i> 158 views</li>
                        </ul>
                        <h5 class="title"><a href="{{ url("/blog")}}">Tile Tray with Brass Handles</a></h5>
                        <div class="desc">
                            <p>Eco-friendly crafts that are stylish, sustainable, and perfect for modern homes.

                            </p>
                        </div>
                        <a href="{{ url("/blog")}}" class="link">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="blog">
                    <div class="image">
                        <a href="{{ url("/blog")}}"><img src="frontend/images/blog/s370/blog-3.webp" alt="Blog Image"></a>
                    </div>
                    <div class="content">
                        <ul class="meta">
                            <li><i class="far fa-calendar"></i><a href="#">November22, 2024</a></li>
                            <li><i class="far fa-eye"></i> 119 views</li>
                        </ul>
                        <h5 class="title"><a href="{{ url("/blog")}}">Dining Table Chairs Makeover</a></h5>
                        <div class="desc">
                            <p>A touch of elegance to your dining or coffee table with our handcrafted tabletop accessories. Perfect for hosting or everyday use.</p>
                        </div>
                        <a href="{{ url("/blog")}}" class="link">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="blog">
                    <div class="image">
                        <a href="{{ url("/blog")}}"><img src="frontend/images/blog/s370/blog-4.webp" alt="Blog Image"></a>
                    </div>
                    <div class="content">
                        <ul class="meta">
                            <li><i class="far fa-calendar"></i><a href="#">December20, 2024</a></li>
                            <li><i class="far fa-eye"></i> 156 views</li>
                        </ul>
                        <h5 class="title"><a href="{{ url("/blog")}}">Kanza</a></h5>
                        <div class="desc">
                            <p>"Craftifyed makes finding unique home decor so easy. 5 stars all the way!"</p>
                        </div>
                        <a href="{{ url("/blog")}}" class="link">Read More</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Blog Section End -->

<!-- Subscribe Section Start -->
<div class="section learts-pt-60 learts-pb-60" data-bg-image="frontend/images/bg/bg-3.webp">
    <div class="container">
        <div class="row align-items-center learts-mb-n30">

            <div class="col-lg-5 learts-mb-30">
                <!-- Section Title Start -->
                <div class="section-title text-center mb-0">
                    <h3 class="sub-title">Stay connected <br> with us</h3>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-7 learts-mb-30">
                <span class="d-block h4 text-heading learts-mb-10 text-center text-lg-start">Subscribe to our newsletter.</span>
                <form id="mc-form" class="mc-form widget-subscibe m-lg-0">
                    <input id="mc-email" autocomplete="off" type="email" placeholder="Enter your e-mail address">
                    <button id="mc-submit" class="btn btn-dark">subscibe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe Section End -->
@endsection
