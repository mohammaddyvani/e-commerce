<!-- Begin Uren's Header Main Area -->
<header class="header-main_area bg--sapphire">
    <div class="header-top_area d-lg-block d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="main-menu_area position-relative">
                        <nav class="main-nav">
                            <ul>
                                <li class="dropdown-holder"><a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="megamenu-holder "><a>Shop <i
                                            class="ion-ios-arrow-down"></i></a>
                                    <ul class="hm-megamenu" style="width: auto">
                                        <li><span class="megamenu-title">Category</span>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('category', 'smartphone') }}">Smartphone</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('category', 'accessories') }}">Accessories</a>
                                                </li>
                                                {{-- </ul> --}}
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            </li>
                            <li class=""><a href="{{ route('aboutus') }}">About Us</a></li>
                            <li class=""><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <div class="ht-right_area">
                        <div class="ht-menu">
                            <ul>
                                <li><a href="javascript:void(0)">Currency<i class="fa fa-chevron-down"></i></a>
                                    <ul class="ht-dropdown ht-currency">
                                        <li class="active"><a href="javascript:void(0)">Rp Rupiah</a></li>
                                        <li><a href="javascript:void(0)">$ Us Dollar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Language <i class="fa fa-chevron-down"></i></a>
                                    <ul class="ht-dropdown">
                                        <li class="active"><a href="javascript:void(0)"><img
                                                    src="assets/images/menu/icon/1.jpg"
                                                    alt="JB's Language Icon">English</a></li>
                                        <li><a href="javascript:void(0)"><img src="assets/images/menu/icon/2.jpg"
                                                    alt="JB's Language Icon">Indonesia</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    @if (Auth::user() != null)
                                    <a>
                                            <i class="fas fa-user-circle" style="font-size: 17px !important;"></i>
                                            {{ Auth::user()->name }}
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                        <ul class="ht-dropdown ht-my_account">
                                            <li><a href="{{ route('myaccount') }}">My Account</a></li>
                                            <li><a href="{{ route('logout') }}">Logout</a></li>
                                        </ul>
                                    @else
                                        <a href="{{ route('auth') }}">Login</a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- drop down menu start -->
    <div class="header-top_area header-sticky bg--sapphire">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-7 d-lg-block d-none">
                    <div class="main-menu_area position-relative">
                        <nav class="main-nav">
                            <ul>
                                <li class="dropdown-holder"><a href="/">Home</a>
                                </li>
                                <li class="megamenu-holder "><a href="shop-left-sidebar.html">Shop<i
                                            class="ion-ios-arrow-down"></i></a>
                                    <ul class="hm-megamenu" style="width: auto">
                                        <li><span class="megamenu-title">Category</span>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('category', 'smartphone') }}">Smartphone</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('category', 'accessories') }}">Accessories</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class=""><a href="aboutus">About Us</a></li>
                                <li class=""><a href="contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-3 d-block d-lg-none">
                    <div class="header-logo_area header-sticky_logo">
                        <a href="/">
                            <img src="{{ asset('assets/images/menu/logo/1.png') }}" alt="Uren's Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-sm-9">
                    <div class="header-right_area">
                        <ul>
                            <li class="minicart-wrap ml-auto mr-0">
                                <a href="#miniCart" class="minicart-btn toolbar-btn">
                                    <div class="minicart-count_area">
                                        <span class="item-count d-none cartCount"></span>
                                        <i class="ion-bag"></i>
                                    </div>
                                    <div class="minicart-front_text">
                                        <span>Cart</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- drop down menu end -->

    <div class="header-middle_area">
        <div class="container-fluid">
            <div class="row">
                <div class="custom-logo_col col-12">
                    <div class="header-logo_area">
                        <a href="/">
                            <img src="{{ asset('assets/images/menu/logo/1.png') }}" alt="Uren's Logo">
                        </a>
                    </div>
                </div>
                <div class="custom-category_col col-12">
                    <div class="category-menu category-menu-hidden">
                        <div class="category-heading">
                            <h2 class="categories-toggle">
                                <span>Shop By</span>
                                <span>Brands</span>
                            </h2>
                        </div>
                        <div id="cate-toggle" class="category-menu-list">
                            <ul>
                                @foreach (getBrands() as $item)
                                    <li><a href="{{ route('products', $item->name) }}">{{ $item->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="custom-search_col col-12">
                    <div class="hm-form_area">
                        <form action="#" class="hm-searchbox">
                            <select class="nice-select select-search-category">
                                <option value="0">All Categories</option>
                                @foreach (getBrands() as $item)
                                    <option value="{{ route('products', $item->name) }}">{{ $item->name }}
                                    </option>
                                @endforeach
                                <option value="{{ route('category', 'accessories') }}">Accessories</option>
                            </select>
                            <input type="text" placeholder="Enter your search key ...">
                            <button class="header-search_btn" type="submit"><i
                                    class="ion-ios-search-strong"><span>Search</span></i></button>
                        </form>
                    </div>
                </div>
                <div class="custom-cart_col col-12">
                    <div class="header-right_area">
                        <ul>
                            <li class="minicart-wrap ml-auto mr-0">
                                <a href="#miniCart" class="minicart-btn toolbar-btn">
                                    <div class="minicart-count_area">
                                        <span class="item-count d-none cartCount"></span>
                                        <i class="ion-bag"></i>
                                    </div>
                                    <div class="minicart-front_text">
                                        <span>Cart</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-minicart_wrapper" id="miniCart" data-url="{{ route('getDataCart') }}">
        <div class="offcanvas-menu-inner">
            <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
            <div class="minicart-content">
                <div class="minicart-heading">
                    <h4>Shopping Cart</h4>
                </div>
                <ul class="minicart-list"></ul>
            </div>
            <div class="minicart-item_total">
                <span>Subtotal</span>
                <span class="ammount" id="subtotal">Rp. 0</span>
            </div>
            <div class="minicart-btn_area">
                <a href="{{ route('bigcart') }}" class="uren-btn uren-btn_dark uren-btn_fullwidth">Minicart</a>
            </div>
            <div class="minicart-btn_area">
                <a href="{{ route('checkout') }}" class="uren-btn uren-btn_dark uren-btn_fullwidth">Checkout</a>
            </div>
        </div>
    </div>

    <!--- Mobile Menu Start-->
    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                <div class="offcanvas-inner_search">
                    <form action="#" class="inner-searchbox">
                        <input type="text" placeholder="Search for item...">
                        <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><a href="/"><span class="mm-text">Home</span></a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">
                                <span class="mm-text">Shop</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children"><span class="megamenu-title">Category</span>
                                    <ul>
                                        <li>
                                            <a href="{{ route('category', 'smartphone') }}">Smartphone</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('category', 'accessories') }}">Accessories</a>
                                        </li>
                                    </ul>
                                </li>                               
                            </ul>
                        </li>
                    </ul>
                </nav>
                <nav class="offcanvas-navigation user-setting_area">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children active"><a href="javascript:void(0)"><span
                                    class="mm-text">User
                                    Setting</span></a>
                            <ul class="sub-menu">
                                <li><a>My Account<i class="fa fa-chevron-down"></i></a>
                                    <ul class="ht-dropdown ht-my_account">
                                        <li><a href="{{ route('logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0)"><span
                                    class="mm-text">Currency</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">INA Rp</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">USD $</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="javascript:void(0)"><span
                                    class="mm-text">Language</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">Indonesia</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Uren's Header Main Area End Here -->
