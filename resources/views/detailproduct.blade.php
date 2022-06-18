@extends('layouts.app')

@section('content')
    <!-- Begin Uren's Single Product Area -->
    <div class="sp-area">
        <div class="container-fluid col-md-8 col-sm-10 col-12 mx-auto">
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
                                    <img src="{{ asset('assets/images/product/' . $detailProduct['image']) }}" alt="Uren's Product Image">
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
                                <h4><a>{{ $detailProduct['name']}}</a></h4>
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
                            <div class="sp-essential_stuff pt-3" style="font-size: 16px">
                                <table>
                                    <tr>
                                        <td style="font-weight : 700">Brands</td>
                                        <td style="font-weight : 700">:</td>
                                        <td style="padding-left: 10px"><a style="color: #343a40" href="{{ route('products', $detailProduct->brand->name) }}">{{ $detailProduct->brand->name }}</a></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight : 700">Memory</td>
                                        <td style="font-weight : 700">:</td>
                                        <td style="padding-left: 10px"><span>{{ $detailProduct['des_memory'] }}</span></td>
                                    </tr>
                                    <tr style="font-size: 30px; color: #0c2a5c">
                                        <td></td>
                                        <td></td>
                                        <td style="padding-left: 10px; font-weight: 700; padding-top: 25px;"><span>Rp. {{ number_format($detailProduct->price, 0, ',', '.') }}</span></td>
                                    </tr>
                                </table>
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
                                </ul>
                            </div>
                            <div class="uren-tag-line">
                                <h6>Tags:</h6>
                                @foreach (getBrands() as $item)
                                    <a href="{{ route('products', $item->name) }}">{{ $item->name }}</a>
                                @endforeach
                            </div>
                            <div class="uren-social_link">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://instagaram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
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
                                            <span>{{ $detailProduct['short_description']}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="specification" class="tab-pane" role="tabpanel">
                                <table class="table table-bordered specification-inner_stuff">
                                    <tbody>
                                        <tr>
                                            <td><strong>Dimensions</strong></td>
                                            <td>{{ $detailProduct['des_Dimensions']}}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><strong>Display</strong></td>
                                            <td>{{ $detailProduct['des_Display'] }}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><strong>OS</strong></td>
                                            <td>{{ $detailProduct['des_OS']}}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><strong>Chipset</strong></td>
                                            <td>{{ $detailProduct['des_Chipset']}}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><strong>CPU</strong></td>
                                            <td>{{ $detailProduct['des_CPU']}}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><strong>Memory</strong></td>
                                            <td>{{ $detailProduct['des_memory']}}</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><strong>Battery</strong></td>
                                            <td>{{ $detailProduct['des_battery']}}</td>
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
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection