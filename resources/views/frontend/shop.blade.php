@extends('frontend.layout.main')
@section('title', 'Shop')
@section('main-container')

<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="frontend/images/shop/shop.jpg">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-title">
                    <h1 class="title">Shop</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->


<!-- Shop Products Section Start -->
<div class="section section-padding pt-0">

    <!-- Shop Toolbar Start -->
    <div class="shop-toolbar border-bottom">
        <div class="container">
            <div class="row learts-mb-n20">

                <!-- Isotop Filter Start -->
                <div class="col-md col-12 align-self-center learts-mb-20">
                    <div class="isotope-filter shop-product-filter" data-target="#shop-products">
                        <button class="active" data-filter="*">all</button>
                        <button data-filter=".featured">Hot Products</button>
                        <button data-filter=".new">New Products</button>
                        <button data-filter=".sales">Sales Products</button>
                    </div>
                </div>
                <!-- Isotop Filter End -->

                <div class="col-md-auto col-12 learts-mb-20">
                    <ul class="shop-toolbar-controls">

                        <li>
                            <div class="product-sorting">
                                <select class="nice-select">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="product-column-toggle d-none d-xl-flex">
                                <button class="toggle active hintT-top" data-hint="5 Column" data-column="5"><i class="ti-layout-grid4-alt"></i></button>
                                <button class="toggle hintT-top" data-hint="4 Column" data-column="4"><i class="ti-layout-grid3-alt"></i></button>
                                <button class="toggle hintT-top" data-hint="3 Column" data-column="3"><i class="ti-layout-grid2-alt"></i></button>
                            </div>
                        </li>
                        <li>
                            <a class="product-filter-toggle" href="#product-filter">Filters</a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- Shop Toolbar End -->

    <!-- Product Filter Start -->
    <div id="product-filter" class="product-filter bg-light">
        <div class="container">
            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1 learts-mb-n30">

                <!-- Sort by Start -->
                <div class="col learts-mb-30">
                    <h3 class="widget-title product-filter-widget-title">Sort by</h3>
                    <ul class="widget-list product-filter-widget customScroll">
                        <li><a href="#">Popularity</a></li>
                        <li><a href="#">Average rating</a></li>
                        <li><a href="#">Newness</a></li>
                        <li><a href="#">Price: low to high</a></li>
                        <li><a href="#">Price: high to low</a></li>
                    </ul>
                </div>
                <!-- Sort by End -->

                <!-- Price filter Start -->
                <div class="col learts-mb-30">
                    <h3 class="widget-title product-filter-widget-title">Price filter</h3>
                    <ul class="widget-list product-filter-widget customScroll">
                        <li> <a href="#">All</a></li>
                        <li> <a href="#"><span class="amount"><span class="cur-symbol">Rs.</span>0.00</span> - <span class="amount"><span class="cur-symbol">Rs.</span>899</span></a></li>
                        <li> <a href="#"><span class="amount"><span class="cur-symbol">Rs.</span>899</span> - <span class="amount"><span class="cur-symbol">Rs.</span>1499</span></a></li>
                        <li> <a href="#"><span class="amount"><span class="cur-symbol">Rs.</span>1499</span> - <span class="amount"><span class="cur-symbol">Rs.</span>2500</span></a></li>
                        <li> <a href="#"><span class="amount"><span class="cur-symbol">Rs.</span>2500</span> - <span class="amount"><span class="cur-symbol">Rs.</span>3599</span></a></li>
                        <li> <a href="#"><span class="amount"><span class="cur-symbol">Rs.</span>3599</span> +</a></li>
                    </ul>
                </div>
                <!-- Price filter End -->

                <!-- Categories Start -->
                <div class="col learts-mb-30">
                    <h3 class="widget-title product-filter-widget-title">Categories</h3>
                    <ul class="widget-list product-filter-widget customScroll">
                        <li><a href="#">Gift ideas</a> <span class="count">16</span></li>
                        <li><a href="#">Home Decor</a> <span class="count">16</span></li>
                        <li><a href="#">Kids &amp; Babies</a> <span class="count">6</span></li>
                        <li><a href="#">Kitchen</a> <span class="count">15</span></li>
                        <li><a href="#">Kniting &amp; Sewing</a> <span class="count">4</span></li>
                        <li><a href="#">Pots</a> <span class="count">4</span></li>
                        <li><a href="#">Toys</a> <span class="count">6</span></li>
                    </ul>
                </div>
                <!-- Categories End -->

                <!-- Filters by colors Start -->
                <div class="col learts-mb-30">
                    <h3 class="widget-title product-filter-widget-title">Filters by colors</h3>
                    <ul class="widget-colors product-filter-widget customScroll">
                        <li><a href="#" class="hintT-top" data-hint="Black"><span data-bg-color="#000000">Black</span></a></li>
                        <li><a href="#" class="hintT-top" data-hint="White"><span data-bg-color="#FFFFFF">White</span></a></li>
                        <li><a href="#" class="hintT-top" data-hint="Dark Red"><span data-bg-color="#b2483c">Dark Red</span></a></li>
                        <li><a href="#" class="hintT-top" data-hint="Flaxen"><span data-bg-color="#d5b85a">Flaxen</span></a></li>
                        <li><a href="#" class="hintT-top" data-hint="Pine"><span data-bg-color="#01796f">Pine</span></a></li>
                        <li><a href="#" class="hintT-top" data-hint="Tortilla"><span data-bg-color="#997950">Tortilla</span></a></li>
                    </ul>
                </div>
                <!-- Filters by colors End -->

                <!-- Brands Start -->
                <div class="col learts-mb-30">
                    <h3 class="widget-title product-filter-widget-title">Brands</h3>
                    <ul class="widget-list product-filter-widget customScroll">
                        <li><a href="#">Alexander</a> <span class="count">(2)</span></li>
                        <li><a href="#">Carmella</a> <span class="count">(4)</span></li>
                        <li><a href="#">Danielle</a> <span class="count">(7)</span></li>
                        <li><a href="#">Diana Day</a> <span class="count">(13)</span></li>
                        <li><a href="#">Emilia</a> <span class="count">(2)</span></li>
                        <li><a href="#">Gasmine</a> <span class="count">(15)</span></li>
                        <li><a href="#">Jack &amp; Ella</a> <span class="count">(7)</span></li>
                        <li><a href="#">Juliette</a> <span class="count">(11)</span></li>
                    </ul>
                </div>
                <!-- Brands End -->

            </div>
        </div>
    </div>
    <!-- Product Filter End -->

    <div class="section learts-mt-70">
        <div class="container">
            <!-- Products Start -->
            <div id="shop-products" class="products isotope-grid row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                <div class="grid-sizer col-1"></div>

                <div class="grid-item col featured">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <img src="frontend/images/product/s328/product-17.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-17-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">3D Attractive Pot</a></h6>
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

                <div class="grid-item col new">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <span class="product-badges">
                                    <span class="outofstock"><i class="far fa-frown"></i></span>
                                </span>
                                <img src="frontend/images/product/s328/product-14.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-14-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">Abstract Folded Pots</a></h6>
                            <span class="price">
                                Rs.599 - Rs.999
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col featured">
                    <div class="product">
                        <div class="product-thumb">
                            <span class="product-badges">
                                <span class="hot">hot</span>
                            </span>
                            <a href="{{ url('/product-details') }}" class="image">
                                <img src="frontend/images/product/s328/product-30.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-30-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">Adhesive Tape Dispenser</a></h6>
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

                <div class="grid-item col featured">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <img src="frontend/images/product/s328/product-9.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-9-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">Aluminum Equestrian</a></h6>
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

                <div class="grid-item col sales featured">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <span class="product-badges">
                                    <span class="onsale">-20%</span>
                                </span>
                                <img src="frontend/images/product/s328/product-25.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-25-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">Antique Sewing Scissors</a></h6>
                            <span class="price">
                                <span class="old">Rs.199</span>
                            <span class="new">Rs.150</span>
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col sales">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <span class="product-badges">
                                    <span class="onsale">-13%</span>
                                </span>
                                <img src="frontend/images/product/s328/product-1.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-1-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">Boho Beard Mug</a></h6>
                            <span class="price">
                                <span class="old">Rs.4500</span>
                            <span class="new">Rs.3900</span>
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col new">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <img src="frontend/images/product/s328/product-31.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">Bouncer Measuring Cup</a></h6>
                            <span class="price">
                                Rs.1499
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col new">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <img src="frontend/images/product/s328/product-15.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-15-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">Brush & Dustpan Set</a></h6>
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

                <div class="grid-item col featured">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <img src="frontend/images/product/s328/product-12.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-12-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">Cape Cottage Playhouse</a></h6>
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

                <div class="grid-item col new">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <span class="product-badges">
                                    <span class="outofstock"><i class="far fa-frown"></i></span>
                                </span>
                                <img src="frontend/images/product/s328/product-32.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-32-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            <div class="product-options">
                                <ul class="colors">
                                    <li style="background-color: #000000;">color one</li>
                                    <li style="background-color: #ffffff;">color two</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">Cleaning Dustpan & Brush</a></h6>
                            <span class="price">
                                Rs.350 - Rs.599
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col featured">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <img src="frontend/images/product/s328/product-6.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-6-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">Clear Silicate Teapot</a></h6>
                            <span class="price">
                                Rs.1150
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col sales new">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <span class="product-badges">
                                    <span class="onsale">-13%</span>
                                </span>
                                <img src="frontend/images/product/s328/product-19.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">Country Feast Set</a></h6>
                            <span class="price">
                                <span class="old">Rs.4500</span>
                            <span class="new">Rs.3900</span>
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col new">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <span class="product-badges">
                                    <span class="outofstock"><i class="far fa-frown"></i></span>
                                <span class="hot">hot</span>
                                </span>
                                <img src="frontend/images/product/s328/product-8.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-8-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
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
                            <h6 class="title"><a href="{{ url('/product-details') }}">Decorative Christmas Fox</a></h6>
                            <span class="price">
                                Rs.599
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col featured">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <img src="frontend/images/product/s328/product-28.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-28-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">Digital Camera System</a></h6>
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

                <div class="grid-item col new">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="{{ url('/product-details') }}" class="image">
                                <img src="frontend/images/product/s328/product-11.webp" alt="Product Image">
                                <img class="image-hover " src="frontend/images/product/s328/product-11-hover.webp" alt="Product Image">
                            </a>
                            <a href="{{ url('/wishlist') }}" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <h6 class="title"><a href="{{ url('/product-details') }}">Electric Egg Blender</a></h6>
                            <span class="price">
                                Rs.1999
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
            <div class="text-center learts-mt-70">
                <a href="{{ url("/shopping-cart")}}" class="btn btn-dark btn-outline-hover-dark"><i class="ti-plus"></i> More</a>
            </div>
        </div>
    </div>

</div>
<!-- Shop Products Section End -->


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
                        <div class="product-price">Rs.380 – Rs.500</div>
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
