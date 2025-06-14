@extends('frontend.layout.main')
@section('title', 'Decore-Fox')
@section('main-container')
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="frontend/images/bg/page-title-1.webp">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-title">
                    <h1 class="title">Shop</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url("/")}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("/shop")}}">Products</a></li>
                        <li class="breadcrumb-item active">Decorative Fox</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->

<!-- Single Products Section Start -->
<div class="section section-fluid section-padding border-bottom">
    <div class="container">
        <div class="row learts-mb-n40">

            <!-- Product Images Start -->
            <div class="col-lg-6 col-12 learts-mb-40">
                <div class="product-images vertical">
                    <button class="product-gallery-popup hintT-left" data-hint="Click to enlarge" data-images='[
                                    {"src": "frontend/images/product/single/2/product-zoom-1.webp", "w": 810, "h": 1080},
                                    {"src": "frontend/images/product/single/2/product-zoom-2.webp", "w": 810, "h": 1080},
                                    {"src": "frontend/images/product/single/2/product-zoom-3.webp", "w": 810, "h": 1080},
                                    {"src": "frontend/images/product/single/2/product-zoom-4.webp", "w": 810, "h": 1080},
                                    {"src": "frontend/images/product/single/2/product-zoom-5.webp", "w": 810, "h": 1080}
                                ]'><i class="fas fa-expand"></i></button>
                    <div class="product-gallery-slider">
                        <div class="product-zoom" data-image="frontend/images/product/single/2/product-zoom-1.webp">
                            <img src="frontend/images/product/single/2/product-1.webp" alt="">
                        </div>
                        <div class="product-zoom" data-image="frontend/images/product/single/2/product-zoom-2.webp">
                            <img src="frontend/images/product/single/2/product-2.webp" alt="">
                        </div>
                        <div class="product-zoom" data-image="frontend/images/product/single/2/product-zoom-3.webp">
                            <img src="frontend/images/product/single/2/product-3.webp" alt="">
                        </div>
                        <div class="product-zoom" data-image="frontend/images/product/single/2/product-zoom-4.webp">
                            <img src="frontend/images/product/single/2/product-4.webp" alt="">
                        </div>
                        <div class="product-zoom" data-image="frontend/images/product/single/2/product-zoom-5.webp">
                            <img src="frontend/images/product/single/2/product-5.webp" alt="">
                        </div>
                    </div>
                    <div class="product-thumb-slider-vertical">
                        <div class="item">
                            <img src="frontend/images/product/single/2/product-thumb-1.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="frontend/images/product/single/2/product-thumb-2.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="frontend/images/product/single/2/product-thumb-3.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="frontend/images/product/single/2/product-thumb-4.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="frontend/images/product/single/2/product-thumb-5.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Images End -->

            <!-- Product Summery Start -->
            <div class="col-lg-6 col-12 learts-mb-40">
                <div class="product-summery product-summery-center">
                    <div class="product-nav">
                        <a href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                    <div class="product-ratings">
                        <span class="star-rating">
                            <span class="rating-active" style="width: 80%;">ratings</span>
                        </span>
                        <a href="#reviews" class="review-link">(<span class="count">2</span> customer reviews)</a>
                    </div>
                    <h3 class="product-title">Decorative Fox</h3>
                    <div class="product-price">Rs.1550</div>
                    <div class="product-description">
                        <p>From the Happy Moments Collection This adorable brown fox looking over his right shoulder would be a wonderful accent in any holiday decor. Features faux fur, burlap and canvas creating a unique, textured appearance. The feeling when touched is smooth and lovable.</p>
                        <p>Accented with a red plaid bow and a small pine spray and pine cone Dimensions: 8″H x 8″W x 3.75″D. Material(s): foam/fabric/plastic. Available colors: Red, Blue, Green, Yellow, Black, White, Grey and Pink. Gift wrapping is available for orders over $99 to the following states: Arizona, Pakistan, Lahore DC and Los Angeles.</p>
                    </div>
                    <div class="product-variations">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="label"><span>Color</span></td>
                                    <td class="value">
                                        <div class="product-colors">
                                            <a href="#" data-bg-color="#000000"></a>
                                            <a href="#" data-bg-color="#b2483c"></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label"><span>Size</span></td>
                                    <td class="value">
                                        <div class="product-sizes">
                                            <a href="#">Large</a>
                                            <a href="#">Medium</a>
                                            <a href="#">Small</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label"><span>Quantity</span></td>
                                    <td class="value">
                                        <div class="product-quantity">
                                            <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                            <input type="text" class="input-qty" value="1">
                                            <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="product-buttons">
                        <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark hintT-top" data-hint="Add to Wishlist"><i class="far fa-heart"></i></a>
                        <a href="#" class="btn btn-dark btn-outline-hover-dark"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                    </div>
                    <div class="product-brands">
                        <span class="title">Brands</span>
                        <div class="brands">
                            <a href="#"><img src="frontend/images/brands/brand-5.webp" alt=""></a>
                            <a href="#"><img src="frontend/images/brands/brand-7.webp" alt=""></a>
                            <a href="#"><img src="frontend/images/brands/brand-8.webp" alt=""></a>
                        </div>
                    </div>
                    <div class="product-meta">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="label"><span>SKU</span></td>
                                    <td class="value">040423</td>
                                </tr>
                                <tr>
                                    <td class="label"><span>Category</span></td>
                                    <td class="value">
                                        <ul class="product-category">
                                            <li><a href="#">Gift ideas</a></li>
                                            <li><a href="#">Home Decor</a></li>
                                            <li><a href="#">Kids & Babies</a></li>
                                            <li><a href="#">Toys</a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label"><span>Tags</span></td>
                                    <td class="value">
                                        <ul class="product-tags">
                                            <li><a href="#">handmade</a></li>
                                            <li><a href="#">home-craftifyed</a></li>
                                            <li><a href="#">mug</a></li>
                                            <li><a href="#">product</a></li>
                                            <li><a href="#">home-craftifyed</a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label"><span>Share on</span></td>
                                    <td class="va">
                                        <div class="product-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="far fa-envelope"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Product Summery End -->

        </div>
    </div>

