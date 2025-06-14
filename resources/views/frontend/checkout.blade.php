@extends('frontend.layout.main')
@section('title', 'Checkout')
@section('main-container')
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="frontend/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title" >
                        <h1 class="title">Checkout</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->
    <!-- Checkout Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="checkout-coupon">
                <p class="coupon-toggle">Have a coupon? <a href="#checkout-coupon-form" data-bs-toggle="collapse">Click here to enter your code</a></p>
                <div id="checkout-coupon-form" class="collapse">
                    <div class="coupon-form">
                        <p>If you have a coupon code, please apply it below.</p>
                        <form action="#" class="learts-mb-n10">
                            <input class="learts-mb-10" type="text" placeholder="Coupon code">
                            <button class="btn btn-dark btn-outline-hover-dark learts-mb-10">apply coupon</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="section-title2">
                <h2 class="title">Billing details</h2>
            </div>
            <form action="#" class="checkout-form learts-mb-50">
                <div class="row">
                    <div class="col-md-6 col-12 learts-mb-20">
                        <label for="bdFirstName">FIrst Name <abbr class="required">*</abbr></label>
                        <input type="text" id="bdFirstName">
                    </div>
                    <div class="col-md-6 col-12 learts-mb-20">
                        <label for="bdLastName">Last Name <abbr class="required">*</abbr></label>
                        <input type="text" id="bdLastName">
                    </div>
                    <div class="col-12 learts-mb-20">
                        <label for="bdCompanyName">Company name (optional)</label>
                        <input type="text" id="bdCompanyName">
                    </div>
                    <div class="col-12 learts-mb-20">
                        <label for="bdCountry">Country <abbr class="required">*</abbr></label>
                        <select id="bdCountry" class="select2-basic">
                            <option value="">Select a country…</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="BD" selected>Bangladesh</option>
                            <option value="BE">Belgium</option>
                            <option value="CA">Canada</option>
                            <option value="CN">China</option>
                            <option value="CU">Cuba</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                            <option value="GL">Greenland</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="IT">Italy</option>
                            <option value="JP">Japan</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="MX">Mexico</option>
                            <option value="MA">Morocco</option>
                            <option value="NL">Netherlands</option>
                            <option value="NZ">New Zealand</option>
                            <option value="KP">North Korea</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PL">Poland</option>
                            <option value="QA">Qatar</option>
                            <option value="RU">Russia</option>
                        </select>
                    </div>
                    <div class="col-12 learts-mb-20">
                        <label for="bdAddress1">Street address <abbr class="required">*</abbr></label>
                        <input type="text" id="bdAddress1" placeholder="House number and street name">
                    </div>
                    <div class="col-12 learts-mb-20">
                        <label for="bdAddress2" class="sr-only">Apartment, suite, unit etc. (optional)</label>
                        <input type="text" id="bdAddress2" placeholder="Apartment, suite, unit etc. (optional) ">
                    </div>
                    <div class="col-12 learts-mb-20">
                        <label for="bdTownOrCity">Town / City <abbr class="required">*</abbr></label>
                        <input type="text" id="bdTownOrCity">
                    </div>
                    <div class="col-12 learts-mb-20">
                        <label for="bdDistrict">District <abbr class="required">*</abbr></label>
                        <select id="bdDistrict" class="select2-basic">
                            <option value="">Select an option…</option>
                            <option value="PK-AT">Attock</option>
                            <option value="PK-BN">Bahawalnagar</option>
                            <option value="PK-BP">Bahawalpur</option>
                            <option value="PK-BK">Bhakkar</option>
                            <option value="PK-CK">Chakwal</option>
                            <option value="PK-CH">Chiniot</option>
                            <option value="PK-DG">Dera Ghazi Khan</option>
                            <option value="PK-FS">Faisalabad</option>
                            <option value="PK-GW">Gujranwala</option>
<option value="PK-GT">Gujrat</option>
<option value="PK-HF">Hafizabad</option>
<option value="PK-JG">Jhang</option>
<option value="PK-JL">Jhelum</option>
<option value="PK-KS">Kasur</option>
<option value="PK-KL">Khanewal</option>
<option value="PK-KB">Khushab</option>
<option value="PK-LR">Lahore</option>
<option value="PK-LY">Layyah</option>
<option value="PK-LO">Lodhran</option>
<option value="PK-MD">Mandi Bahauddin</option>
<option value="PK-MN">Mianwali</option>
<option value="PK-MU">Multan</option>
<option value="PK-MZ">Muzaffargarh</option>
<option value="PK-NW">Narowal</option>
<option value="PK-NS">Nankana Sahib</option>
<option value="PK-OK">Okara</option>
<option value="PK-PK">Pakpattan</option>
<option value="PK-RK">Rahim Yar Khan</option>
<option value="PK-RJ">Rajanpur</option>
<option value="PK-RW">Rawalpindi</option>
<option value="PK-SW">Sahiwal</option>
<option value="PK-SR">Sargodha</option>
<option value="PK-SK">Sheikhupura</option>
<option value="PK-SL">Sialkot</option>
<option value="PK-TT">Toba Tek Singh</option>
<option value="PK-VH">Vehari</option>
<option value="PK-KR">Karachi</option>
<option value="PK-HY">Hyderabad</option>
<option value="PK-MR">Mirpurkhas</option>
<option value="PK-LK">Larkana</option>
<option value="PK-SU">Sukkur</option>
<option value="PK-BB">Badin</option>
<option value="PK-DU">Dadu</option>
<option value="PK-GT">Ghotki</option>
<option value="PK-JM">Jamshoro</option>
<option value="PK-KP">Khairpur</option>
<option value="PK-MT">Matiari</option>
<option value="PK-SH">Shaheed Benazirabad</option>
<option value="PK-TM">Tando Muhammad Khan</option>
<option value="PK-TH">Thatta</option>
<option value="PK-BL">Balochistan</option>
<option value="PK-GB">Gilgit-Baltistan</option>
<option value="PK-AK">Azad Jammu & Kashmir</option>
<option value="PK-ICT">Islamabad</option>

                        </select>
                    </div>
                    <div class="col-12 learts-mb-20">
                        <label for="bdPostcode">Postcode / ZIP (optional)</label>
                        <input type="text" id="bdPostcode">
                    </div>
                    <div class="col-md-6 col-12 learts-mb-20">
                        <label for="bdEmail">Email address <abbr class="required">*</abbr></label>
                        <input type="text" id="bdEmail">
                    </div>
                    <div class="col-md-6 col-12 learts-mb-30">
                        <label for="bdPhone">Phone <abbr class="required">*</abbr></label>
                        <input type="text" id="bdPhone">
                    </div>
                    <div class="col-12 learts-mb-40">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Create an account?</label>
                        </div>
                    </div>
                    <div class="col-12 learts-mb-20">
                        <label for="bdOrderNote">Order Notes (optional)</label>
                        <textarea id="bdOrderNote" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                    </div>
                </div>
            </form>
            <div class="section-title2 text-center">
                <h2 class="title">Your order</h2>
            </div>
            <div class="row learts-mb-n30">
                <div class="col-lg-6 order-lg-2 learts-mb-30">
                    <div class="order-review">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="name">Product</th>
                                    <th class="total">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="name">Walnut Cutting Board&nbsp; <strong class="quantity">×&nbsp;1</strong></td>
                                    <td class="total"><span>Rs.400</span></td>
                                </tr>
                                <tr>
                                    <td class="name">Pizza Plate Tray&nbsp; <strong class="quantity">×&nbsp;1</strong></td>
                                    <td class="total"><span>Rs.200</span></td>
                                </tr>
                                <tr>
                                    <td class="name">Minimalist Ceramic Pot - Pearl river, Large&nbsp; <strong class="quantity">×&nbsp;1</strong></td>
                                    <td class="total"><span>Rs.450</span></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="subtotal">
                                    <th>Subtotal</th>
                                    <td><span>Rs.1050</span></td>
                                </tr>
                                <tr class="total">
                                    <th>Total</th>
                                    <td><strong><span>Rs.1050</span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 learts-mb-30">
                    <div class="order-payment">
                        <div class="payment-method">
                            <div class="accordion" id="paymentMethod">
                                <div class="card active">
                                    <div class="card-header">
                                        <button data-bs-toggle="collapse" data-bs-target="#checkPayments">Check payments</button>
                                    </div>
                                    <div id="checkPayments" class="collapse show" data-bs-parent="#paymentMethod">
                                        <div class="card-body">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button data-bs-toggle="collapse" data-bs-target="#cashkPayments">Cash on delivery </button>
                                    </div>
                                    <div id="cashkPayments" class="collapse" data-bs-parent="#paymentMethod">
                                        <div class="card-body">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button data-bs-toggle="collapse" data-bs-target="#payPalPayments">PayPal <img src="frontend/images/others/pay-2.webp" alt=""></button>
                                    </div>
                                    <div id="payPalPayments" class="collapse" data-bs-parent="#paymentMethod">
                                        <div class="card-body">
                                            <p>Pay via Credit card</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="payment-note">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                            <button class="btn btn-dark btn-outline-hover-dark">place order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->
@endsection
