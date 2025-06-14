@extends('frontend.layout.main')
@section('title', 'Elements')
@section('main-container')


<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="frontend/images/product/productele.jpg">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-title">
                    <h1 class="title">Products</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url("/index")}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("/elements-products")}}">Elements</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->
<!-- Product Style One Section Start -->
<div class="section section-padding">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h2 class="title">Product Style 01</h2>
        </div>
        <!-- Section Title End -->

        <div class="product-carousel">
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
                            <span class="old">Rs.450</span>
                        <span class="new">RS.390</span>
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="{{ url("/shopping-cart")}}" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="{{ url("/motorcycle")}}" class="image">
                            <img src="frontend/images/product/s270/product-2.webp" alt="Product Image">
                            <img class="image-hover " src="frontend/images/product/s270/product-2-hover.webp" alt="Product Image">
                        </a>
                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product-info">
                        <h6 class="title"><a href="{{ url("/motorcycle")}}">Motorized Tricycle</a></h6>
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
                            Rs.1500
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
                            <span class="old">Rs.1800</span>
                        <span class="new">Rs.2200</span>
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
                            Rs.2800
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

    </div>
</div>
<!-- Product Style One Section End -->

<!-- Product Style Two Section Start -->
<div class="section section-padding pt-0">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h2 class="title">Product Style 02</h2>
        </div>
        <!-- Section Title End -->

        <div class="product-carousel">
            <div class="col">
                <div class="product">
                    <div class="product-thumb">
                        <a href="{{ url("/product-details")}}" class="image">
                            <span class="product-badges">
                                <span class="onsale">-13%</span>
                            </span>
                            <img src="frontend/images/product/s270/product-7.webp" alt="Product Image">
                            <img class="image-hover " src="frontend/images/product/s270/product-7-hover.webp" alt="Product Image">
                        </a>
                        <a href="{{ url("/wishlist")}}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product2-info">
                        <h6 class="title"><a href="{{ url("/product-details")}}">Lucky Wooden Elephant</a></h6>
                        <span class="price">
                            Rs.3000
                        </span>
                    </div>
                    <div class="product2-buttons">
                        <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
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
                    <div class="product2-info">
                        <h6 class="title"><a href="{{ url("/product-details")}}">Motorized Tricycle</a></h6>
                        <span class="price">
                            Rs.3000
                        </span>
                    </div>
                    <div class="product2-buttons">
                        <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
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
                    <div class="product2-info">
                        <h6 class="title"><a href="{{ url("/product-details")}}">Walnut Cutting Board</a></h6>
                        <span class="price">
                            Rs.5000
                        </span>
                    </div>
                    <div class="product2-buttons">
                        <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
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
                    <div class="product2-info">
                        <h6 class="title"><a href="{{ url("/product-details")}}">Pizza Plate Tray</a></h6>
                        <span class="price">
                            <span class="old">Rs.900</span>
                        <span class="new">Rs.800</span>
                        </span>
                    </div>
                    <div class="product2-buttons">
                        <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
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
                    </div>
                    <div class="product2-info">
                        <h6 class="title"><a href="{{ url("/product-details")}}">Minimalist Ceramic Pot</a></h6>
                        <span class="price">
                            Rs.3500
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
<!-- Product Style Two Section End -->

