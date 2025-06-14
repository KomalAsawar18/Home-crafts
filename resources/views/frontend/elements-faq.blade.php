@extends('frontend.layout.main')
@section('title', 'FAQs')
@section('main-container')
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="frontend/images/bg/page-title-1.webp">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-title">
                    <h1 class="title">FAQs</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url("/index")}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("/elements-products")}}">Elements</a></li>
                        <li class="breadcrumb-item active">FAQs</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->
<!-- FAQs Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row row-cols-lg-2 row-cols-1 learts-mb-n40">

            <div class="col learts-mb-40">
                <!-- Section Title Start -->
                <div class="section-title2">
                    <h2 class="title">Accordion</h2>
                </div>
                <!-- Section Title End -->
                <div class="row">
                    <div class="col">
                        <div class="accordion" id="faq-accordion">
                            <div class="card active">
                                <div class="card-header">
                                    <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#faq-accordion-1">Is the theme responsive and customizable?</button>
                                </div>

                                <div id="faq-accordion-1" class="collapse show" data-bs-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>At Cartifiyed, we specialize in handpicked, artisanal home decor crafted to elevate your living spaces. Explore our collection and find the perfect touch for your home!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-accordion-2">How long can I get theme updates for free?</button>
                                </div>

                                <div id="faq-accordion-2" class="collapse" data-bs-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Add a rustic charm to your home decor with this beautifully crafted wooden vase.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-accordion-3">Is the support period extendable?</button>
                                </div>

                                <div id="faq-accordion-3" class="collapse" data-bs-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Whether you have questions about our products, need assistance with your order, or require support with delivery, we are just a message away.  </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-accordion-4">Do you accept extra theme services?</button>
                                </div>

                                <div id="faq-accordion-4" class="collapse" data-bs-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>"Thank you for choosing Cartifiyed! Our dedicated customer service team is here to assist you with any inquiries or concerns. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col learts-mb-40">
                <!-- Section Title Start -->
                <div class="section-title2">
                    <h2 class="title">Toogles</h2>
                </div>
                <!-- Section Title End -->
                <div class="row">
                    <div class="col">
                        <div class="accordion" id="faq-toggles">
                            <div class="card active">
                                <div class="card-header">
                                    <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#faq-toggles-1">Is the theme responsive and customizable?</button>
                                </div>

                                <div id="faq-toggles-1" class="collapse show">
                                    <div class="card-body">
                                        <p>Learts appears professional in design and responsive in performance. It proves to be highly customizable and efficient for building eCommerce shops. Engage yourself in the most effortless and well-appointed process with Learts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-toggles-2">How long can I get theme updates for free?</button>
                                </div>

                                <div id="faq-toggles-2" class="collapse">
                                    <div class="card-body">
                                        <p> Please feel free to reach out, and we'll ensure your shopping experience is smooth and satisfying. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-toggles-3">Is the support period extendable?</button>
                                </div>

                                <div id="faq-toggles-3" class="collapse">
                                    <div class="card-body">
                                        <p>Our customer support team is available for all of your presale questions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-toggles-4">Do you accept extra theme services?</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- FAQs Section End -->
