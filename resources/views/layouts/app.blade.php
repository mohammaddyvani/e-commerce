@extends('layouts.base')

@section('app')
    @include('layouts.partials.top-bar')

    @yield('content')

    <!-- Begin Uren's Footer Area -->
    <div class="uren-footer_area" style="margin-top: 50px;">
        <div class="footer-top_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter-area">
                            <h3 class="title">Follow Our Website Now</h3>
                            <p class="short-desc">Get E-mail updates about our latest shop and special offers.</p>
                            <div class="newsletter-form_wrap">
                                <form
                                    action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                    class="newsletters-form validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <div id="mc-form" class="mc-form subscribe-form">
                                            <input id="mc-email" class="newsletter-input" type="email" autocomplete="off"
                                                placeholder="Enter your email" />
                                            <button class="newsletter-btn" id="mc-submit">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="footer-widgets_info">
                            <div class="footer-widgets_logo">
                                <a href="#">
                                    <img src="assets/images/menu/logo/1.png" alt="Uren's Footer Logo">
                                </a>
                            </div>
                            <div class="widget-short_desc">
                                <p>Kami melayani pembelian Smartphone dan Accesories. We are a team of designers and developers that create high quality HTML Template &
                                    Woocommerce, Shopify Theme.
                                </p>
                            </div>
                            <div class="widgets-essential_stuff">
                                <ul>
                                    <li class="uren-address"><span>Address:</span> <a href="">Jalan Raya Jember No.KM13 Kawang (68461), Labanasem, Kabat - Banyuwangi</a></li>
                                    <li class="uren-phone"><span>Call
                                            Us:</span> <a href="tel://+62430019256">+6283 - 300 - 192 - 5196</a>
                                    </li>
                                    <li class="uren-email"><span>Email:</span> <a
                                            href="mailto://phoneclipindo@gmail.com">phoneclipindo@gmail.com</a></li>
                                </ul>
                            </div>
                            <div class="uren-social_link">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank"
                                            title="Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com/" data-toggle="tooltip" target="_blank"
                                            title="Twitter">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank"
                                            title="Google Plus">
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
                    <div class="col-lg-7">
                        <div class="footer-widgets_area mx-auto">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-widgets_title">
                                        <h3>Information</h3>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="javascript:void(0)">About Us</a></li>
                                            <li><a href="javascript:void(0)">Delivery Information</a></li>
                                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                            <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-widgets_title">
                                        <h3>Customer Service</h3>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="javascript:void(0)">Contact Us</a></li>
                                            <li><a href="javascript:void(0)">Returns</a></li>
                                            <li><a href="javascript:void(0)">Site Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-widgets_title">
                                        <h3>My Account</h3>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="javascript:void(0)">My Account</a></li>
                                            <li><a href="javascript:void(0)">Order History</a></li>
                                            <li><a href="javascript:void(0)">Wish List</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom_area">
            <div class="container-fluid">
                <div class="footer-bottom_nav">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright">
                                <span><a href="">PhoneClip@2022</a></span>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="payment">
                                <a href="#">
                                    <img src="assets/images/footer/payment/1.png" alt="Uren's Payment Method">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Uren's Footer Area End Here -->

    <!-- JS
    ============================================ -->

    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>

    <!-- Slick Slider JS -->
    <script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
    <!-- Barrating JS -->
    <script src="{{ asset('assets/js/plugins/jquery.barrating.min.js') }}"></script>
    <!-- Counterup JS -->
    <script src="{{ asset('assets/js/plugins/jquery.counterup.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.js') }}"></script>
    <!-- Sticky Sidebar JS -->
    <script src="{{ asset('assets/js/plugins/jquery.sticky-sidebar.js') }}"></script>
    <!-- Jquery-ui JS -->
    <script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.ui.touch-punch.min.js') }}"></script>
    <!-- Lightgallery JS -->
    <script src="{{ asset('assets/js/plugins/lightgallery.min.js') }}"></script>
    <!-- Scroll Top JS -->
    <script src="{{ asset('assets/js/plugins/scroll-top.js') }}"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="{{ asset('assets/js/plugins/theia-sticky-sidebar.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <!-- jQuery Zoom JS -->
    <script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection
