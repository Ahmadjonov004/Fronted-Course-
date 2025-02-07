@extends('front.inc.app')
@section('content')

    <!-- START HEADER NAVIGATION -->
    <div class="header-area" >
        <div class="container">
            <div class="row upper-nav">
                <div class=" text-left nav-logo">
                    <a href="{{route('shop')}}" class="navbar-brand" style="width: 200px;height: 80px; max-width: 200px;"><img style="width: 200px !important;height: 80px;" src="/logo.png" alt="img"></a>
                </div>
                <div class="ml-auto nav-mega d-flex justify-content-end align-items-center">
                    <header class="site-header" id="header">
                        <nav class="navbar navbar-expand-md  static-nav">
                            <div class="container position-relative megamenu-custom">
                                <a class="navbar-brand center-brand" href="index-book-shop.html">
                                    <img src="book-shop/img/logo.png" alt="logo" class="logo-scrolled">
                                </a>
                                <div class="collapse navbar-collapse">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index-book-shop.html">HOME</a>
                                        </li>
                                        <li class="nav-item dropdown static">
                                            <a class="nav-link dropdown-toggle active" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> BOOKS </a>
                                            <ul class="dropdown-menu megamenu flexable-megamenu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 mengmenu_border">
                                                                <h5 class="dropdown-title"> Most Wanted </h5>
                                                                <ul>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Love Does</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">No One Belongs</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">As I Lay Dying</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Life is Elsewhere</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">The Road</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Why Me?</a></li>
                                                                </ul>
                                                                <h5 class="dropdown-title"> Classic </h5>
                                                                <ul>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Lorna Doone</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Lord of Flies</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Kidnapped</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">End World</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 mengmenu_border">
                                                                <h5 class="dropdown-title"> NOVEL's </h5>
                                                                <ul>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Romance</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Fantasy</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Thrillers</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Science Fiction</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Historical Fiction</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Others</a></li>
                                                                </ul>

                                                                <h5 class="dropdown-title"> HISTORY </h5>
                                                                <ul>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Creative Thinking</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Historical Fiction</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Creative Thinking</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Personal Finance</a></li>
                                                                </ul>

                                                            </div>

                                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                                <h5 class="dropdown-title text-left">Featured Items </h5>
                                                                <div class="carousel-menu mt-4">
                                                                    <div class="featured-megamenu-carousel owl-carousel owl-theme">
                                                                        <div class="item ">
                                                                            <img src="book-shop/img/shop1.jpg" alt="shop-image" >
                                                                        </div>
                                                                        <div class="item">
                                                                            <img src="book-shop/img/shop2.jpg"  alt="shop-image">
                                                                        </div>
                                                                    </div>
                                                                    <i class="lni-chevron-left ini-customPrevBtn"></i>
                                                                    <i class="lni-chevron-right ini-customNextBtn"></i>
                                                                </div>
                                                                <p class="mt-4 megamenu-slider-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                                                <a href="book-shop/product-listing.html" class="btn black-border-color-yellow-gradient-btn slider-btn text-left">Buy Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown static">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> E-BOOKS </a>
                                            <ul class="dropdown-menu megamenu flexable-megamenu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 mengmenu_border">
                                                                <h5 class="dropdown-title bottom10"> Categories </h5>

                                                                <ul>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Art</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Autobiography</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Biography</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Chick lit</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Anthology</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Coming-of-age</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Drama</a></li>

                                                                </ul>

                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 mengmenu_border">
                                                                <h5 class="dropdown-title opacity-10"> Others </h5>
                                                                <ul>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Crime</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i> <a class="dropdown-item" href="book-shop/product-listing.html">Dictionary</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i> <a class="dropdown-item" href="book-shop/product-listing.html">Health</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">History</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Journal
                                                                        </a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Horror</a></li>
                                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Poetry</a></li>
                                                                </ul>

                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 mengmenu_border">
                                                                <h5 class="dropdown-title bottom10"> Author's </h5>

                                                                <div class="media outlet-media mt-3">
                                                                    <div class="box">
                                                                        <img class="align-self-start" src="book-shop/img/author1.jpg" alt="Generic placeholder image">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mt-3 ml-3"><a href="#">Eva Smith</a></h6>
                                                                    </div>
                                                                </div>

                                                                <div class="media outlet-media">
                                                                    <div class="box">
                                                                        <img class="align-self-start" src="book-shop/img/author2.jpg" alt="Generic placeholder image">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mt-3 ml-3"><a href="#">Rosa Parks</a></h6>
                                                                    </div>
                                                                </div>

                                                                <div class="media outlet-media">
                                                                    <div class="box">
                                                                        <img class="align-self-start" src="book-shop/img/author3.jpg" alt="Generic placeholder image">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mt-3 ml-3"><a href="#">Alan Yang</a></h6>
                                                                    </div>
                                                                </div>


                                                                <div class="media outlet-media">
                                                                    <div class="box">
                                                                        <img class="align-self-start" src="book-shop/img/author4.jpg" alt="Generic placeholder image">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="mt-3 ml-3"><a href="#">Kam John</a></h6>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
                                                                <a href="javascript:void(0);"><img src="book-shop/img/featured-product.jpg" alt="image"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown position-relative">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PAGES</a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-listing.html">Listing One</a></li>
                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/product-detail.html">Detail Page</a></li>
                                                    <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="book-shop/shop-cart.html.html">ShopCart Page</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="book-shop/contact.html">CONTACT</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </nav>

                        <!-- side menu -->
                        <div class="side-menu opacity-0 gradient-bg hidden">
                            <div class="inner-wrapper">
                                <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
                                <nav class="side-nav w-100">
                                    <ul class="navbar-nav">

                                        <li class="nav-item">
                                            <a class="nav-link" href="book-shop/product-listing.html"> HOME</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages1">
                                                BOOKS <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <div id="sideNavPages1" class="collapse sideNavPages">
                                                <ul class="navbar-nav mt-2">
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Love Does</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">No One Belongs</a></li>
                                                    <li class="nav-item" ><a class="nav-link" href="book-shop/product-listing.html">As I Lay Dying</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Life is Elsewhere</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">The Road</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Why Me?</a></li>
                                                </ul>
                                                <h5 class="sub-title">1. Classic</h5>
                                                <ul class="navbar-nav mt-2">
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Lorna Doone</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Lord of Flies</a></li>
                                                    <li class="nav-item" ><a class="nav-link" href="book-shop/product-listing.html">Kidnapped</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">End World</a></li>
                                                </ul>

                                                <h5 class="sub-title">2. Novel's</h5>
                                                <ul class="navbar-nav mt-2">
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Romance</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Fantasy</a></li>
                                                    <li class="nav-item" ><a class="nav-link" href="book-shop/product-listing.html">Thrillers</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Historical Fiction</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Others</a></li>
                                                </ul>

                                                <h5 class="sub-title">3. History</h5>
                                                <ul class="navbar-nav mt-2">
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Creative Thinking</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Historical Fiction</a></li>
                                                    <li class="nav-item" ><a class="nav-link" href="book-shop/product-listing.html">Creative Thinking</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Personal Finance</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages3">
                                                E-BOOKS <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <div id="sideNavPages3" class="collapse sideNavPages">
                                                <ul class="navbar-nav mt-2">
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Art</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Autobiography</a></li>
                                                    <li class="nav-item" ><a class="nav-link" href="book-shop/product-listing.html">Biography</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Chick lit</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Coming-of-age</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Anthology</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Drama</a></li>
                                                </ul>
                                                <h5 class="sub-title">1. Others</h5>
                                                <ul class="navbar-nav mt-2">
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Crime</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html"> Dictionary</a></li>
                                                    <li class="nav-item" ><a class="nav-link" href="book-shop/product-listing.html"> Health</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">History</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Horror</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="book-shop/product-listing.html">Poetry</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages2">
                                                PAGES <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <div id="sideNavPages2" class="collapse sideNavPages">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="book-shop/product-listing.html">Listing One</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="book-shop/product-detail.html">Detail Page</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="book-shop/shop-cart.html">ShopCart Page</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="book-shop/contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="side-footer w-100">
                                    <ul class="social-icons-simple white top40">
                                        <li><a class="facebook-bg-hvr"  href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                        <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                        <li><a class="instagram-bg-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                    </ul>
                                    <p class="whitecolor">&copy; <span id="year"></span> Product Shop. Made With Love by ThemesIndustry</p>
                                </div>
                            </div>
                        </div>
                        <div id="close_side_menu" class="tooltip"></div>
                        <!-- End side menu -->
                    </header>
                    <div class="nav-utility">
                        <div class="manage-icons d-inline-block">
                            <ul class="d-flex justify-content-center align-items-center">
                                <li class="d-inline-block">
                                    <a id="add_search_box">
                                        <i class="lni lni-search search-sidebar-hover"></i>
                                    </a>
                                </li>
                                <li class="d-inline-block mini-menu-card">
                                    <a class="nav-link" id="add_cart_box"  href="javascript:void(0)">
                                        <i class="lni lni-shopping-basket"></i>
                                    </a>
                                </li>
                                <a href="javascript:void(0)" class="d-inline-block sidemenu_btn d-block" id="sidemenu_toggle">
                                    <i class="lni lni-menu"></i>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END HEADER NAVIGATION -->

    <!--BANNER START-->

