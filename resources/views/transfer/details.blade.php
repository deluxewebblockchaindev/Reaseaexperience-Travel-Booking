@extends('layouts.app')
@section('content')

    <!-- ================================
        START BREADCRUMB TOP BAR
    ================================= -->
    <section class="breadcrumb-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-list breadcrumb-top-list">
                        <ul class="list-items bg-transparent radius-none p-0">
                            <li><a href="/">Home</a></li>
                            <li>United States</li>
                            <li>Mercedes E Class or Similar</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-top-bar -->
    <!-- ================================
        END BREADCRUMB TOP BAR
    ================================= -->

    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg-8 py-0">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-btn">
                            <div class="btn-box">
                                <a class="theme-btn" data-fancybox="video" data-src="https://www.youtube.com/watch?v=IPm6RPmI5_A"
                                data-speed="700">
                                    <i class="la la-video-camera mr-2"></i>Video
                                </a>
                                <a class="theme-btn" data-src="{{ asset('assets/images/car-img.jpg') }}"
                                data-fancybox="gallery"
                                data-caption="Showing image - 01"
                                data-speed="700">
                                    <i class="la la-photo mr-2"></i>More Photos
                                </a>
                            </div>
                            <a class="d-none"
                                data-fancybox="gallery"
                                data-src="{{ asset('assets/images/car-img2.jpg') }}"
                                data-caption="Showing image - 02"
                                data-speed="700"></a>
                            <a class="d-none"
                                data-fancybox="gallery"
                                data-src="{{ asset('assets/images/car-img3.jpg') }}"
                                data-caption="Showing image - 03"
                                data-speed="700"></a>
                            <a class="d-none"
                                data-fancybox="gallery"
                                data-src="{{ asset('assets/images/car-img4.jpg') }}"
                                data-caption="Showing image - 04"
                                data-speed="700"></a>
                        </div><!-- end breadcrumb-btn -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!-- ================================
        START CAR DETAIL AREA
    ================================= -->
    <section class="car-detail-area padding-bottom-90px">
        <div class="single-content-navbar-wrap menu section-bg" id="single-content-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content-nav" id="single-content-nav">
                            <ul>
                                <li><a data-scroll="description" href="#description" class="scroll-link active">Car Details</a></li>
                                <li><a data-scroll="faq" href="#faq" class="scroll-link">Faqs</a></li>
                                <li><a data-scroll="reviews" href="#reviews" class="scroll-link">Reviews</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end single-content-navbar-wrap -->
        <div class="single-content-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content-wrap padding-top-60px">
                            <div id="description" class="page-scroll">
                                <div class="single-content-item pb-4">
                                    <h3 class="title font-size-26">Mercedes E Class or Similar</h3>
                                    <div class="d-flex align-items-center pt-2">
                                        <p class="mr-2">United States</p>
                                        <p>
                                            <span class="badge badge-warning text-white font-size-16">4.6</span>
                                            <span>(4,209 Reviews)</span>
                                        </p>
                                    </div>
                                </div><!-- end single-content-item -->
                                <div class="section-block"></div>
                                <div class="single-content-item py-4">
                                    <div class="row">
                                        <div class="col-lg-6 responsive-column">
                                            <div class="single-feature-titles mb-3">
                                                <h3 class="title font-size-16">Pick-up location details</h3>
                                                <span class="font-size-13">Phone: 1-0825889755</span>
                                            </div>
                                            <div class="section-block"></div>
                                            <div class="single-feature-titles my-3">
                                                <h3 class="title font-size-15 font-weight-medium">Pick-up Time</h3>
                                                <span class="font-size-13">12 Jun 2020, 7:50 am</span>
                                            </div>
                                            <div class="single-feature-titles mb-3">
                                                <h3 class="title font-size-15 font-weight-medium">Location</h3>
                                                <span class="font-size-13">London city, airport</span>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="single-feature-titles mb-3">
                                                <h3 class="title font-size-16">Drop-off location details</h3>
                                                <span class="font-size-13">Phone: 1-0825889755</span>
                                            </div>
                                            <div class="section-block"></div>
                                            <div class="single-feature-titles my-3">
                                                <h3 class="title font-size-15 font-weight-medium">Drop-off Time</h3>
                                                <span class="font-size-13">13 Jun 2020, 5:50 am</span>
                                            </div>
                                            <div class="single-feature-titles mb-3">
                                                <h3 class="title font-size-15 font-weight-medium">Location</h3>
                                                <span class="font-size-13">Paris orly, airport</span>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12">
                                            <div class="section-block margin-bottom-35px"></div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-car"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Rental Company</h3>
                                                    <span class="font-size-13">Delta Rent a Car</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-car"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Car Type</h3>
                                                    <span class="font-size-13">Economy</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-car"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Car Name</h3>
                                                    <span class="font-size-13">Toyota Auris</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-users"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Passengers</h3>
                                                    <span class="font-size-13">4</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-briefcase"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Baggage</h3>
                                                    <span class="font-size-13">2</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div class="single-tour-feature d-flex align-items-center mb-3">
                                                <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                    <i class="la la-gear"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">Car Features</h3>
                                                    <span class="font-size-13">Available</span>
                                                </div>
                                            </div><!-- end single-tour-feature -->
                                        </div><!-- end col-lg-4 -->
                                    </div><!-- end row -->
                                </div><!-- end single-content-item -->
                                <div class="section-block"></div>
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Car Rental Information</h3>
                                    <p class="py-3">Per consequat adolescens ex, cu nibh commune temporibus vim, ad sumo viris eloquentiam sed. Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                                    <p>Cum et probo menandri. Officiis consulatu pro et, ne sea sale invidunt, sed ut sint blandit efficiendi. Atomorum explicari eu qui, est enim quaerendum te. Quo harum viris id. Per ne quando dolore evertitur, pro ad cibo commune.</p>
                                </div><!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div><!-- end description -->
                            <div id="faq" class="page-scroll">
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Faqs</h3>
                                    <div class="accordion accordion-item padding-top-30px" id="accordionExample2">
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingFour">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseFour" aria-expanded="true" aria-controls="faqCollapseFour">
                                                        <span class="ml-3">What do I need to hire a car?</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseFour" class="collapse show" aria-labelledby="faqHeadingFour" data-parent="#accordionExample2">
                                                <div class="card-body d-flex">
                                                    <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingFive">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                                                        <span class="ml-3">How old do I have to be to rent a car?</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseFive" class="collapse" aria-labelledby="faqHeadingFive" data-parent="#accordionExample2">
                                                <div class="card-body d-flex">
                                                    <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingSix">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix">
                                                        <span class="ml-3">Can I book a hire car for someone else?</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseSix" class="collapse" aria-labelledby="faqHeadingSix" data-parent="#accordionExample2">
                                                <div class="card-body d-flex">
                                                    <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingSeven">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven">
                                                        <span class="ml-3">How do I find the cheapest car hire deal?</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseSeven" class="collapse" aria-labelledby="faqHeadingSeven" data-parent="#accordionExample2">
                                                <div class="card-body d-flex">
                                                    <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div>
                                </div><!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div><!-- end faq -->
                            <div id="reviews" class="page-scroll">
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Reviews</h3>
                                    <div class="review-container padding-top-30px">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <div class="review-summary">
                                                    <h2>4.5<span>/5</span></h2>
                                                    <p>Excellent</p>
                                                    <span>Based on 4 reviews</span>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-8">
                                                <div class="review-bars">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">Service</h3>
                                                                <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line" data-percent="70%">
                                                                            <div class="progressbar-line-item bar-bg-1"></div>
                                                                        </div> <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">4.6</div>
                                                                </div>
                                                            </div><!-- end progress-item -->
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">Location</h3>
                                                                <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line" data-percent="55%">
                                                                            <div class="progressbar-line-item bar-bg-2"></div>
                                                                        </div> <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">4.7</div>
                                                                </div>
                                                            </div><!-- end progress-item -->
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">Value for Money</h3>
                                                                <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line" data-percent="40%">
                                                                            <div class="progressbar-line-item bar-bg-3"></div>
                                                                        </div> <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">2.6</div>
                                                                </div>
                                                            </div><!-- end progress-item -->
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">Cleanliness</h3>
                                                                <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line" data-percent="60%">
                                                                            <div class="progressbar-line-item bar-bg-4"></div>
                                                                        </div> <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">3.6</div>
                                                                </div>
                                                            </div><!-- end progress-item -->
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <div class="progress-item">
                                                                <h3 class="progressbar-title">Facilities</h3>
                                                                <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                                    <div class="progressbar-box flex-shrink-0">
                                                                        <div class="progressbar-line" data-percent="50%">
                                                                            <div class="progressbar-line-item bar-bg-5"></div>
                                                                        </div> <!-- End Skill Bar -->
                                                                    </div>
                                                                    <div class="bar-percent">2.6</div>
                                                                </div>
                                                            </div><!-- end progress-item -->
                                                        </div><!-- end col-lg-6 -->
                                                    </div><!-- end row -->
                                                </div>
                                            </div><!-- end col-lg-8 -->
                                        </div>
                                    </div>
                                </div><!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div><!-- end reviews -->
                            <div class="review-box">
                                <div class="single-content-item padding-top-40px">
                                    <h3 class="title font-size-20">Showing 3 guest reviews</h3>
                                    <div class="comments-list padding-top-50px">
                                        <div class="comment">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt="" src="{{ asset('assets/images/team8.jpg') }}">
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">Jenny Doe</h3>
                                                    <div class="meta-data-inner d-flex">
                                                        <span class="ratings d-flex align-items-center mr-1">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                        </span>
                                                        <p class="comment__date">April 5, 2019</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis
                                                </p>
                                                <div class="comment-reply d-flex align-items-center justify-content-between">
                                                    <a class="theme-btn" href="#" data-toggle="modal" data-target="#replayPopupForm">
                                                        <span class="la la-mail-reply mr-1"></span>Reply
                                                    </a>
                                                    <div class="reviews-reaction">
                                                        <a href="#" class="comment-like"><i class="la la-thumbs-up"></i> 13</a>
                                                        <a href="#" class="comment-dislike"><i class="la la-thumbs-down"></i> 2</a>
                                                        <a href="#" class="comment-love"><i class="la la-heart-o"></i> 5</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end comments -->
                                        <div class="comment comment-reply-item">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt="" src="{{ asset('assets/images/team9.jpg') }}">
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">Jenny Doe</h3>
                                                    <div class="meta-data-inner d-flex">
                                                        <span class="ratings d-flex align-items-center mr-1">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                        </span>
                                                        <p class="comment__date">April 5, 2019</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis
                                                </p>
                                                <div class="comment-reply d-flex align-items-center justify-content-between">
                                                    <a class="theme-btn" href="#" data-toggle="modal" data-target="#replayPopupForm">
                                                        <span class="la la-mail-reply mr-1"></span>Reply
                                                    </a>
                                                    <div class="reviews-reaction">
                                                        <a href="#" class="comment-like"><i class="la la-thumbs-up"></i> 13</a>
                                                        <a href="#" class="comment-dislike"><i class="la la-thumbs-down"></i> 2</a>
                                                        <a href="#" class="comment-love"><i class="la la-heart-o"></i> 5</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end comments -->
                                        <div class="comment">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt="" src="{{ asset('assets/images/team10.jpg') }}">
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">Jenny Doe</h3>
                                                    <div class="meta-data-inner d-flex">
                                                        <span class="ratings d-flex align-items-center mr-1">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                        </span>
                                                        <p class="comment__date">April 5, 2019</p>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis
                                                </p>
                                                <div class="comment-reply d-flex align-items-center justify-content-between">
                                                    <a class="theme-btn" href="#" data-toggle="modal" data-target="#replayPopupForm">
                                                        <span class="la la-mail-reply mr-1"></span>Reply
                                                    </a>
                                                    <div class="reviews-reaction">
                                                        <a href="#" class="comment-like"><i class="la la-thumbs-up"></i> 13</a>
                                                        <a href="#" class="comment-dislike"><i class="la la-thumbs-down"></i> 2</a>
                                                        <a href="#" class="comment-love"><i class="la la-heart-o"></i> 5</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end comments -->
                                        <div class="btn-box load-more text-center">
                                            <button class="theme-btn theme-btn-small theme-btn-transparent" type="button">Load More Review</button>
                                        </div>
                                    </div><!-- end comments-list -->
                                    <div class="comment-forum padding-top-40px">
                                        <div class="form-box">
                                            <div class="form-title-wrap">
                                                <h3 class="title">Write a Review</h3>
                                            </div><!-- form-title-wrap -->
                                            <div class="form-content">
                                                <div class="rate-option p-2">
                                                    <div class="row">
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Service</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" id="lst1" value="1">
                                                                    <label for="lst1"></label>
                                                                    <input type="checkbox" id="lst2" value="2">
                                                                    <label for="lst2"></label>
                                                                    <input type="checkbox" id="lst3" value="3">
                                                                    <label for="lst3"></label>
                                                                    <input type="checkbox" id="lst4" value="4">
                                                                    <label for="lst4"></label>
                                                                    <input type="checkbox" id="lst5" value="5">
                                                                    <label for="lst5"></label>
                                                                </div>
                                                            </div>
                                                        </div><!-- col-lg-4 -->
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Location</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" id="l1" value="1">
                                                                    <label for="l1"></label>
                                                                    <input type="checkbox" id="l2" value="2">
                                                                    <label for="l2"></label>
                                                                    <input type="checkbox" id="l3" value="3">
                                                                    <label for="l3"></label>
                                                                    <input type="checkbox" id="l4" value="4">
                                                                    <label for="l4"></label>
                                                                    <input type="checkbox" id="l5" value="5">
                                                                    <label for="l5"></label>
                                                                </div>
                                                            </div>
                                                        </div><!-- col-lg-4 -->
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Value for Money</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" id="vm1" value="1">
                                                                    <label for="vm1"></label>
                                                                    <input type="checkbox" id="vm2" value="2">
                                                                    <label for="vm2"></label>
                                                                    <input type="checkbox" id="vm3" value="3">
                                                                    <label for="vm3"></label>
                                                                    <input type="checkbox" id="vm4" value="4">
                                                                    <label for="vm4"></label>
                                                                    <input type="checkbox" id="vm5" value="5">
                                                                    <label for="vm5"></label>
                                                                </div>
                                                            </div>
                                                        </div><!-- col-lg-4 -->
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Cleanliness</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" id="cln1" value="1">
                                                                    <label for="cln1"></label>
                                                                    <input type="checkbox" id="cln2" value="2">
                                                                    <label for="cln2"></label>
                                                                    <input type="checkbox" id="cln3" value="3">
                                                                    <label for="cln3"></label>
                                                                    <input type="checkbox" id="cln4" value="4">
                                                                    <label for="cln4"></label>
                                                                    <input type="checkbox" id="cln5" value="5">
                                                                    <label for="cln5"></label>
                                                                </div>
                                                            </div>
                                                        </div><!-- col-lg-4 -->
                                                        <div class="col-lg-4 responsive-column">
                                                            <div class="rate-option-item">
                                                                <label>Facilities</label>
                                                                <div class="rate-stars-option">
                                                                    <input type="checkbox" id="f1" value="1">
                                                                    <label for="f1"></label>
                                                                    <input type="checkbox" id="f2" value="2">
                                                                    <label for="f2"></label>
                                                                    <input type="checkbox" id="f3" value="3">
                                                                    <label for="f3"></label>
                                                                    <input type="checkbox" id="f4" value="4">
                                                                    <label for="f4"></label>
                                                                    <input type="checkbox" id="f5" value="5">
                                                                    <label for="f5"></label>
                                                                </div>
                                                            </div>
                                                        </div><!-- col-lg-4 -->
                                                    </div><!-- end row -->
                                                </div><!-- end rate-option -->
                                                <div class="contact-form-action">
                                                    <form method="post">
                                                        <div class="row">
                                                            <div class="col-lg-6 responsive-column">
                                                                <div class="input-box">
                                                                    <label class="label-text">Name</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-user form-icon"></span>
                                                                        <input class="form-control" type="text" name="text" placeholder="Your name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 responsive-column">
                                                                <div class="input-box">
                                                                    <label class="label-text">Email</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-envelope-o form-icon"></span>
                                                                        <input class="form-control" type="email" name="email" placeholder="Email address">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="input-box">
                                                                    <label class="label-text">Message</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-pencil form-icon"></span>
                                                                        <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="btn-box">
                                                                    <button type="button" class="theme-btn">Leave a Review</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div><!-- end contact-form-action -->
                                            </div><!-- end form-content -->
                                        </div><!-- end form-box -->
                                    </div><!-- end comment-forum -->
                                </div><!-- end single-content-item -->
                            </div><!-- end review-box -->
                        </div><!-- end single-content-wrap -->
                    </div><!-- end col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar single-content-sidebar mb-0">
                            <div class="sidebar-widget single-content-widget">
                                <div class="sidebar-widget-item">
                                    <div class="sidebar-book-title-wrap mb-3">
                                        <h3>Popular</h3>
                                        <p><span class="text-form">From</span><span class="text-value ml-2 mr-1">$24.00<small class="font-size-15 font-weight-bold ml-1 color-text-3">/day</small></span> <span class="before-price">$30.00</span></p>
                                    </div>
                                </div><!-- end sidebar-widget-item -->
                                <div class="sidebar-widget-item">
                                    <div class="contact-form-action">
                                        <form action="#">
                                            <div class="input-box">
                                                <label class="label-text">Pick-up From</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text" name="text" placeholder="Destination, city, or airport">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Drop-off to</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text" name="text" placeholder="Destination, city, or airport">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Pick-up Date</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Time</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="1200AM">12:00AM</option>
                                                            <option value="1230AM">12:30AM</option>
                                                            <option value="0100AM">1:00AM</option>
                                                            <option value="0130AM">1:30AM</option>
                                                            <option value="0200AM">2:00AM</option>
                                                            <option value="0230AM">2:30AM</option>
                                                            <option value="0300AM">3:00AM</option>
                                                            <option value="0330AM">3:30AM</option>
                                                            <option value="0400AM">4:00AM</option>
                                                            <option value="0430AM">4:30AM</option>
                                                            <option value="0500AM">5:00AM</option>
                                                            <option value="0530AM">5:30AM</option>
                                                            <option value="0600AM">6:00AM</option>
                                                            <option value="0630AM">6:30AM</option>
                                                            <option value="0700AM">7:00AM</option>
                                                            <option value="0730AM">7:30AM</option>
                                                            <option value="0800AM">8:00AM</option>
                                                            <option value="0830AM">8:30AM</option>
                                                            <option value="0900AM" selected>9:00AM</option>
                                                            <option value="0930AM">9:30AM</option>
                                                            <option value="1000AM">10:00AM</option>
                                                            <option value="1030AM">10:30AM</option>
                                                            <option value="1100AM">11:00AM</option>
                                                            <option value="1130AM">11:30AM</option>
                                                            <option value="1200PM">12:00PM</option>
                                                            <option value="1230PM">12:30PM</option>
                                                            <option value="0100PM">1:00PM</option>
                                                            <option value="0130PM">1:30PM</option>
                                                            <option value="0200PM">2:00PM</option>
                                                            <option value="0230PM">2:30PM</option>
                                                            <option value="0300PM">3:00PM</option>
                                                            <option value="0330PM">3:30PM</option>
                                                            <option value="0400PM">4:00PM</option>
                                                            <option value="0430PM">4:30PM</option>
                                                            <option value="0500PM">5:00PM</option>
                                                            <option value="0530PM">5:30PM</option>
                                                            <option value="0600PM">6:00PM</option>
                                                            <option value="0630PM">6:30PM</option>
                                                            <option value="0700PM">7:00PM</option>
                                                            <option value="0730PM">7:30PM</option>
                                                            <option value="0800PM">8:00PM</option>
                                                            <option value="0830PM">8:30PM</option>
                                                            <option value="0900PM">9:00PM</option>
                                                            <option value="0930PM">9:30PM</option>
                                                            <option value="1000PM">10:00PM</option>
                                                            <option value="1030PM">10:30PM</option>
                                                            <option value="1100PM">11:00PM</option>
                                                            <option value="1130PM">11:30PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Drop-off Date</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end sidebar-widget-item -->
                                <div class="main-search-input-item">
                                    <div class="contact-form-action">
                                        <form action="#">
                                            <div class="input-box">
                                                <label class="label-text">Time</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="1200AM">12:00AM</option>
                                                            <option value="1230AM">12:30AM</option>
                                                            <option value="0100AM">1:00AM</option>
                                                            <option value="0130AM">1:30AM</option>
                                                            <option value="0200AM">2:00AM</option>
                                                            <option value="0230AM">2:30AM</option>
                                                            <option value="0300AM">3:00AM</option>
                                                            <option value="0330AM">3:30AM</option>
                                                            <option value="0400AM">4:00AM</option>
                                                            <option value="0430AM">4:30AM</option>
                                                            <option value="0500AM">5:00AM</option>
                                                            <option value="0530AM">5:30AM</option>
                                                            <option value="0600AM">6:00AM</option>
                                                            <option value="0630AM">6:30AM</option>
                                                            <option value="0700AM">7:00AM</option>
                                                            <option value="0730AM">7:30AM</option>
                                                            <option value="0800AM">8:00AM</option>
                                                            <option value="0830AM">8:30AM</option>
                                                            <option value="0900AM" selected>9:00AM</option>
                                                            <option value="0930AM">9:30AM</option>
                                                            <option value="1000AM">10:00AM</option>
                                                            <option value="1030AM">10:30AM</option>
                                                            <option value="1100AM">11:00AM</option>
                                                            <option value="1130AM">11:30AM</option>
                                                            <option value="1200PM">12:00PM</option>
                                                            <option value="1230PM">12:30PM</option>
                                                            <option value="0100PM">1:00PM</option>
                                                            <option value="0130PM">1:30PM</option>
                                                            <option value="0200PM">2:00PM</option>
                                                            <option value="0230PM">2:30PM</option>
                                                            <option value="0300PM">3:00PM</option>
                                                            <option value="0330PM">3:30PM</option>
                                                            <option value="0400PM">4:00PM</option>
                                                            <option value="0430PM">4:30PM</option>
                                                            <option value="0500PM">5:00PM</option>
                                                            <option value="0530PM">5:30PM</option>
                                                            <option value="0600PM">6:00PM</option>
                                                            <option value="0630PM">6:30PM</option>
                                                            <option value="0700PM">7:00PM</option>
                                                            <option value="0730PM">7:30PM</option>
                                                            <option value="0800PM">8:00PM</option>
                                                            <option value="0830PM">8:30PM</option>
                                                            <option value="0900PM">9:00PM</option>
                                                            <option value="0930PM">9:30PM</option>
                                                            <option value="1000PM">10:00PM</option>
                                                            <option value="1030PM">10:30PM</option>
                                                            <option value="1100PM">11:00PM</option>
                                                            <option value="1130PM">11:30PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <div class="form-group">
                                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                                        <label class="font-size-16 color-text-2">Passengers</label>
                                                        <div class="qtyBtn d-flex align-items-center">
                                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                                            <input type="text" name="qtyInput" value="0">
                                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                                        </div>
                                                    </div><!-- end qty-box -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end main-search-input-item -->
                                <div class="btn-box pt-2">
                                    <a href="/transfer/booking" class="theme-btn text-center w-100 mb-2"><i class="la la-shopping-cart mr-2 font-size-18"></i>Book Now</a>
                                    <a href="#" class="theme-btn text-center w-100 theme-btn-transparent"><i class="la la-heart-o mr-2"></i>Add to Wishlist</a>
                                    <div class="d-flex align-items-center justify-content-between pt-2">
                                        <a href="#" class="btn theme-btn-hover-gray font-size-15" data-toggle="modal" data-target="#sharePopupForm"><i class="la la-share mr-1"></i>Share</a>
                                        <p><i class="la la-eye mr-1 font-size-15 color-text-2"></i>3456</p>
                                    </div>
                                </div>
                            </div><!-- end sidebar-widget -->
                            <div class="sidebar-widget single-content-widget">
                                <h3 class="title stroke-shape">Enquiry Form</h3>
                                <div class="enquiry-forum">
                                    <div class="form-box">
                                        <div class="form-content">
                                            <div class="contact-form-action">
                                                <form method="post">
                                                    <div class="input-box">
                                                        <label class="label-text">Your Name</label>
                                                        <div class="form-group">
                                                            <span class="la la-user form-icon"></span>
                                                            <input class="form-control" type="text" name="text" placeholder="Your name">
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label class="label-text">Your Email</label>
                                                        <div class="form-group">
                                                            <span class="la la-envelope-o form-icon"></span>
                                                            <input class="form-control" type="email" name="email" placeholder="Email address">
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label class="label-text">Message</label>
                                                        <div class="form-group">
                                                            <span class="la la-pencil form-icon"></span>
                                                            <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <div class="form-group">
                                                            <div class="custom-checkbox mb-0">
                                                                <input type="checkbox" id="agreechb">
                                                                <label for="agreechb">I agree with <a href="#">Terms of Service</a> and
                                                                    <a href="#">Privacy Statement</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-box">
                                                        <button type="button" class="theme-btn">Submit Enquiry</button>
                                                    </div>
                                                </form>
                                            </div><!-- end contact-form-action -->
                                        </div><!-- end form-content -->
                                    </div><!-- end form-box -->
                                </div><!-- end enquiry-forum -->
                            </div><!-- end sidebar-widget -->
                            <div class="sidebar-widget single-content-widget">
                                <h3 class="title stroke-shape">Why Book With Us?</h3>
                                <div class="sidebar-list">
                                    <ul class="list-items">
                                        <li><i class="la la-dollar icon-element mr-2"></i>No-hassle best price guarantee</li>
                                        <li><i class="la la-microphone icon-element mr-2"></i>Customer care available 24/7</li>
                                        <li><i class="la la-thumbs-up icon-element mr-2"></i>Hand-picked Tours & Activities</li>
                                        <li><i class="la la-file-text icon-element mr-2"></i>Free Travel Insureance</li>
                                    </ul>
                                </div><!-- end sidebar-list -->
                            </div><!-- end sidebar-widget -->
                            <div class="sidebar-widget single-content-widget">
                                <h3 class="title stroke-shape">Get a Question?</h3>
                                <p class="font-size-14 line-height-24">Do not hesitate to give us a call. We are an expert team and we are happy to talk to you.</p>
                                <div class="sidebar-list pt-3">
                                    <ul class="list-items">
                                        <li><i class="la la-phone icon-element mr-2"></i><a href="#">+ 61 23 8093 3400</a></li>
                                        <li><i class="la la-envelope icon-element mr-2"></i><a href="mailto:info@trizen.com">info@trizen.com</a></li>
                                    </ul>
                                </div><!-- end sidebar-list -->
                            </div><!-- end sidebar-widget -->
                            <div class="sidebar-widget single-content-widget">
                                <h3 class="title stroke-shape">Organized by</h3>
                                <div class="author-content">
                                    <div class="d-flex">
                                        <div class="author-img">
                                            <a href="#"><img src="{{ asset('assets/images/team8.jpg') }}" alt="testimonial image"></a>
                                        </div>
                                        <div class="author-bio">
                                            <h4 class="author__title"><a href="#">royaltravelagency</a></h4>
                                            <span class="author__meta">Member Since 2017</span>
                                            <span class="ratings d-flex align-items-center">
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star-o"></i>
                                                <span class="ml-2">305 Reviews</span>
                                            </span>
                                            <div class="btn-box pt-3">
                                                <a href="#" class="theme-btn theme-btn-small theme-btn-transparent">Ask a Question</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end sidebar-widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col-lg-4 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end single-content-box -->
    </section><!-- end car-detail-area -->
    <!-- ================================
        END CAR DETAIL AREA
    ================================= -->

    <div class="section-block"></div>

    <!-- ================================
        START RELATED AREA
    ================================= -->
    <section class="related-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">You might also like</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-4 responsive-column">
                    <div class="card-item car-card">
                        <div class="card-img">
                            <a href="/transfer/details" class="d-block">
                                <img src="{{ asset('assets/images/car-img.png') }}" alt="car-img">
                            </a>
                            <span class="badge">Bestseller</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Save for later">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">Compact SUV</p>
                            <h3 class="card-title"><a href="/transfer/details">Toyota Corolla or Similar</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>4</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>1</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$23.00</span>
                                    <span class="price__text">Per day</span>
                                </p>
                                <a href="/transfer/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item car-card">
                        <div class="card-img">
                            <a href="/transfer/details" class="d-block">
                                <img src="{{ asset('assets/images/car-img2.png') }}" alt="car-img">
                            </a>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Save for later">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">Standard</p>
                            <h3 class="card-title"><a href="/transfer/details">Volkswagen Jetta 2 Doors or Similar</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>4</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>1</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$33.00</span>
                                    <span class="price__text">Per day</span>
                                </p>
                                <a href="/transfer/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item car-card">
                        <div class="card-img">
                            <a href="/transfer/details" class="d-block">
                                <img src="{{ asset('assets/images/car-img3.png') }}" alt="car-img">
                            </a>
                            <span class="badge">featured</span>
                            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Save for later">
                                <i class="la la-heart-o"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-meta">Compact Elite</p>
                            <h3 class="card-title"><a href="/transfer/details">Toyota Yaris or Similar</a></h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-attributes">
                                <ul class="d-flex align-items-center">
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>4</span></li>
                                    <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>1</span></li>
                                </ul>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">$23.00</span>
                                    <span class="price__text">Per day</span>
                                </p>
                                <a href="/transfer/details" class="btn-text">See details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end related-area -->
    <!-- ================================
        END RELATED AREA
    ================================= -->

    <!-- ================================
        START CTA AREA
    ================================= -->
    <section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-heading">
                        <h2 class="sec__title font-size-30 text-white">Subscribe to see Secret Deals</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="subscriber-box">
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="input-box">
                                    <label class="label-text text-white">Enter email address</label>
                                    <div class="form-group mb-0">
                                        <span class="la la-envelope form-icon"></span>
                                        <input class="form-control" type="email" name="email" placeholder="Email address">
                                        <button class="theme-btn theme-btn-small submit-btn" type="submit">Subscribe</button>
                                        <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Don't worry your information is safe with us.</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end cta-area -->
    <!-- ================================
        END CTA AREA
    ================================= -->
@endsection