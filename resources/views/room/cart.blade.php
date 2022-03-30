@extends('layouts.app')
@section('content')

    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-10">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content text-center">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Cart</h2>
                            </div>
                            <span class="arrow-blink">
                                <i class="la la-arrow-down"></i>
                            </span>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
        </div><!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
        START CART AREA
    ================================= -->
    <section class="cart-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-wrap">
                        <div class="table-form table-responsive mb-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="table-content product-content d-flex align-items-center">
                                            <a href="/room/details" class="d-block">
                                                <img src="{{ asset('assets/images/small-img12.jpg') }}" alt="" class="flex-shrink-0">
                                            </a>
                                        <div class="product-content">
                                            <a href="/room/details" class="title">Premium Lake View Room</a>
                                            <div class="product-info-wrap">
                                                <div class="product-info line-height-24">
                                                    <span class="product-info-label">Reservation:</span>
                                                        <span class="product-info-value">
                                                        <span class="product-check-in">July 12, 2020</span>
                                                        <span class="product-mark">/</span>
                                                        <span class="product-check-out">July 13, 2020</span>
                                                        <span class="product-nights">(1 night)</span>
                                                        </span>
                                                </div><!-- end product-info -->
                                                <div class="product-info line-height-24">
                                                    <span class="product-info-label">Guests:</span>
                                                    <span class="product-info-value">2 Adults</span>
                                                </div><!-- end product-info -->
                                                <div class="product-info line-height-24">
                                                    <span class="product-info-label">Extra Services:</span>
                                                    <span class="product-info-value">cleaning-fee, airport-pickup, breakfast, parking</span>
                                                </div><!-- end product-info -->
                                            </div>
                                        </div>
                                        </div>
                                    </th>
                                    <td>$110.00</td>
                                    <td>
                                        <div class="product-info">
                                            <input type="text" class="form-control" value="1">
                                        </div>
                                    </td>
                                    <td>$110.00</td>
                                    <td>
                                        <div class="remove-wrap">
                                            <a href="javascript:void(0)" class="btn font-size-18"><i class="la la-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="section-block"></div>
                        <div class="cart-actions d-flex justify-content-between align-items-center pt-4 pb-5">
                            <div class="contact-form-action">
                                <form method="post" class="d-flex align-items-center">
                                    <div class="form-group mb-0 mr-3">
                                        <input class="form-control pl-3" type="text" name="text" placeholder="Coupon code">
                                    </div>
                                    <button type="button" class="theme-btn">Apply Code</button>
                                </form>
                            </div><!-- end contact-form-action -->
                            <div class="btn-box">
                                <a href="#" class="theme-btn">Update Cart</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 ml-auto">
                                <div class="cart-totals table-form">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Title</th>
                                                <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="table-content">
                                                        <h3 class="title">Subtotal</h3>
                                                    </div>
                                                </th>
                                                <td>$110.00</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="table-content">
                                                        <h3 class="title">Total</h3>
                                                    </div>
                                                </th>
                                                <td>$110.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="section-block"></div>
                                    <div class="btn-box text-right pt-4">
                                        <a href="/room/checkout" class="theme-btn">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end cart-wrap -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end cart-area -->
    <!-- ================================
        END CART AREA
    ================================= -->
@endsection
