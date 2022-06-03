@extends('layouts.app')

@section('content')
    <!-- Begin Uren's Single Product Area -->
    <div class="sp-area">
        <div class="container-fluid">
            <div class="sp-nav">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sp-img_area">
                            <div class="sp-img_slider slick-img-slider uren-slick-slider" data-slick-options='{
                            "slidesToShow": 1,
                            "arrows": false,
                            "fade": true,
                            "draggable": false,
                            "swipe": false,
                            "asNavFor": ".sp-img_slider-nav"
                            }'>
                                <div class="single-slide red">
                                    <img src="assets/images/product/large-size/aa1.jpg" alt="Uren's Product Image">
                                </div> 
                                <div class="single-slide orange">
                                    <img src="assets/images/product/large-size/aa2.jpg" alt="Uren's Product Image">
                                </div>
                                <div class="single-slide brown">
                                    <img src="assets/images/product/large-size/aa3.jpg" alt="Uren's Product Image">
                                </div>
                                <div class="single-slide umber">
                                    <img src="assets/images/product/large-size/aa4.jpg" alt="Uren's Product Image">
                                </div>
                                <div class="single-slide black">
                                    <img src="assets/images/product/large-size/aa5.jpg" alt="Uren's Product Image">
                                </div>
                                <div class="single-slide green">
                                    <img src="assets/images/product/large-size/aa6.jpg" alt="Uren's Product Image">
                                </div>
                            </div>
                            <div class="sp-img_slider-nav slick-slider-nav uren-slick-slider slider-navigation_style-3" data-slick-options='{
                            "slidesToShow": 3,
                            "asNavFor": ".sp-img_slider",
                            "focusOnSelect": true,
                            "arrows" : true,
                            "spaceBetween": 30
                            }' data-slick-responsive='[
                                    {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                    {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                    {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                    {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                ]'>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="sp-content">
                            <div class="sp-heading">
                                <h4><a href="#">Apple Iphone 11 Pro</a></h4>
                            </div>
                            <div class="rating-box">
                                <ul>
                                    <li><i class="ion-android-star"></i></li>
                                    <li><i class="ion-android-star"></i></li>
                                    <li><i class="ion-android-star"></i></li>
                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                </ul>
                            </div>
                            <div class="sp-essential_stuff">
                                <ul>
                                    <li>Brands <a href="javascript:void(0)">Apple</a></li>
                                    {{-- <li>Chipset: <a href="javascript:void(0)">Apple A12 Binomic (7nm+)</a></li> --}}
                                    <li>CPU: <a href="javascript:void(0)">Hexa-Core</a></li>
                                    <li>RAM: <a href="javascript:void(0)">64GB 4GB</a></li>
                                    <li>Rilis <a href="javascript:void(0)"><span>September 2022</span></a></li>
                                    <li>Price: <a href="javascript:void(0)">24.999.000</a></li>
                                </ul>
                            </div>
                            <div class="quantity">
                                <label>Quantity</label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                </div>
                            </div>
                            <div class="qty-btn_area">
                                <ul>
                                    <li><a class="qty-cart_btn" href="cart.html">Add To Cart</a></li>
                                    <li><a class="qty-wishlist_btn" href="wishlist.html" data-toggle="tooltip" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li><a class="qty-compare_btn" href="compare.html" data-toggle="tooltip" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>
                                </ul>
                            </div>
                            <div class="uren-tag-line">
                                <h6>Tags:</h6>
                                <a href="javascript:void(0)">Apple</a>,
                                <a href="javascript:void(0)">Xiaomi</a>,
                                <a href="javascript:void(0)">Infinix</a>,
                                <a href="javascript:void(0)">Vivo</a>,
                                <a href="javascript:void(0)">Oppo</a>,
                                <a href="javascript:void(0)">Realme</a>,
                                <a href="javascript:void(0)">OnePlus</a>,
                                <a href="javascript:void(0)">Samsung</a>
                            </div>
                            <div class="uren-social_link">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                            <i class="fab fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Uren's Single Product Area End Here -->

    <!-- Begin Uren's Single Product Tab Area -->
    <div class="sp-product-tab_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sp-product-tab_nav">
                        <div class="product-tab">
                            <ul class="nav product-menu">
                                <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a>
                                </li>
                                <li><a data-toggle="tab" href="#specification"><span>Specification</span></a></li>
                                <li><a data-toggle="tab" href="#reviews"><span>Reviews (1)</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-content uren-tab_content">
                            <div id="description" class="tab-pane active show" role="tabpanel">
                                <div class="product-description">
                                    <ul>
                                        <li>
                                            <strong>Description</strong>
                                            <span>Voluptatum, minus? Optio molestias voluptates aspernatur laborum ratione minima, natus eaque nemo rem quisquam, suscipit architecto saepe. Debitis omnis labore laborum consectetur, quas, esse voluptates minus aliquam modi nesciunt earum! Vero rerum molestiae corporis libero repellat doloremque quae sapiente ratione maiores qui aliquam, sunt obcaecati! Iure nisi doloremque numquam delectus.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="specification" class="tab-pane" role="tabpanel">
                                <table class="table table-bordered specification-inner_stuff">
                                    <tbody>
                                        <tr>
                                            <td><strong>Dimensions</strong></td>
                                            <td>144 x 71.4 x 8.1 mm</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><strong>Display</strong></td>
                                            <td>Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak)</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><strong>OS</strong></td>
                                            <td>iOS 13, upgradable to iOS 15.5</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><strong>Chipset</strong></td>
                                            <td>Apple A13 Bionic (7 nm+)</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><strong>CPU</strong></td>
                                            <td>Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><strong>Memory</strong></td>
                                            <td>64GB 4GB RAM, 256GB 4GB RAM, 512GB 4GB RAM</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><strong>Battery</strong></td>
                                            <td>Li-Ion 3046 mAh, non-removable (11.67 Wh)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="reviews" class="tab-pane" role="tabpanel">
                                <div class="tab-pane active" id="tab-review">
                                    <form class="form-horizontal" id="form-review">
                                        <div id="review">
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;"><strong>Customer</strong></td>
                                                        <td class="text-right">15/09/20</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <p>Good product! Thank you very much</p>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h2>Write a review</h2>
                                        <div class="form-group required">
                                            <div class="col-sm-12 p-0">
                                                <label>Your Email <span class="required">*</span></label>
                                                <input class="review-input" type="email" name="con_email" id="con_email" required>
                                            </div>
                                        </div>
                                        <div class="form-group required second-child">
                                            <div class="col-sm-12 p-0">
                                                <label class="control-label">Share your opinion</label>
                                                <textarea class="review-textarea" name="con_message" id="con_message"></textarea>
                                                <div class="help-block"><span class="text-danger">Note:</span> HTML is not
                                                    translated!</div>
                                            </div>
                                        </div>
                                        <div class="form-group last-child required">
                                            <div class="col-sm-12 p-0">
                                                <div class="your-opinion">
                                                    <label>Your Rating</label>
                                                    <span>
                                                <select class="star-rating">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </span>
                                                </div>
                                            </div>
                                            <div class="uren-btn-ps_right">
                                                <button class="uren-btn-2">Continue</button>
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
    <!-- Uren's Single Product Tab Area End Here -->

    {{-- <!-- Begin Uren's Product Area -->
    <div class="uren-product_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title_area">
                        <span></span>
                        <h3>Related Products</h3>
                    </div>
                    <div class="product-slider uren-slick-slider slider-navigation_style-1 img-hover-effect_area" data-slick-options='{
                    "slidesToShow": 6,
                    "arrows" : true
                    }' data-slick-responsive='[
                                            {"breakpoint":1501, "settings": {"slidesToShow": 4}},
                                            {"breakpoint":1200, "settings": {"slidesToShow": 3}},
                                            {"breakpoint":992, "settings": {"slidesToShow": 2}},
                                            {"breakpoint":767, "settings": {"slidesToShow": 1}},
                                            {"breakpoint":480, "settings": {"slidesToShow": 1}}
                                        ]'>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-1.jpg" alt="Uren's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Uren's Product Image">
                                        </a>
                                        <div class="sticker">
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
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
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Veniam officiis voluptates</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">$122.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/2-1.jpg" alt="Uren's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/2-2.jpg" alt="Uren's Product Image">
                                        </a>
                                        <div class="sticker-area-2">
                                            <span class="sticker-2">-20%</span>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
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
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Corporis sed excepturi</a></h6>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$194.00</span>
                                                <span class="old-price">$241.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/3-1.jpg" alt="Uren's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/3-2.jpg" alt="Uren's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
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
                                            <h6><a class="product-name" href="single-product.html">Quidem iusto sapiente</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">$175.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/4-1.jpg" alt="Uren's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/4-2.jpg" alt="Uren's Product Image">
                                        </a>
                                        <div class="sticker-area-2">
                                            <span class="sticker-2">-5%</span>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
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
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Ullam excepturi nesciunt</a></h6>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$145.00</span>
                                                <span class="old-price">$190.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/5-1.jpg" alt="Uren's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/5-2.jpg" alt="Uren's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
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
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Minus ipsam rerum</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">$130.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/6-1.jpg" alt="Uren's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/6-2.jpg" alt="Uren's Product Image">
                                        </a>
                                        <div class="sticker-area-2">
                                            <span class="sticker-2">-15%</span>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
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
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Labore aliquid eos</a></h6>
                                            <div class="price-box">
                                                <span class="new-price new-price-2">$240.00</span>
                                                <span class="old-price">$320.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/7-1.jpg" alt="Uren's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/7-2.jpg" alt="Uren's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
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
                                            <h6><a class="product-name" href="single-product.html">Enim nobis numquam</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">$190.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-slide_item">
                            <div class="inner-slide">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/medium-size/8-1.jpg" alt="Uren's Product Image">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Uren's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                </li>
                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-android-options"></i></a>
                                                </li>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
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
                                                    <li><i class="ion-android-star"></i></li>
                                                </ul>
                                            </div>
                                            <h6><a class="product-name" href="single-product.html">Dolorem voluptates aut</a></h6>
                                            <div class="price-box">
                                                <span class="new-price">$250.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Uren's Product Area End Here --> --}}

@endsection