</div>
<!-- Single Products Section End -->

<!-- Single Products Infomation Section Start -->
<div class="section section-padding border-bottom">
    <div class="container">

        <ul class="nav product-info-tab-list">
            <li><a class="active" data-bs-toggle="tab" href="#tab-description">Description</a></li>
            <li><a data-bs-toggle="tab" href="#tab-pwb_tab">Brand</a></li>
            <li><a data-bs-toggle="tab" href="#tab-additional_information">Additional information</a></li>
            <li><a data-bs-toggle="tab" href="#tab-reviews">Reviews (2)</a></li>
        </ul>
        <div class="tab-content product-infor-tab-content">
            <div class="tab-pane fade show active" id="tab-description">
                <div class="row">
                    <div class="col-lg-10 col-12 mx-auto">
                        <p>From the Holiday Moments Collection This adorable brown fox looking over his right shoulder would be a wonderful accent in any holiday decor. Features faux fur, burlap and canvas creating a unique, textured appearance. Accented with a red plaid bow and a small pine spray and pine cone Dimensions: 8″H x 8″W x 3.75″D. Material(s): foam/fabric/plastic.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-pwb_tab">
                <div class="row learts-mb-n30">
                    <div class="col-12 learts-mb-30">
                        <div class="row learts-mb-n10">
                            <div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="frontend/images/brands/brand-5.webp" alt=""></div>
                        </div>
                    </div>
                    <div class="col-12 learts-mb-30">
                        <div class="row learts-mb-n10">
                            <div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="frontend/images/brands/brand-7.webp" alt=""></div>
                        </div>
                    </div>
                    <div class="col-12 learts-mb-30">
                        <div class="row learts-mb-n10">
                            <div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="frontend/images/brands/brand-8.webp" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-additional_information">
                <div class="row">
                    <div class="col-lg-8 col-md-10 col-12 mx-auto">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Color</td>
                                        <td>Black, Dark Red</td>
                                    </tr>
                                    <tr>
                                        <td>Size</td>
                                        <td>Large, Medium, Small</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-reviews">
                <div class="product-review-wrapper">
                    <span class="title">2 reviews for Decorative Fox</span>
                    <ul class="product-review-list">
                        <li>
                            <div class="product-review">
                                <div class="thumb"><img src="frontend/images/review/review-2.webp" alt=""></div>
                                <div class="content">
                                    <div class="ratings">
                                        <span class="star-rating">
                                            <span class="rating-active" style="width: 100%;">ratings</span>
                                        </span>
                                    </div>
                                    <div class="meta">
                                        <h5 class="title">Maryam</h5>
                                        <span class="date">November 27, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-review">
                                <div class="thumb"><img src="frontend/images/review/review-1.webp" alt=""></div>
                                <div class="content">
                                    <div class="ratings">
                                        <span class="star-rating">
                                            <span class="rating-active" style="width: 80%;">ratings</span>
                                        </span>
                                    </div>
                                    <div class="meta">
                                        <h5 class="title">Khaqan</h5>
                                        <span class="date">November 27, 2024</span>
                                    </div>
                                    <p>Wonderful quality, and an awesome design !</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <span class="title">Add a review</span>
                    <div class="review-form">
                        <p class="note">Your email address will not be published. Required fields are marked *</p>
                        <form action="#">
                            <div class="row learts-mb-n30">
                                <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Name *"></div>
                                <div class="col-md-6 col-12 learts-mb-30"><input type="email" placeholder="Email *"></div>
                                <div class="col-12 learts-mb-10">
                                    <div class="form-rating">
                                        <span class="title">Your rating</span>
                                        <span class="rating"><span class="star"></span></span>
                                    </div>
                                </div>
                                <div class="col-12 learts-mb-30"><textarea placeholder="Your Review *"></textarea></div>
                                <div class="col-12 text-center learts-mb-30"><button class="btn btn-dark btn-outline-hover-dark">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Single Products Infomation Section End -->

<!-- Recommended Products Section Start -->
<div class="section section-padding">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h2 class="title">You Might Also Like</h2>
        </div>
        <!-- Section Title End -->

        <!-- Products Start -->
        <div class="product-carousel">

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
                            <span class="old">Rs.1250</span>
                        <span class="new">Rs.1150</span>
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
                            Rs.2500
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
                            Rs.650
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
                            <img src="frontend/images/product/s270/product-4.webp" alt="Product Image">
                            <img class="image-hover " src="frontend/images/product/s270/product-4-hover.webp" alt="Product Image">
                        </a>
                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="{{ url("/product-details")}}">Pizza Plate Tray</a></h6>
                        <span class="price">
                            <span class="old">Rs.350</span>
                        <span class="new">Rs.250</span>
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
                            Rs.1250
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
                            Rs.2199
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
                            Rs.2500
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
                        <h6 class="title"><a href="{{ url("/product-details")}}">Decorative Fox</a></h6>
                        <span class="price">
                            Rs.999
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
<!-- Recommended Products Section End -->

@endsection
