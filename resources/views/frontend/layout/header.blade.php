<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | Home Craftifyed</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/images/about/browser.png') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/vendor/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/vendor/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/vendor/customFonts.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/ion.rangeSlider.min.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/photoswipe.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/photoswipe-default-skin.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/slick.css') }}" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/vendor/vendor.min.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/style.min.css') }}" />
</head>

<body>
    <!-- Topbar Section Start -->
    <div class="topbar-section section bg-primary2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-auto col-12">
                    <p class="text-white text-center text-md-left my-2">Free shipping for orders over $59 !</p>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="topbar-menu">
                        <ul>
                            <li><a href="#" class="text-white"><i class="fa fa-map-marker-alt"></i>Store
                                    Location</a></li>
                            <li><a href="#" class="text-white"><i class="fa fa-truck"></i>Order Status</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->
    <!-- Header Section Start -->
    <div class="header-section section bg-white d-none d-xl-block">
        <div class="container">
            <div class="row row-cols-lg-3 align-items-center">

                <!-- Header Language & Currency Start -->
                <div class="col">
                    <ul class="header-lan-curr">
                        <li><a href="#">English</a>
                            <ul class="curr-lan-sub-menu">
                                <li><a href="#">Français</a></li>
                                <li><a href="#">deutsch</a></li>
                            </ul>
                        </li>
                        <li><a href="#">USD</a>
                            <ul class="curr-lan-sub-menu">
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="col">
                    <div class="header-logo justify-content-center">
                        <a href="{{ url('/') }}"><img src="frontend/images/logo/1logo.png"
                                alt="home_craftifyed Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col">
                    <div class="header-tools justify-content-end">
                        <div class="header-login">
                            <a href="{{ url('/account') }}"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-search">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="header-wishlist">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span
                                    class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i
                                    class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>

        <!-- Site Menu Section Start -->
        <div class="site-menu-section section">
            <div class="container">
                <nav class="site-main-menu justify-content-center">
                    <ul>
                        <li class="has-parent"><a href="{{ url('/') }}"><span class="text">Home</span></a>
                        <li class="has-parent"><a href="{{ url('/about') }}"><span class="text">About</span></a>

                        </li>
                        <li class="has-parent"><a href="{{ url('/shop') }}"><span class="text">Shop</span></a>

                        </li>

                        <li class="has-parent"><a href="{{ url('/elements-products') }}"><span
                                    class="text">Elements</span></a>

                        </li>

                        <li class="has-parent"><a href="{{ url('/contact') }}"><span
                                    class="text">Contact</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Site Menu Section End -->

    </div>
    <!-- Header Section End -->

    <!-- Header Sticky Section Start -->
    <div class="sticky-header header-menu-center section bg-white d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="{{ url('/') }}"><img src="frontend/images/logo/homelogo1.png"
                                alt="home_craftifyed Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col d-none d-xl-block">
                    <nav class="site-main-menu justify-content-center">
                        <ul>
                            <li class="has-parent"><a href="{{ url('/') }}"><span
                                        class="text">Home</span></a>
                            <li class="has-parent"><a href="{{ url('/about') }}"><span
                                        class="text">About</span></a>


                            </li>
                            <li class="has-parent"><a href="{{ url('/shop') }}"><span
                                        class="text">Shop</span></a>

                            </li>

                            <li class="has-parent"><a href="{{ url('/elements-products') }}"><span
                                        class="text">Elements</span></a>

                            </li>

                            <li class="has-parent"><a href="{{ url('/contact') }}"><span
                                        class="text">Contact</span></a>

                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Search End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login">
                            <a href="my-account"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="header-wishlist">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span
                                    class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i
                                    class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        class="bottom"
                                        transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>

    </div>
    <!-- Header Sticky Section End -->
    <!-- Mobile Header Section Start -->
    <div class="mobile-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="{{ url('/') }}"><img src="frontend/images/logo/1logo.png"
                                alt="home_craftifyed Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                            <a href="my-account"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span
                                    class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i
                                    class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        class="bottom"
                                        transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->

    <!-- Mobile Header Section Start -->
    <div class="mobile-header sticky-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="{{ url('/') }}"><img src="frontend/images/logo/1logo.png"
                                alt="home_craftifyed
                     Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                            <a href="my-account"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span
                                    class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i
                                    class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        class="bottom"
                                        transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->
    <!-- OffCanvas Search Start -->
    <div id="offcanvas-search" class="offcanvas offcanvas-search">
        <div class="inner">
            <div class="offcanvas-search-form">
                <button class="offcanvas-close">×</button>
                <form action="#">
                    <div class="row mb-n3">
                        <div class="col-lg-8 col-12 mb-3"><input type="text" placeholder="Search Products...">
                        </div>
                        <div class="col-lg-4 col-12 mb-3">
                            <select class="search-select select2-basic">
                                <option value="0">All Categories</option>
                                <option value="kids-babies">Kids &amp; Babies</option>
                                <option value="home-decor">Home Decor</option>
                                <option value="gift-ideas">Gift ideas</option>
                                <option value="kitchen">Kitchen</option>
                                <option value="toys">Toys</option>
                                <option value="kniting-sewing">Kniting &amp; Sewing</option>
                                <option value="pots">Pots</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <p class="search-description text-body-light mt-2"> <span># Type at least 1 character to search</span>
                <span># Hit enter to search or ESC to close</span></p>

        </div>
    </div>
    <!-- OffCanvas Search End -->

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="{{ url('/product-details') }}" class="image"><img
                                src="frontend/images/product/cart-product-1.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="{{ url('/product-details') }}" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{ url('/product-details') }}" class="image"><img
                                src="frontend/images/product/cart-product-2.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="{{ url('/product-details') }}" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{ url('/product-details') }}" class="image"><img
                                src="frontend/images/product/cart-product-3.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="{{ url('/product-details') }}" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="{{ url('/wishlist') }}" class="btn btn-dark btn-hover-primary">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="{{ url('/product-details') }}" class="image"><img
                                src="frontend/images/product/cart-product-1.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="{{ url('/product-details') }}" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{ url('/product-details') }}" class="image"><img
                                src="frontend/images/product/cart-product-2.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="{{ url('/product-details') }}" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{ url('/product-details') }}" class="image"><img
                                src="frontend/images/product/cart-product-3.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="{{ url('/product-details') }}" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <strong>Subtotal :</strong>
                    <span class="amount">$144.00</span>
                </div>
                <div class="buttons">
                    <a href="{{ url('/shopping-cart') }}" class="btn btn-dark btn-hover-primary">view cart</a>
                    <a href="{{ url('/checkout') }}" class="btn btn-outline-dark">checkout</a>
                </div>
                <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="offcanvas-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="offcanvas-menu">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Home Group</span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/') }}"><span class="menu-text">Arts
                                                Propelled</span></a></li>
                                    <li><a href="index-2.html"><span class="menu-text">Decor Thriving</span></a></li>
                                    <li><a href="index-3.html"><span class="menu-text">Savvy Delight</span></a></li>
                                    <li><a href="index-4.html"><span class="menu-text">Perfect Escapes</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Home Group</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index-5.html"><span class="menu-text">Kitchen Cozy</span></a></li>
                                    <li><a href="index-6.html"><span class="menu-text">Dreamy Designs</span></a></li>
                                    <li><a href="index-7.html"><span class="menu-text">Crispy Recipes</span></a></li>
                                    <li><a href="index-8.html"><span class="menu-text">Decoholic Chic</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Home Group</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index-9.html"><span class="menu-text">Reblended Dish</span></a></li>
                                    <li><a href="index-10.html"><span class="menu-text">Craftin House</span></a></li>
                                    <li><a href="index-11.html"><span class="menu-text">Craftswork Biz</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/shop') }}"><span class="menu-text">Shop No
                                                Sidebar</span></a></li>
                                    <li><a href="shop-left-sidebar.html"><span class="menu-text">Shop Left
                                                Sidebar</span></a></li>
                                    <li><a href="shop-right-sidebar.html"><span class="menu-text">Shop Right
                                                Sidebar</span></a></li>
                                    <li><a href="shop-fullwidth-no-gutters.html"><span class="menu-text">Shop
                                                Fullwidth No Space</span></a></li>
                                    <li><a href="shop-fullwidth.html"><span class="menu-text">Shop Fullwidth No
                                                Sidebar</span></a></li>
                                    <li><a href="shop-fullwidth-left-sidebar.html"><span class="menu-text">Shop
                                                Fullwidth Left Sidebar</span></a></li>
                                    <li><a href="shop-fullwidth-right-sidebar.html"><span class="menu-text">Shop
                                                Fullwidth Right Sidebar</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Product Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/product-details') }}"><span class="menu-text">Basic</span></a></li>
                                    <li><a href="product-details-fullwidth.html"><span
                                                class="menu-text">Fullwidth</span></a></li>
                                    <li><a href="product-details-sticky.html"><span class="menu-text">Sticky
                                                Details</span></a></li>
                                    <li><a href="product-details-sidebar.html"><span class="menu-text">Width
                                                Sidebar</span></a></li>
                                    <li><a href="product-details-extra-content.html"><span class="menu-text">Extra
                                                Content</span></a></li>
                                    <li><a href="product-details-image-variation.html"><span
                                                class="menu-text">Variations Images</span></a></li>
                                    <li><a href="product-details-group.html"><span class="menu-text">Bought
                                                Together</span></a></li>
                                    <li><a href="product-details-360.html"><span class="menu-text">Product
                                                360</span></a></li>
                                    <li><a href="product-details-background.html"><span class="menu-text">Product with
                                                Background</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT & Other
                                        PAGES</span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/shopping-cart') }}"><span class="menu-text">Shopping
                                                Cart</span></a></li>
                                    <li><a href="{{ url('/checkout') }}"><span class="menu-text">Checkout</span></a>
                                    </li>
                                    <li><a href="{{ url('/order-tracking') }}"><span class="menu-text">Order
                                                Tracking</span></a></li>
                                    <li><a href="{{ url('/wishlist') }}"><span class="menu-text">Wishlist</span></a>
                                    </li>
                                    <li><a href="{{ url('/login-register') }}"><span class="menu-text">Customer
                                                Login</span></a></li>
                                    <li><a href="{{ url('/account') }}"><span class="menu-text">My Account</span></a>
                                    </li>
                                    <li><a href="lost-password.html"><span class="menu-text">Lost Password</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Project</span></a>
                        <ul class="sub-menu">
                            <li><a href="portfolio-3-columns.html"><span class="menu-text">Portfolio 3
                                        Columns</span></a></li>
                            <li><a href="portfolio-4-columns.html"><span class="menu-text">Portfolio 4
                                        Columns</span></a></li>
                            <li><a href="portfolio-5-columns.html"><span class="menu-text">Portfolio 5
                                        Columns</span></a></li>
                            <li><a href="portfolio-details.html"><span class="menu-text">Portfolio Details</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Elements</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">Column
                                        One</span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/elements-products') }}"><span class="menu-text">Product
                                                Styles</span></a></li>
                                    <li><a href="elements-products-tabs.html"><span class="menu-text">Product
                                                Tabs</span></a></li>
                                    <li><a href="elements-product-sale-banner.html"><span class="menu-text">Product &
                                                Sale Banner</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">Column
                                        Two</span></a>
                                <ul class="sub-menu">
                                    <li><a href="elements-category-banner.html"><span class="menu-text">Category
                                                Banner</span></a></li>
                                    <li><a href="elements-team.html"><span class="menu-text">Team Member</span></a>
                                    </li>
                                    <li><a href="elements-testimonials.html"><span
                                                class="menu-text">Testimonials</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">Column
                                        Three</span></a>
                                <ul class="sub-menu">
                                    <li><a href="elements-instagram.html"><span class="menu-text">Instagram</span></a>
                                    </li>
                                    <li><a href="elements-map.html"><span class="menu-text">Google Map</span></a></li>
                                    <li><a href="elements-icon-box.html"><span class="menu-text">Icon Box</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">Column
                                        Four</span></a>
                                <ul class="sub-menu">
                                    <li><a href="elements-buttons.html"><span class="menu-text">Buttons</span></a>
                                    </li>
                                    <li><a href="{{ url('/elements-faq') }}"><span class="menu-text">FAQs / Toggles</span></a>
                                    </li>
                                    <li><a href="elements-brands.html"><span class="menu-text">Brands</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="#"><span class="menu-text">Standard Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-right-sidebar.html"><span class="menu-text">Right
                                                Sidebar</span></a></li>
                                    <li><a href="blog-left-sidebar.html"><span class="menu-text">Left
                                                Sidebar</span></a></li>
                                    <li><a href="blog-fullwidth.html"><span class="menu-text">Full Width</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Grid Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid-right-sidebar.html"><span class="menu-text">Right
                                                Sidebar</span></a></li>
                                    <li><a href="blog-grid-left-sidebar.html"><span class="menu-text">Left
                                                Sidebar</span></a></li>
                                    <li><a href="blog-grid-fullwidth.html"><span class="menu-text">Full
                                                Width</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">List Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list-right-sidebar.html"><span class="menu-text">Right
                                                Sidebar</span></a></li>
                                    <li><a href="blog-list-left-sidebar.html"><span class="menu-text">Left
                                                Sidebar</span></a></li>
                                    <li><a href="blog-list-fullwidth.html"><span class="menu-text">Full
                                                Width</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Masonry Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Right
                                                Sidebar</span></a></li>
                                    <li><a href="blog-masonry-left-sidebar.html"><span class="menu-text">Left
                                                Sidebar</span></a></li>
                                    <li><a href="blog-masonry-fullwidth.html"><span class="menu-text">Full
                                                Width</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Single Post Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-details-right-sidebar.html"><span class="menu-text">Right
                                                Sidebar</span></a></li>
                                    <li><a href="blog-details-left-sidebar.html"><span class="menu-text">Left
                                                Sidebar</span></a></li>
                                    <li><a href="blog-details-fullwidth.html"><span class="menu-text">Full
                                                Width</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="about-us.html"><span class="menu-text">About us</span></a></li>
                            <li><a href="about-us-2.html"><span class="menu-text">About us 02</span></a></li>
                            <li><a href="{{ url('/contact') }}"><span class="menu-text">Contact us</span></a></li>
                            <li><a href="coming-soon.html"><span class="menu-text">Coming Soon</span></a></li>
                            <li><a href="404.html"><span class="menu-text">Page 404</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="offcanvas-buttons">
                <div class="header-tools">
                    <div class="header-login">
                        <a href="{{ url('/account') }}"><i class="far fa-user"></i></a>
                    </div>
                    <div class="header-wishlist">
                        <a href="{{ url('/wishlist') }}"><span>3</span><i class="far fa-heart"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="{{ url('/shopping-cart') }}"><span class="cart-count">3</span><i
                                class="fas fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
            <div class="offcanvas-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>
