@extends('layouts.app')
@section('content')

    <!-- Start main -->
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
                            <li>Galveston, Texas</li>
                            <li>7 Nights Caribbean Southern Cruise</li>
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
    <section class="breadcrumb-area bread-bg-4 py-0">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-btn">
                            <div class="btn-box">
                                <a class="theme-btn" data-fancybox="video" data-src="https://www.youtube.com/watch?v=S5WFxUDs0pE"
                                data-speed="700">
                                    <i class="la la-video-camera mr-2"></i>Video
                                </a>
                                <a class="theme-btn" data-src="{{ asset('assets/images/cruise-img.jpg') }}"
                                data-fancybox="gallery"
                                data-caption="Showing image - 01"
                                data-speed="700">
                                    <i class="la la-photo mr-2"></i>More Photos
                                </a>
                            </div>
                            <a class="d-none"
                                data-fancybox="gallery"
                                data-src="{{ asset('assets/images/cruise-img2.jpg') }}"
                                data-caption="Showing image - 02"
                                data-speed="700"></a>
                            <a class="d-none"
                                data-fancybox="gallery"
                                data-src="{{ asset('assets/images/cruise-img4.jpg') }}"
                                data-caption="Showing image - 03"
                                data-speed="700"></a>
                            <a class="d-none"
                                data-fancybox="gallery"
                                data-src="{{ asset('assets/images/cruise-img5.jpg') }}"
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
        START CRUISE DETAIL AREA
    ================================= -->
    <section class="cruise-detail-area padding-bottom-90px">
        <div class="single-content-navbar-wrap menu section-bg" id="single-content-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content-nav" id="single-content-nav">
                            <ul>
                                <li><a data-scroll="description" href="#description" class="scroll-link active">About This ship</a></li>
                                <li><a data-scroll="itinerary" href="#itinerary" class="scroll-link">Itinerary</a></li>
                                <li><a data-scroll="staterooms" href="#staterooms" class="scroll-link">Staterooms</a></li>
                                <li><a data-scroll="faq" href="#faq" class="scroll-link">FAQ</a></li>
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
                                    <h3 class="title font-size-26">7 Nights Caribbean Southern Cruise</h3>
                                    <div class="d-flex flex-wrap align-items-center pt-2">
                                        <p class="mr-2">Galveston, Texas</p>
                                        <p>
                                            <span class="badge badge-warning text-white font-size-16">4.6</span>
                                            <span>(4,209 Reviews)</span>
                                        </p>
                                    </div>
                                </div><!-- end single-content-item -->
                                <div class="section-block"></div>
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Description</h3>
                                    <p class="pt-3">Per consequat adolescens ex, cu nibh commune temporibus vim, ad sumo viris eloquentiam sed. Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                                </div><!-- end single-content-item -->
                                <div class="single-content-item padding-bottom-30px">
                                    <h3 class="title font-size-20">Ship Statistics</h3>
                                    <div class="row pt-4">
                                        <div class="col-lg-6 responsive-column">
                                            <ul class="list-items list-items-2">
                                                <li><span>Date Launched:</span>1989</li>
                                                <li><span>Age of Ship:</span>29 years</li>
                                                <li><span>Refurbished Date:</span>01/01/2017</li>
                                                <li><span>Tonnage:</span>93,558 grt</li>
                                                <li><span>Length:</span>965 ft</li>
                                                <li><span>Beam:</span>105 ft</li>
                                                <li><span>Draft:</span>28 ft</li>
                                                <li><span>Speed:</span>22.5 knots</li>
                                            </ul><!-- end list-items -->
                                        </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column">
                                            <ul class="list-items list-items-2">
                                                <li><span>Guest Capacity:</span>23,400</li>
                                                <li><span>Total Staff:</span>9,078 crew</li>
                                                <li><span>Officers:</span>Italian</li>
                                                <li><span>Dining Crew:</span>International</li>
                                                <li><span>Other Crew:</span>International</li>
                                                <li><span>Registry:</span>Panama</li>
                                                <li><span>Ship Type:</span>Luxury Cruise</li>
                                            </ul><!-- end list-items -->
                                        </div><!-- end col-lg-6 -->
                                    </div><!-- end row -->
                                </div><!-- end single-content-item -->
                                <div class="single-content-item padding-bottom-40px">
                                    <h3 class="title font-size-20 d-flex align-items-center justify-content-between">
                                        What's Included
                                        <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#viewIncludedExample" role="button" aria-expanded="false" aria-controls="viewIncludedExample">
                                            View<i class="la la-angle-down ml-1"></i>
                                        </a>
                                    </h3>
                                    <div class="collapse" id="viewIncludedExample">
                                        <div class="cruise-included-feature-wrap">
                                            <div class="cruise-include-feature pt-3">
                                                <h3 class="title font-size-15 font-weight-medium pb-2">Included</h3>
                                                <p class="pb-3 font-size-15">Unless otherwise indicated on your itinerary, a Holland America Line includes the following on final confirmation. Taxes and fees are typically not included in the advertised price, but included in your final booking prices.</p>
                                                <ul class="list-items">
                                                    <li><i class="la la-check text-success mr-2"></i>Your choice of inside, oceanview, balcony or suite accommodations</li>
                                                    <li><i class="la la-check text-success mr-2"></i>All meals onboard including 24 hour room service</li>
                                                    <li><i class="la la-check text-success mr-2"></i>Coffee, tea, milk, juice and non-bottled water</li>
                                                    <li><i class="la la-check text-success mr-2"></i>Onboard entertainment including shows, discos, comedy clubs, bars, lounges, etc.</li>
                                                    <li><i class="la la-check text-success mr-2"></i>Age appropriate kids programming for toddlers, kids, and teens.</li>
                                                    <li><i class="la la-check text-success mr-2"></i>Use of all fitness facilities, pools, hot tubs, sports courts, etc.</li>
                                                    <li><i class="la la-check text-success mr-2"></i>Taxes and Fees (included in the final price but typically not advertised price)</li>
                                                </ul>
                                            </div>
                                            <div class="cruise-include-feature pt-3">
                                                <h3 class="title font-size-15 font-weight-medium pb-2">Not Included</h3>
                                                <p class="pb-3 font-size-15">Unless otherwise indicated above or on your final confirmation, your cruise price does not include:</p>
                                                <ul class="list-items">
                                                    <li><i class="la la-times text-danger mr-2"></i>Airfare and transfers to the ship</li>
                                                    <li><i class="la la-times text-danger mr-2"></i>Gratuities</li>
                                                    <li><i class="la la-times text-danger mr-2"></i>Casino gambling or Bingo</li>
                                                    <li><i class="la la-times text-danger mr-2"></i>Meals in any alternative or special dining restaurants or venues</li>
                                                    <li><i class="la la-times text-danger mr-2"></i>Soft drinks, bottled water, specialty coffees, or alcoholic beverages including beer, wine, spirits.</li>
                                                    <li><i class="la la-times text-danger mr-2"></i>Shore Excursions and sightseeing tours</li>
                                                    <li><i class="la la-times text-danger mr-2"></i>Spa or Salon Services</li>
                                                    <li><i class="la la-times text-danger mr-2"></i>Items of a personal nature like souvenirs, photos</li>
                                                    <li><i class="la la-times text-danger mr-2"></i>Internet access</li>
                                                    <li><i class="la la-times text-danger mr-2"></i>Travel Insurance (recommended)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end single-content-item -->
                                <div class="single-content-item">
                                    <h3 class="title font-size-20 d-flex align-items-center justify-content-between">
                                        Ship Amenities
                                        <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#viewAmenitiesExample" role="button" aria-expanded="false" aria-controls="viewAmenitiesExample">
                                            View Amenities<i class="la la-angle-down ml-1"></i>
                                        </a>
                                    </h3>
                                    <div class="collapse" id="viewAmenitiesExample">
                                        <div class="row pt-4">
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-glass"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Bars and Lounges</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Bars and Lounges</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Disco / Night Club</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Library</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Piano Bar</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Wine / Champagne Bar</li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-music"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Entertainment and Nightlife</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Bars and Lounges</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Broadway / Las Vegas Style Productions</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Disco / Night Club</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Movie Theater / Cinema</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Piano Bar</li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-users"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Groups and Meetings</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Business Center</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Conference / Meeting Rooms</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Private Dining Room</li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-wifi"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Internet and Communications</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Computer Classes</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Internet Center</li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-users"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Kids and Family</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Age Group Specific Youth Programs</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Arcade / Video Games</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Childrens' Play Area</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Connecting Staterooms</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Dedicated Teen Center</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Family Staterooms</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Group Babysitting</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Private Babysitting</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Sports Court</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Teen Staff</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Youth Staff</li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-gear"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Other Facilities and Services</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Concierge Desk</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Dry Cleaning / Laundry Service</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Elevators</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Infirmary / Medical Center</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Self Service Laundry</li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-swimming-pool"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Pools & Hot Tubs</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Hot Tubs</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Outdoor Pool</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Solarium</li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-cutlery"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Restaurants and Dining</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Culinary Programs</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Private Dining Room</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Special Diets</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Specialty Restaurants</li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-bars"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Shipboard Activities</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Shopping</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Arcade / Video Games</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Basketball</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Card Room / Game Room</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Casino</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Computer Classes</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Culinary Programs</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Movie Theater / Cinema</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Sports Court</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Tennis</li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-spa"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Spas and Wellness</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Beauty Salon</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Full Service Spa</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Health / Nutrition Evaluations</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Medspa Services</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Sauna / Steam Room</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Yoga</li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-wheelchair"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Special Needs</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Accessible Gaming</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Accessible Public Areas</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Accessible Showrooms</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Accessible Staterooms</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Accessible Tendering</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Auditory Assistance (TTY/TTD)</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Braille Signage</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Close Captioned TV</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Decks with Ramps</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Elevators to Accommodate Wheelchairs </li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Oxygen</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Sharps Disposal</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Special Diets</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Visual Assistance (Visually Impaired) </li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Wheelchairs Accepted </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-gamepad"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Sports and Fitness</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Aerobics</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Basketball</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Fitness Center / Gym</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Health / Nutrition Evaluations</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Jogging Track</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Pilates</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Sauna / Steam Room</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Sports Court</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Tennis</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Yoga</li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-bed"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Staterooms and Suites</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Accessible Staterooms</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Concierge Services</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Connecting Staterooms</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Exclusive Suite Area</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Family Staterooms</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>In-Room Movies</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>In-Room Safe</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Priority Check-In & Boarding for Suite Guests</li>
                                                            <li><i class="la la-check mr-2 text-success"></i>Refrigerator in Staterooms</li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6 responsive-column">
                                                <div class="single-tour-feature d-flex mb-3">
                                                    <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                        <i class="la la-lightbulb"></i>
                                                    </div>
                                                    <div class="single-feature-titles">
                                                        <h3 class="title font-size-15 font-weight-medium pb-2">Weddings & Special Occasions</h3>
                                                        <ul class="list-items">
                                                            <li><i class="la la-check mr-2 text-success"></i>Private Dining Room</li>
                                                        </ul>
                                                    </div>
                                                </div><!-- end single-tour-feature -->
                                            </div><!-- end col-lg-6 -->
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end single-content-item -->
                            </div><!-- end description -->
                            <div id="itinerary" class="page-scroll">
                                <div class="section-block margin-top-40px"></div>
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Cruise itinerary</h3>
                                <div class="table-form table-responsive padding-top-30px">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Days</th>
                                                <th scope="col">Ports of Call</th>
                                                <th scope="col">Arrival</th>
                                                <th scope="col">Departure</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Day 1</th>
                                                <td>
                                                    <div class="table-content d-flex align-items-center">
                                                        <img src="{{ asset('assets/images/small-img4.jpg') }}" alt="" class="flex-shrink-0">
                                                        <h3 class="title">Miami, Florida</h3>
                                                    </div>
                                                </td>
                                                <td>4:00 AM</td>
                                                <td>8:00 PM</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Day 2</th>
                                                <td>
                                                    <div class="table-content d-flex align-items-center">
                                                        <img src="{{ asset('assets/images/small-img5.jpg') }}" alt="" class="flex-shrink-0">
                                                        <h3 class="title">At Sea</h3>
                                                    </div>
                                                </td>
                                                <td>4:00 AM</td>
                                                <td>8:00 PM</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Day 3</th>
                                                <td>
                                                    <div class="table-content d-flex align-items-center">
                                                        <img src="{{ asset('assets/images/small-img5.jpg') }}" alt="" class="flex-shrink-0">
                                                        <h3 class="title">At Sea</h3>
                                                    </div>
                                                </td>
                                                <td>4:00 AM</td>
                                                <td>8:00 PM</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Day 4</th>
                                                <td>
                                                    <div class="table-content d-flex align-items-center">
                                                        <img src="{{ asset('assets/images/small-img6.jpg') }}" alt="" class="flex-shrink-0">
                                                        <h3 class="title">Philipsburg, Sint Maarten, Netherlands Antilles</h3>
                                                    </div>
                                                </td>
                                                <td>4:00 AM</td>
                                                <td>8:00 PM</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Day 5</th>
                                                <td>
                                                    <div class="table-content d-flex align-items-center">
                                                        <img src="{{ asset('assets/images/small-img7.jpg') }}" alt="" class="flex-shrink-0">
                                                        <h3 class="title">St. Thomas, USVI</h3>
                                                    </div>
                                                </td>
                                                <td>4:00 AM</td>
                                                <td>8:00 PM</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Day 6</th>
                                                <td>
                                                    <div class="table-content d-flex align-items-center">
                                                        <img src="{{ asset('assets/images/small-img5.jpg') }}" alt="" class="flex-shrink-0">
                                                        <h3 class="title">At Sea</h3>
                                                    </div>
                                                </td>
                                                <td>4:00 AM</td>
                                                <td>8:00 PM</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Day 7</th>
                                                <td>
                                                    <div class="table-content d-flex align-items-center">
                                                        <img src="{{ asset('assets/images/small-img8.jpg') }}" alt="" class="flex-shrink-0">
                                                        <h3 class="title">Miami, Florida</h3>
                                                    </div>
                                                </td>
                                                <td>4:00 AM</td>
                                                <td>8:00 PM</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="font-size-14 line-height-26"><strong class="text-black">Please note:</strong> While we do our best to adhere to our published itineraries, they may be changed at the discretion of the captain due to weather advisories, port traffic, and any other unforeseeable circumstances.</p>
                                </div>
                                </div><!-- end single-content-item -->
                                <div class="section-block"></div>
                            </div><!-- end itinerary -->
                            <div id="staterooms" class="page-scroll">
                                <div class="single-content-item padding-top-40px padding-bottom-30px">
                                    <h3 class="title font-size-20">Date Availability</h3>
                                    <div class="table-form table-layout-2 table-responsive padding-top-30px">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Inside</th>
                                                <th scope="col">Oceanview</th>
                                                <th scope="col">Balcony</th>
                                                <th scope="col">Suite</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <label for="radio-1" class="radio-trigger mb-0 font-size-15">
                                                        <input type="radio" id="radio-1" name="radio">
                                                        <span class="checkmark"></span>
                                                        <span>April 4 - 11, 2020</span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$217</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$317</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$417</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$517</h3>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <label for="radio-2" class="radio-trigger mb-0 font-size-15">
                                                        <input type="radio" id="radio-2" name="radio">
                                                        <span class="checkmark"></span>
                                                        <span>April 4 - 11, 2020</span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$299</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$399</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$499</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$599</h3>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <label for="radio-3" class="radio-trigger mb-0 font-size-15">
                                                        <input type="radio" id="radio-3" name="radio">
                                                        <span class="checkmark"></span>
                                                        <span>April 4 - 11, 2020</span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$220</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$320</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$420</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$520</h3>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <label for="radio-4" class="radio-trigger mb-0 font-size-15">
                                                        <input type="radio" id="radio-4" name="radio">
                                                        <span class="checkmark"></span>
                                                        <span>April 4 - 11, 2020</span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$238</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$338</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$438</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$538</h3>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <label for="radio-5" class="radio-trigger mb-0 font-size-15">
                                                        <input type="radio" id="radio-5" name="radio">
                                                        <span class="checkmark"></span>
                                                        <span>April 4 - 11, 2020</span>
                                                    </label>
                                                </th>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$238</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$338</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$438</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content d-flex">
                                                        <span class="mr-1">from</span>
                                                        <h3 class="title table-price">$538</h3>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end single-content-item -->
                                <div class="section-block"></div>
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Select a Cabin Type</h3>
                                    <div class="cabin-type padding-top-30px">
                                        <h3 class="title font-size-16">Inside Cabins</h3>
                                        <div class="cabin-type-item d-flex pt-4">
                                            <div class="cabin-type-img flex-shrink-0">
                                                <img src="{{ asset('assets/images/inside-cabin.jpg') }}" alt="">
                                            </div>
                                        <div class="cabin-type-detail">
                                                <h3 class="title">Guarantee - Interior Stateroom</h3>
                                            <ul class="list-items pt-2 pb-2">
                                                <li><span>Square footage:</span>139-226 sq ft</li>
                                                <li><span>Occupancy:</span>Up to 2 guests (some sleep up to 4)</li>
                                                <li><span>Amenities:</span>Double bed that can be converted to two single beds on request, bathrobes, spacious closet, bathroom with shower, interactive TV, mini bar, safe, and telephone.</li>
                                            </ul>
                                        </div>
                                        <div class="cabin-price">
                                            <ul>
                                                <li><span class="badge badge-warning text-white">Up to 40% off</span></li>
                                                <li>from<strong class="ml-1 text-black">$217</strong><span class="before-price ml-1">$299</span></li>
                                                <li class="font-size-13 mt-n2">per person*</li>
                                            </ul>
                                            <div class="custom-checkbox mb-0">
                                                <input type="checkbox" id="chb2">
                                                <label for="chb2" class="theme-btn theme-btn-small">Select</label>
                                            </div>
                                        </div>
                                        </div><!-- end cabin-type-item -->
                                    </div><!-- end cabin-type -->
                                    <div class="cabin-type padding-top-30px">
                                        <h3 class="title font-size-16">Oceanview Cabins</h3>
                                        <div class="cabin-type-item d-flex pt-4">
                                            <div class="cabin-type-img flex-shrink-0">
                                                <img src="{{ asset('assets/images/oceanview-cabin.jpg') }}" alt="">
                                            </div>
                                            <div class="cabin-type-detail">
                                                <h3 class="title">Guarantee - Oceanview Stateroom</h3>
                                                <ul class="list-items pt-2 pb-2">
                                                    <li><span>Square footage:</span>139-226 sq ft</li>
                                                    <li><span>Occupancy:</span>Up to 2 guests (some sleep up to 4)</li>
                                                    <li><span>Amenities:</span>Double bed that can be converted to two single beds on request, bathrobes, spacious closet, bathroom with shower, interactive TV, mini bar, safe, and telephone.</li>
                                                </ul>
                                            </div>
                                            <div class="cabin-price">
                                                <ul>
                                                    <li><span class="badge badge-warning text-white">Up to 40% off</span></li>
                                                    <li>from<strong class="ml-1 text-black">$317</strong><span class="before-price ml-1">$399</span></li>
                                                    <li class="font-size-13 mt-n2">per person*</li>
                                                </ul>
                                                <div class="custom-checkbox mb-0">
                                                    <input type="checkbox" id="chb4">
                                                    <label for="chb4" class="theme-btn theme-btn-small">Select</label>
                                                </div>
                                            </div>
                                        </div><!-- end cabin-type-item -->
                                    </div><!-- end cabin-type -->
                                    <div class="cabin-type padding-top-30px">
                                        <h3 class="title font-size-16">Balcony Cabins</h3>
                                        <div class="cabin-type-item d-flex pt-4">
                                            <div class="cabin-type-img flex-shrink-0">
                                                <img src="{{ asset('assets/images/balcony-cabin.jpg') }}" alt="">
                                            </div>
                                            <div class="cabin-type-detail">
                                                <h3 class="title">Guarantee - Balcony Stateroom</h3>
                                                <ul class="list-items pt-2 pb-2">
                                                    <li><span>Square footage:</span>139-226 sq ft</li>
                                                    <li><span>Occupancy:</span>Up to 2 guests (some sleep up to 4)</li>
                                                    <li><span>Amenities:</span>Double bed that can be converted to two single beds on request, bathrobes, spacious closet, bathroom with shower, interactive TV, mini bar, safe, and telephone.</li>
                                                </ul>
                                            </div>
                                            <div class="cabin-price">
                                                <ul>
                                                    <li><span class="badge badge-warning text-white">Up to 40% off</span></li>
                                                    <li>from<strong class="ml-1 text-black">$417</strong><span class="before-price ml-1">$499</span></li>
                                                    <li class="font-size-13 mt-n2">per person*</li>
                                                </ul>
                                                <div class="custom-checkbox mb-0">
                                                    <input type="checkbox" id="chb5">
                                                    <label for="chb5" class="theme-btn theme-btn-small">Select</label>
                                                </div>
                                            </div>
                                        </div><!-- end cabin-type-item -->
                                    </div><!-- end cabin-type -->
                                    <div class="cabin-type padding-top-30px">
                                        <h3 class="title font-size-16">Suite Cabins</h3>
                                        <div class="cabin-type-item d-flex pt-4">
                                            <div class="cabin-type-img flex-shrink-0">
                                                <img src="{{ asset('assets/images/suite-cabin.jpg') }}" alt="">
                                            </div>
                                            <div class="cabin-type-detail">
                                                <h3 class="title">Suite – Aurea</h3>
                                                <ul class="list-items pt-2 pb-2">
                                                    <li><span>Square footage:</span>139-226 sq ft</li>
                                                    <li><span>Occupancy:</span>Up to 2 guests (some sleep up to 4)</li>
                                                    <li><span>Amenities:</span>Double bed that can be converted to two single beds on request, bathrobes, spacious closet, bathroom with shower, interactive TV, mini bar, safe, and telephone.</li>
                                                </ul>
                                            </div>
                                            <div class="cabin-price">
                                                <ul>
                                                    <li><span class="badge badge-warning text-white">Up to 40% off</span></li>
                                                    <li>from<strong class="ml-1 text-black">$517</strong><span class="before-price ml-1">$599</span></li>
                                                    <li class="font-size-13 mt-n2">per person*</li>
                                                </ul>
                                                <div class="custom-checkbox mb-0">
                                                    <input type="checkbox" id="chb6">
                                                    <label for="chb6" class="theme-btn theme-btn-small">Select</label>
                                                </div>
                                            </div>
                                        </div><!-- end cabin-type-item -->
                                    </div><!-- end cabin-type -->
                                </div><!-- end single-content-item -->
                                <p class="font-size-14 line-height-26 padding-bottom-40px"><strong class="text-black">Please note:</strong> Cabin photos shown are samples only. Actual cabin details may vary.</p>
                                <div class="section-block"></div>
                            </div><!-- end staterooms -->
                            <div id="faq" class="page-scroll">
                                <div class="single-content-item padding-top-40px padding-bottom-40px">
                                    <h3 class="title font-size-20">Policies</h3>
                                    <div class="accordion accordion-item padding-top-30px" id="accordionExample2">
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                                        <span class="ml-3">Cancellation Policy</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseOne" class="collapse show" aria-labelledby="faqHeadingOne" data-parent="#accordionExample2">
                                                <div class="card-body">
                                                    <p class="pb-2">*In instances where the deposit amount paid is higher than the 25/50/75% of cruise fare cancellation charge, then the highest of the two amounts is payable as the cancellation charge, i.e. the full deposit amount is retained.</p>
                                                    <p><strong class="text-black mr-1">Note:</strong>Cancellation Policies are subject to change at any time by the cruise line without prior notice.</p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                                        <span class="ml-3">Gratuities Information</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseTwo" class="collapse" aria-labelledby="faqHeadingTwo" data-parent="#accordionExample2">
                                                <div class="card-body">
                                                    <p class="pb-2">MSC will automatically add a $14.50 USD gratuity for standard staterooms, $17.50 USD for Suite guests, to each guest's SeaPass® account on a daily basis. Gratuities apply to all guests of all ages.</p>
                                                    <p><strong class="text-black mr-1">Note:</strong> Details, ship facts, policies, images and descriptions are gathered for information only and subject to change without notice. Images and descriptions displayed are subject to change at any time without notice. Actual details, design and configuration may vary.</p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingThree">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                                        <span class="ml-3">Pregnancy Policy</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseThree" class="collapse" aria-labelledby="faqHeadingThree" data-parent="#accordionExample2">
                                                <div class="card-body">
                                                    <p class="pb-2">MSC cannot accept guests who will have entered their 24th week of pregnancy by the beginning of, or at any time during the cruise or cruisetour. A physician's "Fit to Travel" note is required prior to sailing, stating how far along (in weeks) your pregnancy will be at the beginning of the cruise and confirming that you are in good health and not experiencing a high-risk pregnancy.</p>
                                                    <p><strong class="text-black mr-1">Note:</strong>Details, ship facts, policies, images and descriptions are gathered for information only and subject to change without notice. Images and descriptions displayed are subject to change at any time without notice. Actual details, design and configuration may vary.</p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingFour">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                                        <span class="ml-3">MinorAccompany</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseFour" class="collapse" aria-labelledby="faqHeadingFour" data-parent="#accordionExample2">
                                                <div class="card-body">
                                                    <p class="pb-2">MSC cruises are kids friendly and offer variety of activities for children every day. Day programs are divided by age groups. Children with a parent or guardian are welcome in most (not all) specialty restaurants throughout serving hours. There are kids gatherings, swimming pools, play areas and much more activities available for entertaining. </p>
                                                    <p><strong class="text-black mr-1">Babysitting Services:</strong>Babysitting is offered in groups at children's play areas. Hourly rate is applied for this service.</p>
                                                    <p><strong class="text-black mr-1">Please note:</strong>Due to public health regulations, in diapers, swim diapers, pull-ups or who are not COMPLETELY toilet trained are not allowed in the pools, whirlpools or H2O zone. Cribs for babies are not provided. </p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                        <div class="card">
                                            <div class="card-header" id="faqHeadingFive">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16" type="button" data-toggle="collapse" data-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                                                        <span class="ml-3">Smoking Policy</span>
                                                        <i class="la la-minus"></i>
                                                        <i class="la la-plus"></i>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="faqCollapseFive" class="collapse" aria-labelledby="faqHeadingFive" data-parent="#accordionExample2">
                                                <div class="card-body">
                                                    <p class="pb-2">For the comfort and enjoyment of our guests, our ships are designated as non-smoking; however, we recognize that some of our guests smoke. Therefore, to provide an onboard environment that also satisfies smokers, we have designated certain public and private areas of the ship as "smoking areas."</p>
                                                    <p class="pb-2"> Smoking in public areas is only permitted in designated smoking sections which vary by ship. Generally, smoking is permitted outdoors on only one side of the ship; and smoking is permitted on all private ocean front balconies, including Loft Suite balconies on Oasis Class. To assist in locating areas where smoking is permitted, you will find visible signage posted within all smoking areas and ashtrays that are provided for your use. The location of all smoking venues can also be found in the daily Cruise Compass; or you may contact Guest Services once onboard. </p>
                                                    <p><strong class="text-black mr-1">Please note:</strong>Details, ship facts, policies, images and descriptions are gathered for information only and subject to change without notice. Images and descriptions displayed are subject to change at any time without notice. Actual details, design and configuration may vary.</p>
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
                                                            <div class="col-lg-6">
                                                                <div class="input-box">
                                                                    <label class="label-text">Name</label>
                                                                    <div class="form-group">
                                                                        <span class="la la-user form-icon"></span>
                                                                        <input class="form-control" type="text" name="text" placeholder="Your name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
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
                                        <h3>popular</h3>
                                        <p><span class="text-form">From</span><span class="text-value ml-2 mr-1">$399.00</span> <span class="before-price">$412.00</span></p>
                                    </div>
                                </div><!-- end sidebar-widget-item -->
                                <div class="sidebar-widget-item">
                                    <div class="contact-form-action">
                                        <form action="#">
                                            <div class="input-box">
                                                <label class="label-text">Going to</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="">Select destination</option>
                                                            <optgroup label="Most Popular">
                                                                <option value="caribbean">Caribbean</option>
                                                                <option value="bahamas">Bahamas</option>
                                                                <option value="mexico">Mexico</option>
                                                                <option value="alaska">Alaska</option>
                                                                <option value="europe">Europe</option>
                                                                <option value="bermuda">Bermuda</option>
                                                                <option value="hawaii">Hawaii</option>
                                                                <option value="nepal">Nepal</option>
                                                                <option value="italy">Italy</option>
                                                                <option value="canada-new-england">Canada / New England</option>
                                                            </optgroup>
                                                            <optgroup label="Other Destinations">
                                                                <option value="arctic-antarctic">Arctic / Antarctic</option>
                                                                <option value="middle-east">Middle East</option>
                                                                <option value="africa">Africa</option>
                                                                <option value="panama-canal">Panama Canal</option>
                                                                <option value="asia">Asia</option>
                                                                <option value="pacific-coastal">Pacific Coastal</option>
                                                                <option value="australia-new-zealand">Australia / New Zealand</option>
                                                                <option value="central-america">Central America</option>
                                                                <option value="galapagos">Galapagos</option>
                                                                <option value="getaway-at-sea">Getaway at Sea</option>
                                                                <option value="transatlantic">Transatlantic</option>
                                                                <option value="world-cruise">World</option>
                                                                <option value="south-america">South America</option>
                                                                <option value="south-pacific">South Pacific</option>
                                                                <option value="transpacific">Transpacific</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text">Date</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end sidebar-widget-item -->
                                <div class="sidebar-widget-item">
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Adults <span>Age 18+</span></label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                            <input type="text" name="qtyInput" value="0">
                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                        </div>
                                    </div><!-- end qty-box -->
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Children <span>2-12 years old</span></label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                            <input type="text" name="qtyInput" value="0">
                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                        </div>
                                    </div><!-- end qty-box -->
                                    <div class="qty-box mb-2 d-flex align-items-center justify-content-between">
                                        <label class="font-size-16">Infants <span>0-2 years old</span></label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <div class="qtyDec"><i class="la la-minus"></i></div>
                                            <input type="text" name="qtyInput" value="0">
                                            <div class="qtyInc"><i class="la la-plus"></i></div>
                                        </div>
                                    </div><!-- end qty-box -->
                                </div><!-- end sidebar-widget-item -->
                                <div class="btn-box pt-2">
                                    <a href="/cruise/booking" class="theme-btn text-center w-100 mb-2"><i class="la la-shopping-cart mr-2 font-size-18"></i>Book Now</a>
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
                                                                <input type="checkbox" id="agreeChb">
                                                                <label for="agreeChb">I agree with <a href="#">Terms of Service</a> and
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
                                <div class="author-content d-flex">
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
                            </div><!-- end sidebar-widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col-lg-4 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end single-content-box -->
    </section><!-- end cruise-detail-area -->
    <!-- ================================
        END CRUISE DETAIL AREA
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
    <!-- end main -->
@endsection
