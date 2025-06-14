
@extends('frontend.layout.main')
@section('title', 'Wishlist')
@section('main-container')
    <div class="page-title-section section" data-bg-image="frontend/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Wishlist</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url("/")}}">Home</a></li>
                            <li class="breadcrumb-item active">Wishlist</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="section section-padding">
        <div class="container">
            <form class="cart-form" action="#">
                <table class="cart-wishlist-table table">
                    <thead>
                        <tr>
                            <th class="name" colspan="2">Product</th>
                            <th class="price">Unit Price</th>
                            <th class="add-to-cart">&nbsp;</th>
                            <th class="remove">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="thumbnail"><a href="{{ url("/product-details")}}"><img src="frontend/images/product/cart-product-1.webp" alt="wishlist-product-1"></a></td>
                            <td class="name"> <a href="{{ url("/product-details")}}">Walnut Cutting Board</a></td>
                            <td class="price"><span>Rs.350</span></td>
                            <td class="add-to-cart"><a href="#" class="btn btn-light btn-hover-dark"><i class="fas fa-shopping-cart mr-2"></i>Add to Cart</a></td>
                            <td class="remove"><a href="#" class="btn">×</a></td>
                        </tr>
                        <tr>
                            <td class="thumbnail"><a href="{{ url("/product-details")}}"><img src="frontend/images/product/cart-product-2.webp" alt="wishlist-product-2"></a></td>
                            <td class="name"> <a href="{{ url("/product-details")}}">Lucky Wooden Elephant</a></td>
                            <td class="price"><span>Rs.3500</span></td>
                            <td class="add-to-cart"><a href="#" class="btn btn-light btn-hover-dark"><i class="fas fa-shopping-cart mr-2"></i>Add to Cart</a></td>
                            <td class="remove"><a href="#" class="btn">×</a></td>
                        </tr>
                        <tr>
                            <td class="thumbnail"><a href="{{ url("/product-details")}}"><img src="frontend/images/product/cart-product-3.webp" alt="wishlist-product-3"></a></td>
                            <td class="name"> <a href="{{ url("/product-details")}}">Fish Cut Out Set</a></td>
                            <td class="price"><span>Rs.199</span></td>
                            <td class="add-to-cart"><a href="#" class="btn btn-light btn-hover-dark"><i class="fas fa-shopping-cart mr-2"></i>Add to Cart</a></td>
                            <td class="remove"><a href="#" class="btn">×</a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col text-center mb-n3">
                        <a class="btn btn-light btn-hover-dark mr-3 mb-3" href="{{ url("/shop")}}">Continue Shopping</a>
                        <a class="btn btn-dark btn-outline-hover-dark mb-3" href="{{ url("/shopping-cart")}}">View Cart</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
