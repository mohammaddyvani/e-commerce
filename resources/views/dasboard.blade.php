@extends('layouts.app')

@section('content')
    <div class="uren-slider_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-slider slider-navigation_style-2">
                        < !-- Begin Single Slide Area -->
                            <div class="single-slide animation-style-01 bg-1">
                                <img src="assets/images/slider/1.jpg" alt="">
                            </div>
                            <!-- Single Slide Area End Here -->

                            <!-- Begin Single Slide Area -->
                            <div class="single-slide animation-style-02 bg-2">
                                <img src="assets/images/slider/2.jpg" alt="">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Uren's Product Area -->
    <div class="uren-product_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <div class="section-title_area">
                        <span>Top New On This Week</span>
                        <h3>New Arrivals Products</h3>
                    </div>
                    <div class="product-slider uren-slick-slider slider-navigation_style-1 img-hover-effect_area"
                        data-slick-options='{
                            "slidesToShow": 6,
                            "arrows" : true
                            }' data-slick-responsive='[
                                                    {"breakpoint":1501, "settings": {"slidesToShow": 4}},
                                                    {"breakpoint":1200, "settings": {"slidesToShow": 3}},
                                                    {"breakpoint":992, "settings": {"slidesToShow": 2}},
                                                    {"breakpoint":767, "settings": {"slidesToShow": 1}},
                                                    {"breakpoint":480, "settings": {"slidesToShow": 1}}
                                                ]'>
                        @foreach ($new_products as $item)
                            <div class="product-slide_item">
                                <div class="inner-slide">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img"
                                                    src=" {{ asset('assets/images/product/' . $item['image']) }} "
                                                    alt="Uren's Product Image">

                                            </a>
                                            <div class="sticker">
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip"
                                                            data-placement="top" title="Add To Cart"><i
                                                                class="ion-bag"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-toggle="modal"
                                                        data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                            data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                class="ion-android-open"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="ion-android-star"></i></li>
                                                        <li><i class="ion-android-star"></i></li>
                                                        <li><i class="ion-android-star"></i></li>
                                                        <li><i class="ion-android-star"></i></li>
                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                </div>
                                                <h6><a class="product-name"
                                                        href="single-product.html">{{ $item['name'] }}</a></h6>
                                                <div class="price-box">
                                                    <span
                                                        class="new-price">Rp{{ number_format($item['price']) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Product Area End Here -->

        <!-- Begin Special Product Area -->
        <div class="special-product_area" id="special">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="section-title_area">
                            <span>Special Offer Limited Time</span>
                            <h3>Deal Of The Day</h3>
                        </div>
                        <div class="special-product_slider uren-slick-slider slider-navigation_style-1 img-hover-effect_area"
                            data-slick-options='{
                            "slidesToShow": 2,
                            "arrows" : true
                            }' data-slick-responsive='[
                                                    {"breakpoint":768, "settings": {"slidesToShow": 1}}
                                                ]'>
                            @foreach ($new_products as $item)
                            <div class="slide-item">
                                <div class="inner-slide">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{ asset('assets/images/product/' . $item['image']) }}"
                                                    alt="Uren's Product Image">
                                            </a>
                                            <div class="sticker-area-2">
                                                <span class="sticker-2">{{ $item['sale']}}</span>
                                                <span class="sticker">New</span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <div class="uren-countdown_area">
                                                    <span class="product-offer">Hurry up! Offer ends in:</span>
                                                    <div class="countdown-wrap">
                                                        <div class="countdown item-4" data-countdown="2022/06/14"
                                                            data-format="short">
                                                            <div class="countdown__item">
                                                                <span class="countdown__time daysLeft"></span>
                                                                <span class="countdown__text daysText"></span>
                                                            </div>
                                                            <div class="countdown__item">
                                                                <span class="countdown__time hoursLeft"></span>
                                                                <span class="countdown__text hoursText"></span>
                                                            </div>
                                                            <div class="countdown__item">
                                                                <span class="countdown__time minsLeft"></span>
                                                                <span class="countdown__text minsText"></span>
                                                            </div>
                                                            <div class="countdown__item">
                                                                <span class="countdown__time secsLeft"></span>
                                                                <span class="countdown__text secsText"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="ion-android-star"></i></li>
                                                        <li><i class="ion-android-star"></i></li>
                                                        <li><i class="ion-android-star"></i></li>
                                                        <li><i class="ion-android-star"></i></li>
                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                </div>
                                                <h6 class="product-name"><a href="single-product.html">{{ $item['name'] }}</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">Rp{{ number_format($item['price']) }}</span>
                                                    <span class="old-price">Rp10,000,000</span>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Cart"><i
                                                                    class="ion-bag"></i>Add To Cart</a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Quick View"><i class="ion-android-open"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Special Product Area End Here -->

        <!-- Begin Uren's Brand Area -->
        <div class="uren-brand_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="section-title_area">
                            <span>Top Quality Partner</span>
                            <h3>Shop By Brands</h3>
                        </div>
                        <div class="brand-slider uren-slick-slider img-hover-effect_area" data-slick-options='{
                            "slidesToShow": 8
                            }' data-slick-responsive='[
                                                    {"breakpoint":1200, "settings": {"slidesToShow": 5}},
                                                    {"breakpoint":992, "settings": {"slidesToShow": 3}},
                                                    {"breakpoint":767, "settings": {"slidesToShow": 3}},
                                                    {"breakpoint":577, "settings": {"slidesToShow": 2}},
                                                    {"breakpoint":321, "settings": {"slidesToShow": 1}}
                                                ]'>
                            <div class="slide-item">
                                <div class="inner-slide">
                                    <div class="single-product">
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/brand/a1.jpg" alt="Uren's Brand Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="inner-slide">
                                    <div class="single-product">
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/brand/a2.jpg" alt="Uren's Brand Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="inner-slide">
                                    <div class="single-product">
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/brand/a3.jpg" alt="Uren's Brand Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="inner-slide">
                                    <div class="single-product">
                                        <a href="javascript:void(0)">
                                            <img class="mt-2" src="assets/images/brand/a4.jpg" alt="Uren's Brand Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="inner-slide">
                                    <div class="single-product">
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/brand/a5.jpg" alt="Uren's Brand Image" width="100px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="inner-slide">
                                    <div class="single-product">
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/brand/a6.jpg" alt="Uren's Brand Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="inner-slide">
                                    <div class="single-product">
                                        <a href="javascript:void(0)">
                                            <img class="mt-3" src="assets/images/brand/a7.jpg" alt="Uren's Brand Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="inner-slide">
                                    <div class="single-product">
                                        <a href="javascript:void(0)">
                                            <img class="mt-3" src="assets/images/brand/a8.jpg" alt="Uren's Brand Image" width="120px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Brand Area End Here -->
    @endsection