{{--    </div>--}}
    <!--BANNER END-->
    <swiper-container class="mySwiper" style="z-index: -1 !important;" pagination="true" loop="true" autoplay="true" delay="5000">
        @if(isset($banners))
            @foreach($banners as $banner)
                <swiper-slide class="homer-banner d-flex align-items-center" style="background-image: url('/storage/banner_img/{{$banner->image}}}');background-repeat: no-repeat;background-size: 100%;background-position:center;" >
                    <div class="row" style="position: relative; width: 100%;">
                        <img src="/storage/banner_img/{{$banner->image}}"  style="width: 100%;height: 100vh;position: relative;" alt="">
                        <div style="position: absolute; left: 13%; top: 30%;" class="col-12 col-lg-6 d-flex justify-content-center align-items-center text-center text-lg-left">
                            <div class="banner-description" style="margin-right: 200px;">
                                <span class="small-heading animated fadeInRight delay-1s">BEST AVAILABLE</span>
                                <h1 class="w-sm-100 w-md-100 w-lg-25 animated fadeInLeft delay-1s" style="color:white;"><span>{{$banner->name['uz']}}</span></h1>
                                <p style="font-size: 20px;color:white !important;" class="w-sm-100 w-md-100 w-lg-25 animated fadeInLeft delay-1s">{{$banner->title['uz']}}</p>
                                <a href="book-shop/product-listing.html" class="btn animated fadeInLeft delay-1s">SHOP NOW <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
            @endforeach
        @endif
    </swiper-container>

    <!--START OUR SERVICES-->
    <div class="our-services">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="service">
                        <div class="media">
                            <div class="service-card">
                                <i class="fas fa-truck mr-3"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Free Shipping Item</h5>
                                    <span>Order over $500</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="service">
                        <div class="media">
                            <div class="service-card">
                                <i class="fas fa-undo mr-3"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Money Back Guarantee</h5>
                                    <span>100% money back</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="service">
                        <div class="media">
                            <div class="service-card">
                                <i class="fas fa-piggy-bank mr-3"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Cash On Delivery</h5>
                                    <span>Lorem ipsum dolor amet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="service">
                        <div class="media">
                            <div class="service-card">
                                <i class="fas fa-hands-helping mr-3"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Help & Support</h5>
                                    <span>Call us: +0123,4567.89</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END OUR SERVICES-->

    <!-- START PORTOLIO SECTION -->
    <div class="portfolio-section">
        <div class="container">
            <div class="row">

                <!-- START PORTFOLIO HEADING -->
                <div class="col-12">
                    <div class="portfolioHeading text-center">
                        <h1 class="high-lighted-heading">Our Popular Product</h1>
                        <p>Aenean imperdiet. Etiam ultricies nisi vel augue men tuhi spectrum alle me.</p>
                    </div>
                </div>
                <!-- END PORTFOLIO HEADING -->

                <!-- START FILTERS -->
                @php $lang = app()->getLocale(); @endphp
                <div class="col-12">
                    <div class="clearfix d-flex justify-content-center">
                        <div id="js-filters-blog-posts" class="cbp-l-filters-button cbp-1-filters-alignCenter">
                            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All </div>
                            @foreach($categories as $category)
                                <div data-filter=".{{$category->name['uz']}}" class="cbp-filter-item">{{$category->name['uz']}}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- END FILTERS -->
                <!-- START PORTFOLIO IMAGES // Livewiredagi front faylini ichidagin product-componentadan olingan-->
                <div class="col-12">
                    <div id="js-grid-blog-posts" class="cbp">
                        @livewire('front.product-component')
                    </div>
                </div>
                <!-- END PORTFOLIO IMAGES -->

            </div>
        </div>
    </div>
    <!-- END PORTOLIO SECTION -->

    <!--START BANNER SECTION-->
    <div class="banner-section parallax-slide" style="background-image:url('/front/img/banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 text-center text-lg-left">
                    <div class="banner-content-wrapper">
                        <span>TRENDING PRODUCT OF THE WEEK</span>
                        <h1>Books <span>Collections</span></h1>
                        <p>Aenean imperdiet. Etiam ultricies nisi vel augue men tuhi spectrum alle me</p>
                        <button type="button" class="btn green-color-yellow-gradient-btn">BUY NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END BANNER SECTION-->

    <!--START LATEST ARRIVALS-->
    <div class="lastest_arrivals">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1>Published Books</h1>
                </div>

                <div class="col-12">
                    <div class="lastest_featured_products owl-carousel owl-theme">
                       @if(isset($products))
                            @foreach($products as $product)
                                <div class="lastest_arrival_items item">
                                    <a href="book-shop/product-detail.html" class="lastest-addto-cart"><i class="fa fa-shopping-cart"></i></a>
                                    <div class="card">
                                        <span class="product-type">NEW</span>
                                        <div class="image-holder">
                                            <a href="book-shop/img/l1.jpg"  data-fancybox="lastest_product"  data-title="Shirt Name">
                                                <img style="width: 400px;height: 400px;" src="/storage/product_img/{{$product->images[0]['path']}}" class="card-img-top" alt="Lastest Arrivals 1">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <h5 class="card-title">{{$product->name['uz']}}</h5>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <p class="card-text"> {{$product->sale_price}} UZS</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                       @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
