@extends('frontend.layout.main')
@section('title', 'My Account')
@section('main-container')

<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="frontend/images/bg/page-title-1.webp">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-title">
                    <h1 class="title">My Account</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->
<!-- My Account Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row learts-mb-n30">

            <!-- My Account Tab List Start -->
            <div class="col-lg-4 col-12 learts-mb-30">
                <div class="myaccount-tab-list nav">
                    <a href="#dashboad" class="active" data-bs-toggle="tab">Dashboard <i class="far fa-home"></i></a>
                    <a href="#orders" data-bs-toggle="tab">Orders <i class="far fa-file-alt"></i></a>
                    <a href="#download" data-bs-toggle="tab">Download <i class="far fa-arrow-to-bottom"></i></a>
                    <a href="#address" data-bs-toggle="tab">address <i class="far fa-map-marker-alt"></i></a>
                    <a href="#account-info" data-bs-toggle="tab">Account Details <i class="far fa-user"></i></a>
                    <a href="{{ url("/login-register")}}">Logout <i class="far fa-sign-out-alt"></i></a>
                </div>
            </div>
            <!-- My Account Tab List End -->
            <!-- My Account Tab Content Start -->
            <div class="col-lg-8 col-12 learts-mb-30">
                <div class="tab-content">

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade show active" id="dashboad">
                        <div class="myaccount-content dashboad">
                            <p>Hello <strong>didiv91396</strong> (not <strong>didiv91396</strong>? <a href="{{ url("/login-register")}}">Log out</a>)</p>
                            <p>From your account dashboard you can view your <span>recent orders</span>, manage your <span>shipping and billing addresses</span>, and <span>edit your password and account details</span>.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="orders">
                        <div class="myaccount-content order">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>December 24, 2024</td>
                                            <td>Pending</td>
                                            <td>RS.3000</td>
                                            <td><a href="{{ url("/shopping-cart")}}">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>December 22, 2023</td>
                                            <td>Approved</td>
                                            <td>Rs.2500</td>
                                            <td><a href="{{ url("/shopping-cart")}}">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>November 12, 2024</td>
                                            <td>On Hold</td>
                                            <td>Rs.1900</td>
                                            <td><a href="{{ url("/shopping-cart")}}">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="download">
                        <div class="myaccount-content download">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Date</th>
                                            <th>Expire</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Craftifyed</td>
                                            <td>October 22, 2024</td>
                                            <td>Yes</td>
                                            <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>
                                        </tr>
                                        <tr>
                                            <td>HasTech</td>
                                            <td>Sep 12, 2023</td>
                                            <td>Never</td>
                                            <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="address">
                        <div class="myaccount-content address">
                            <p>The following addresses will be used on the checkout page by default.</p>
                            <div class="row learts-mb-n30">
                                <div class="col-md-6 col-12 learts-mb-30">
                                    <h4 class="title">Billing Address <a href="#" class="edit-link">edit</a></h4>
                                    <address>
                                        <p><strong>Komal Asawar</strong></p>
                                        <p>Model Town-A, Bahawalpur<br>
                                            Punjab, Pakistan</p>
                                        <p>Mobile: (+92) 3002468414</p>
                                    </address>
                                </div>
                                <div class="col-md-6 col-12 learts-mb-30">
                                    <h4 class="title">Shipping Address <a href="#" class="edit-link">edit</a></h4>
                                    <address>
                                        <p><strong>Komal Asawar</strong></p>
                                        <p>Model Town-A, Bahawalpur<br>
                                            Punjab, Pakistan</p>
                                        <p>Mobile: (+92) 3002468414</p>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="account-info">
                        <div class="myaccount-content account-details">
                            <div class="account-details-form">
                                <form action="{{ url("/account")}}"method="post" class="account-form">
                                    <div class="row learts-mb-n30">
                                        <div class="col-md-6 col-12 learts-mb-30">
                                            <div class="single-input-item">
                                                <label for="first-name">First Name <abbr class="required">*</abbr></label>
                                                <input class="input-form" type="text" name ="first-name" id="first-name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 learts-mb-30">
                                            <div class="single-input-item">
                                                <label for="last-name">Last Name <abbr class="required">*</abbr></label>
                                                <input class="input-form" type="text" name ="last-name" id="last-name">
                                            </div>
                                        </div>
                                        <div class="col-12 learts-mb-30">
                                            <label for="display-name">Display Name <abbr class="required">*</abbr></label>
                                            <input class="input-form" type="text" name ="display-name" id="display-name" value="didiv91396">
                                        </div>
                                        <div class="col-12 learts-mb-30">
                                            <label for="email">Email Addres <abbr class="required">*</abbr></label>
                                            <input class="input-form" type="email" name ="email" id="email" value="example@gmail.com">
                                        </div>
                                        <div class="col-12 learts-mb-30 learts-mt-30">
                                            <fieldset>
                                                <legend>Password change</legend>
                                                <div class="row learts-mb-n30">
                                                    <div class="col-12 learts-mb-30">
                                                        <label for="current-pwd">Current password</label>
                                                        <input class="input-form" type="password" name ="current-pwd" id="current-pwd">
                                                    </div>
                                                    <div class="col-12 learts-mb-30">
                                                        <label for="new-pwd">New password</label>
                                                        <input class="input-form" type="password" name ="new-pwd" id="new-pwd">
                                                    </div>
                                                    <div class="col-12 learts-mb-30">
                                                        <label for="confirm-pwd">Confirm new password</label>
                                                        <input class="input-form" type="password" name ="confirm-pwd" id="confirm-pwd">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 learts-mb-30">
                                        <button class="btn btn-secondary btn-hover-primary" type="submit" name="BtnSubmit">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