<!-- Product Style One With Ratting & Stock Section Start -->
<div class="section section-padding pt-0">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h2 class="title">Product with Ratting & Stock</h2>
        </div>
        <!-- Section Title End -->

        <div class="product-carousel">
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
                            <span class="old">Rs.1700</span>
                        <span class="new">Rs.1450</span>
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                        </div>
                        <div class="product-rating">
                            <span class="rating">
                                <span class="rating-active" style="width: 100%;">ratings</span>
                            </span>
                        </div>
                        <div class="product-stock-status">
                            <div class="bar">
                                <div class="progress" style="width: 84%;"></div>
                            </div>
                            <span class="sold">Sold: <span>8</span></span>
                            <span class="available">Available: <span>42</span></span>
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
                            Rs.3000
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                        </div>
                        <div class="product-rating">
                            <span class="rating">
                                <span class="rating-active" style="width: 100%;">ratings</span>
                            </span>
                        </div>
                        <div class="product-stock-status">
                            <div class="bar">
                                <div class="progress" style="width: 70%;"></div>
                            </div>
                            <span class="sold">Sold: <span>30</span></span>
                            <span class="available">Available: <span>70</span></span>
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
                            Rs.5000
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                        </div>
                        <div class="product-rating">
                            <span class="rating">
                                <span class="rating-active" style="width: 70%;">ratings</span>
                            </span>
                        </div>
                        <div class="product-stock-status">
                            <div class="bar">
                                <div class="progress" style="width: 83%;"></div>
                            </div>
                            <span class="sold">Sold: <span>5</span></span>
                            <span class="available">Available: <span>25</span></span>
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
                            <span class="old">Rs.650</span>
                        <span class="new">Rs.520</span>
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                        </div>
                        <div class="product-rating">
                            <span class="rating">
                                <span class="rating-active" style="width: 80%;">ratings</span>
                            </span>
                        </div>
                        <div class="product-stock-status">
                            <div class="bar">
                                <div class="progress" style="width: 88%;"></div>
                            </div>
                            <span class="sold">Sold: <span>3</span></span>
                            <span class="available">Available: <span>22</span></span>
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
                            Rs.5200
                        </span>
                        <div class="product-buttons">
                            <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                            <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                        </div>
                        <div class="product-rating">
                            <span class="rating">
                                <span class="rating-active" style="width: 100%;">ratings</span>
                            </span>
                        </div>
                        <div class="product-stock-status">
                            <div class="bar">
                                <div class="progress" style="width: 60%;"></div>
                            </div>
                            <span class="sold">Sold: <span>4</span></span>
                            <span class="available">Available: <span>6</span></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Product Style One With Ratting & Stock Section End -->


<!-- Modal -->
<div class="quickViewModal modal fade" id="quickViewModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="close" data-bs-dismiss="modal">&times;</button>
            <div class="row learts-mb-n30">

                <!-- Product Images Start -->
                <div class="col-lg-6 col-12 learts-mb-30">
                    <div class="product-images">
                        <div class="product-gallery-slider-quickview">
                            <div class="product-zoom" data-image="frontend/images/product/single/1/product-zoom-1.webp">
                                <img src="frontend/images/product/single/1/product-1.webp" alt="">
                            </div>
                            <div class="product-zoom" data-image="frontend/images/product/single/1/product-zoom-2.webp">
                                <img src="frontend/images/product/single/1/product-2.webp" alt="">
                            </div>
                            <div class="product-zoom" data-image="frontend/images/product/single/1/product-zoom-3.webp">
                                <img src="frontend/images/product/single/1/product-3.webp" alt="">
                            </div>
                            <div class="product-zoom" data-image="frontend/images/product/single/1/product-zoom-4.webp">
                                <img src="frontend/images/product/single/1/product-4.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Images End -->

                <!-- Product Summery Start -->
                <div class="col-lg-6 col-12 overflow-hidden position-relative learts-mb-30">
                    <div class="product-summery customScroll">
                        <div class="product-ratings">
                            <span class="star-rating">
                            <span class="rating-active" style="width: 100%;">ratings</span>
                            </span>
                            <a href="#reviews" class="review-link">(<span class="count">3</span> customer reviews)</a>
                        </div>
                        <h3 class="product-title">Cleaning Dustpan & Brush</h3>
                        <div class="product-price">Rs.250 – Rs.350</div>
                        <div class="product-description">
                            <p>Easy clip-on handle – Hold the brush and dustpan together for storage; the dustpan edge is serrated to allow easy scraping off the hair without entanglement. High-quality bristles – no burr damage, no scratches, thick and durable, comfortable to remove dust and smaller particles.</p>
                        </div>
                        <div class="product-variations">
                            <table>
                                <tbody>
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
                                        <td class="label"><span>Color</span></td>
                                        <td class="value">
                                            <div class="product-colors">
                                                <a href="#" data-bg-color="#000000"></a>
                                                <a href="#" data-bg-color="#ffffff"></a>
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
                            <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="far fa-heart"></i></a>
                            <a href="#" class="btn btn-dark btn-outline-hover-dark"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="fas fa-random"></i></a>
                        </div>
                        <div class="product-brands">
                            <span class="title">Brands</span>
                            <div class="brands">
                                <a href="#"><img src="frontend/images/brands/brand-3.webp" alt=""></a>
                                <a href="#"><img src="frontend/images/brands/brand-8.webp" alt=""></a>
                            </div>
                        </div>
                        <div class="product-meta mb-0">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="label"><span>SKU</span></td>
                                        <td class="value">0404019</td>
                                    </tr>
                                    <tr>
                                        <td class="label"><span>Category</span></td>
                                        <td class="value">
                                            <ul class="product-category">
                                                <li><a href="#">Kitchen</a></li>
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
</div>
@endsection
