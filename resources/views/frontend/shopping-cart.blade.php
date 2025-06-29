@extends('frontend.layout.main')
@section('title', 'ShoppingCart')
@section('main-container')
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="frontend/images/bg/page-title-1.webp">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-title">
                    <h1 class="title">Cart</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->


<!-- Shopping Cart Section Start -->
<div class="section section-padding">
    <div class="container">
        <form class="cart-form" action="#">
            <table class="cart-wishlist-table table">
                <thead>
                    <tr>
                        <th class="name" colspan="2">Product</th>
                        <th class="price">Price</th>
                        <th class="quantity">Quantity</th>
                        <th class="subtotal">Total</th>
                        <th class="remove">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="thumbnail"><a href="{{ url("/>walnut")}}"><img src="frontend/images/product/cart-product-1.webp" alt="cart-product-1"></a></td>
                        <td class="name"> <a href="{{ url("/walnut")}}">Walnut Cutting Board</a></td>
                        <td class="price"><span>£100.00</span></td>
                        <td class="quantity">
                            <div class="product-quantity">
                                <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                <input type="text" class="input-qty" value="1">
                                <span class="qty-btn plus"><i class="ti-plus"></i></span>
                            </div>
                        </td>
                        <td class="subtotal"><span>£100.00</span></td>
                        <td class="remove"><a href="#" class="btn">×</a></td>
                    </tr>
                    <tr>
                        <td class="thumbnail"><a href="{{ url("/product-details")}}"><img src="frontend/images/product/cart-product-2.webp" alt="cart-product-2"></a></td>
                        <td class="name"> <a href="{{ url("/product-details")}}">Lucky Wooden Elephant</a></td>
                        <td class="price"><span>£35.00</span></td>
                        <td class="quantity">
                            <div class="product-quantity">
                                <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                <input type="text" class="input-qty" value="1">
                                <span class="qty-btn plus"><i class="ti-plus"></i></span>
                            </div>
                        </td>
                        <td class="subtotal"><span>£35.00</span></td>
                        <td class="remove"><a href="#" class="btn">×</a></td>
                    </tr>
                    <tr>
                        <td class="thumbnail"><a href="{{ url("/product-details")}}"><img src="frontend/images/product/cart-product-3.webp" alt="cart-product-3"></a></td>
                        <td class="name"> <a href="{{ url("/product-details")}}">Fish Cut Out Set</a></td>
                        <td class="price"><span>£9.00</span></td>
                        <td class="quantity">
                            <div class="product-quantity">
                                <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                <input type="text" class="input-qty" value="1">
                                <span class="qty-btn plus"><i class="ti-plus"></i></span>
                            </div>
                        </td>
                        <td class="subtotal"><span>£9.00</span></td>
                        <td class="remove"><a href="#" class="btn">×</a></td>
                    </tr>
                </tbody>
            </table>
            <div class="row justify-content-between mb-n3">
                <div class="col-auto mb-3">
                    <div class="cart-coupon">
                        <input type="text" placeholder="Enter your coupon code">
                        <button class="btn"><i class="fas fa-gift"></i></button>
                    </div>
                </div>
                <div class="col-auto">
                    <a class="btn btn-light btn-hover-dark mr-3 mb-3" href="{{ url("/wishlist")}}">Continue Shopping</a>
                    <button class="btn btn-dark btn-outline-hover-dark mb-3">Update Cart</button>
                </div>
            </div>
        </form>
        <div class="cart-totals mt-5">
            <h2 class="title">Cart totals</h2>
            <table>
                <tbody>
                    <tr class="subtotal">
                        <th>Subtotal</th>
                        <td><span class="amount">£242.00</span></td>
                    </tr>
                    <tr class="total">
                        <th>Total</th>
                        <td><strong><span class="amount">£242.00</span></strong></td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ url("/checkout")}}" class="btn btn-dark btn-outline-hover-dark">Proceed to checkout</a>
        </div>
    </div>

</div>
<!-- Shopping Cart Section End -->
@endsection
