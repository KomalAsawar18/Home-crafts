@extends('frontend.layout.main')
@section('title', 'Walnut Cutting Board')
@section('main-container')
  <!-- Page Title/Header Start -->
  <div class="page-title-section section" data-bg-image="frontend/images/shop/shop.jpg">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-title">
                    <h1 class="title">Shop</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url("/")}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("/shop")}}">Products</a></li>
                        <li class="breadcrumb-item active">Walnut Cutting Board</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->
<!-- Single Products Section Start -->
<div class="section section-padding border-bottom">
    <div class="container">
        <div class="sticky-sidebar-container row learts-mb-n40">

            <!-- Product Images Start -->
            <div class="col-lg-6 col-12 learts-mb-40">
                <div class="product-images learts-mb-n10">
                    <span class="product-badges">
                        <span class="hot">hot</span>
                    </span>
                    <button class="product-gallery-popup hintT-left" data-hint="Click to enlarge" data-images='[
                        {"src": "frontend/images/product/single/3/product-zoom-1.webp", "w": 810, "h": 1080},
                        {"src": "frontend/images/product/single/3/product-zoom-2.webp", "w": 810, "h": 1080},
                        {"src": "frontend/images/product/single/3/product-zoom-3.webp", "w": 810, "h": 1080},
                        {"src": "frontend/images/product/single/3/product-zoom-4.webp", "w": 810, "h": 1080}
                    ]'><i class="fas fa-expand"></i></button>
                    <div class="product-zoom learts-mb-10" data-image="frontend/images/product/single/3/product-zoom-1.webp">
                        <img src="frontend/images/product/single/3/product-1.webp" alt="">
                    </div>
                    <div class="product-zoom learts-mb-10" data-image="frontend/images/product/single/3/product-zoom-2.webp">
                        <img src="frontend/images/product/single/3/product-2.webp" alt="">
                    </div>
                    <div class="product-zoom learts-mb-10" data-image="frontend/images/product/single/3/product-zoom-3.webp">
                        <img src="frontend/images/product/single/3/product-3.webp" alt="">
                    </div>
                    <div class="product-zoom learts-mb-10" data-image="frontend/images/product/single/3/product-zoom-4.webp">
                        <img src="frontend/images/product/single/3/product-4.webp" alt="">
                    </div>
                </div>
            </div>
            <!-- Product Images End -->

            <!-- Product Summery Start -->
            <div class="col-lg-6 col-12 learts-mb-40">
                <div class="product-summery sticky-sidebar">
                    <div class="sticky-sidebar-inner">
                        <div class="product-nav">
                            <a href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                        <div class="product-ratings">
                            <span class="star-rating">
                                <span class="rating-active" style="width: 100%;">ratings</span>
                            </span>
                            <a href="#reviews" class="review-link">(<span class="count">2</span> customer reviews)</a>
                        </div>
                        <h3 class="product-title">Walnut Cutting Board</h3>
                        <div class="product-price">Rs.199</div>
                        <div class="product-description">
                            <p> Made of high temperature fired, it is a new environmentally-friendly lead-free non-toxic furniture porcelain.</p>
                        </div>
                        <div class="product-variations">
                            <table>
                                <tbody>
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
                                <a href="#"><img src="frontend/images/brands/brand-1.webp" alt=""></a>
                                <a href="#"><img src="frontend/images/brands/brand-6.webp" alt=""></a>
                            </div>
                        </div>
                        <div class="product-meta">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="label"><span>SKU</span></td>
                                        <td class="value">040404</td>
                                    </tr>
                                    <tr>
                                        <td class="label"><span>Category</span></td>
                                        <td class="value">
                                            <ul class="product-category">
                                                <li><a href="#">Kitchen</a></li>
                                                <li><a href="#">Kniting & Sewing</a></li>
                                                <li><a href="#">Pots</a></li>
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
            <li><a data-bs-toggle="tab" href="#tab-reviews">Reviews (3)</a></li>
        </ul>
        <div class="tab-content product-infor-tab-content">
            <div class="tab-pane fade show active" id="tab-description">
                <div class="row">
                    <div class="col-lg-10 col-12 mx-auto">
                        <p>The deep, warm tones and intricate grain patterns of walnut wood add a touch of sophistication to any room.</p>
                        <p>Built to withstand the test of time, walnut furniture is resistant to wear and retains its elegance for years.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-pwb_tab">
                <div class="row learts-mb-n30">
                    <div class="col-12 learts-mb-30">
                        <div class="row learts-mb-n10">
                            <div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="frontend/images/brands/brand-1.webp" alt=""></div>
                            <div class="col learts-mb-10">
                                <p> Sourced responsibly and crafted by skilled artisans, ensuring eco-friendly and high-quality products.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 learts-mb-30">
                        <div class="row learts-mb-n10">
                            <div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="frontend/images/brands/brand-6.webp" alt=""></div>
                            <div class="col learts-mb-10">
                                <p>Complements a wide range of interior styles, from contemporary to traditional.</p>
                            </div>
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
                                        <td>Size</td>
                                        <td>Large, Medium, Small</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>Black, White</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-reviews">
                <div class="product-review-wrapper">
                    <span class="title">3 reviews for Walnut Cutting Board</span>
                    <ul class="product-review-list">
                        <li>
                            <div class="product-review">
                                <div class="thumb"><img src="frontend/images/review/review-1.webp" alt=""></div>
                                <div class="content">
                                    <div class="ratings">
                                        <span class="star-rating">
                                            <span class="rating-active" style="width: 100%;">ratings</span>
                                        </span>
                                    </div>
                                    <div class="meta">
                                        <h5 class="title">Arham</h5>
                                        <span class="date">November 27, 2024</span>
                                    </div>
                                    <p>Perfect for coffee tables!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-review">
                                <div class="thumb"><img src="frontend/images/review/review-2.webp" alt=""></div>
                                <div class="content">
                                    <div class="ratings">
                                        <span class="star-rating">
                                            <span class="rating-active" style="width: 80%;">ratings</span>
                                        </span>
                                    </div>
                                    <div class="meta">
                                        <h5 class="title">Rameen</h5>
                                        <span class="date">November 27, 2024</span>
                                    </div>
                                    <p>Unmatched level of class and functionality to my home.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-review">
                                <div class="thumb"><img src="frontend/images/review/review-3.webp" alt=""></div>
                                <div class="content">
                                    <div class="ratings">
                                        <span class="star-rating">
                                            <span class="rating-active" style="width: 60%;">ratings</span>
                                        </span>
                                    </div>
                                    <div class="meta">
                                        <h5 class="title">Ali Hassan</h5>
                                        <span class="date">November 27, 2024</span>
                                    </div>
                                    <p>Good Product!</p>
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
@endsection
