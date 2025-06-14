@extends('frontend.layout.main')
@section('title', 'Motorized Tricycle')
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
                        <li class="breadcrumb-item active">Motorized Tricycle</li>
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
        <div class="row learts-mb-n40">

            <!-- Product Images Start -->
            <div class="col-lg-6 col-12 learts-mb-40">
                <div class="product-images">
                    <button class="product-gallery-popup hintT-left" data-hint="Click to enlarge" data-images='[
                        {"src": "frontend/images/product/single/7/product-zoom-1.webp", "w": 700, "h": 1100},
                        {"src": "frontend/images/product/single/7/product-zoom-2.webp", "w": 700, "h": 1100},
                        {"src": "frontend/images/product/single/7/product-zoom-3.webp", "w": 700, "h": 1100},
                        {"src": "frontend/images/product/single/7/product-zoom-1.webp", "w": 700, "h": 1100}
                    ]'><i class="fas fa-expand"></i></button>
                    <a href="#product-360-viewer" data-bs-toggle="modal" class="toggle-360 hintT-left" data-hint="360 product"><img src="frontend/images/icons/360.webp" alt=""></a>
                    <div class="product-gallery-slider">
                        <div class="product-zoom" data-image="frontend/images/product/single/7/product-zoom-1.webp">
                            <img src="frontend/images/product/single/7/product-1.webp" alt="">
                        </div>
                        <div class="product-zoom" data-image="frontend/images/product/single/7/product-zoom-2.webp">
                            <img src="frontend/images/product/single/7/product-2.webp" alt="">
                        </div>
                        <div class="product-zoom" data-image="frontend/images/product/single/7/product-zoom-3.webp">
                            <img src="frontend/images/product/single/7/product-3.webp" alt="">
                        </div>
                        <div class="product-zoom" data-image="frontend/images/product/single/7/product-zoom-1.webp">
                            <img src="frontend/images/product/single/7/product-1.webp" alt="">
                        </div>
                    </div>
                    <div class="product-thumb-slider">
                        <div class="item">
                            <img src="frontend/images/product/single/7/product-thumb-1.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="frontend/images/product/single/7/product-thumb-2.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="frontend/images/product/single/7/product-thumb-3.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="frontend/images/product/single/7/product-thumb-1.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="product-360-viewer">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="cd-product-viewer-wrapper" data-frame="16" data-friction="0.33">
                                    <button class="close" data-bs-dismiss="modal">&times;</button>
                                    <figure class="product-viewer">
                                        <img src="frontend/images/product/single/7/frame-review.webp" alt="Product Preview">
                                        <div class="product-sprite" data-image="frontend/images/product/single/7/frame-total.webp"></div>
                                    </figure>

                                    <div class="cd-product-viewer-handle">
                                        <span class="fill"></span>
                                        <span class="handle">Handle</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Images End -->

            <!-- Product Summery Start -->
            <div class="col-lg-6 col-12 learts-mb-40">
                <div class="product-summery">
                    <div class="product-nav">
                        <a href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                    <div class="product-ratings">
                        <span class="star-rating">
                            <span class="rating-active" style="width: 100%;">ratings</span>
                        </span>
                        <a href="#reviews" class="review-link">(<span class="count">3</span> customer reviews)</a>
                    </div>
                    <h3 class="product-title">Motorized Tricycle</h3>
                    <div class="product-price">RS.1250</div>
                    <div class="product-description">
                        <p>Equipped with a high-performance motor that ensures smooth acceleration and optimal speed for city and off-road journeys.</p>
                        <p>Energy-efficient motor reduces emissions, promoting an environmentally friendly alternative to traditional vehicles.</p>
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
                            <a href="#"><img src="frontend/images/brands/brand-4.webp" alt=""></a>
                            <a href="#"><img src="frontend/images/brands/brand-6.webp" alt=""></a>
                        </div>
                    </div>
                    <div class="product-meta">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="label"><span>SKU</span></td>
                                    <td class="value">04042192</td>
                                </tr>
                                <tr>
                                    <td class="label"><span>Category</span></td>
                                    <td class="value">
                                        <ul class="product-category">
                                            <li><a href="#">Gift ideas</a></li>
                                            <li><a href="#">Home Decors</a></li>
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
                                            <li><a href="#">learts</a></li>
                                            <li><a href="#">mug</a></li>
                                            <li><a href="#">product</a></li>
                                            <li><a href="#">learts</a></li>
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
            <li><a data-bs-toggle="tab" href="#tab-reviews">Reviews (3)</a></li>
        </ul>
        <div class="tab-content product-infor-tab-content">
            <div class="tab-pane fade show active" id="tab-description">
                <div class="row">
                    <div class="col-lg-10 col-12 mx-auto">
                        <p>Constructed with a robust steel frame, this tricycle is built to withstand heavy loads while ensuring long-lasting durability.</p>
                        <p>A generously sized rear compartment, perfect for carrying groceries, tools, or other goods.</p>
                        <p>Comfortable seating and easy-to-use controls make every ride a pleasure.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-pwb_tab">
                <div class="row learts-mb-n30">
                    <div class="col-12 learts-mb-30">
                        <div class="row learts-mb-n10">
                            <div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="frontend/images/brands/brand-4.webp" alt=""></div>
                            <div class="col learts-mb-10">
                                <p>Say goodbye to the hassle of traditional transportation with the innovative Motorized Tricycle. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 learts-mb-30">
                        <div class="row learts-mb-n10">
                            <div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="frontend/images/brands/brand-6.webp" alt=""></div>
                            <div class="col learts-mb-10">
                                <p>The powerful motor provides impressive performance, while the spacious design accommodates both passengers and cargo with ease. </p>
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
                    <span class="title">3 reviews for Motorized Tricycle</span>
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
                                        <h5 class="title">Aina </h5>
                                        <span class="date">November 27, 2024</span>
                                    </div>
                                    <p>"This tricycle is the perfect solution for my daily commute. It’s comfortable to ride, easy to handle, and has excellent battery life. It’s worth every penny!"</p>
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
                                        <h5 class="title">M Jamil</h5>
                                        <span class="date">November 27, 2024</span>
                                    </div>
                                    <p>The build quality is impressive, and the motor is powerful. Couldn’t be happier!</p>
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
                                        <h5 class="title">Inshrah </h5>
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
