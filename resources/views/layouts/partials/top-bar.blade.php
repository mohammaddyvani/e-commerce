<!-- Begin Uren's Header Main Area -->
<header class="header-main_area bg--sapphire">
    <div class="header-top_area d-lg-block d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="main-menu_area position-relative">
                        <nav class="main-nav">
                            <ul>
                                <li class="dropdown-holder"><a href="/">Home</a>
                                </li>
                                <li class="megamenu-holder "><a href="#">Shop <i
                                            class="ion-ios-arrow-down"></i></a>
                                    <ul class="hm-megamenu">
                                        <li><span class="megamenu-title">Brands</span>
                                            <ul>
                                                @foreach (getBrands() as $item)
                                                    <li><a
                                                            href="{{ route('products', $item->name) }}">{{ $item->name }}</a>
                                                    </li>
                                                @endforeach

                                        </li>
                                    </ul>
                                </li>
                                <li><span class="megamenu-title">Accessoriese</span>
                                    <ul>
                                        <li><a href="/error">Cable</a></li>
                                        <li><a href="single-product-sticky-left.html">Case</a></li>
                                        <li><a href="single-product-tab-style-right.html">Charger</a></li>
                                        <li><a href="single-product-gallery-right.html">Earphone</a></li>
                                        <li><a href="single-product-tab-style-left.html">Headphone</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </li>
                            <li><a href="/#special">Specials</a></li>
                            <li class=""><a href="about-us.html">About Us</a></li>
                            <li class=""><a href="contact.html">Contact</a></li>
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
                                <li><a href="my-account.html">My Account<i class="fa fa-chevron-down"></i></a>
                                    <ul class="ht-dropdown ht-my_account">
                                        <li><a href="/login">Login</a></li>
                                    </ul>
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
                                    <ul class="hm-megamenu">
                                        <li><span class="megamenu-title">Category</span>
                                            <ul>
                                                @foreach (getBrands() as $item)
                                                    <li><a
                                                            href="({{ route('products', $item->name) }})">{{ $item->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#special">Specials</a></li>
                                <li class=""><a href="about-us.html">About Us</a></li>
                                <li class=""><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-3 d-block d-lg-none">
                    <div class="header-logo_area header-sticky_logo">
                        <a href="index.html">
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
                                        <span class="item-count">3</span>
                                        <i class="ion-bag"></i>
                                    </div>
                                    <div class="minicart-front_text">
                                        <span>Cart:</span>
                                        <span class="total-price">462.4</span>
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
                        <a href="index.html">
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
                                <li><a href="shop-left-sidebar.html">Apple</a></li>
                                <li class="right-menu"><a href="shop-left-sidebar.html">Infinix</a>
                                    <ul class="cat-mega-menu cat-mega-menu-3">
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Series</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Note Series</a></li>
                                                <li><a href="shop-left-sidebar.html">Hot Series</a></li>
                                                <li><a href="shop-left-sidebar.html">Smart Series</a></li>
                                            </ul>
                                        </li>
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Accessories</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Charger</a></li>
                                                <li><a href="shop-left-sidebar.html">Earphone</a></li>
                                                <li><a href="shop-left-sidebar.html">Case</a></li>
                                                <li><a href="shop-left-sidebar.html">True Wireless Stereo</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="right-menu"><a href="shop-left-sidebar.html">OnePlus</a>
                                    <ul class="cat-mega-menu cat-mega-menu-3">
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Series</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">OnePlus Series</a></li>
                                                <li><a href="shop-left-sidebar.html">Nord Series</a></li>
                                            </ul>
                                        </li>
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Accessories</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Charger</a></li>
                                                <li><a href="shop-left-sidebar.html">Earphone</a></li>
                                                <li><a href="shop-left-sidebar.html">Case</a></li>
                                                <li><a href="shop-left-sidebar.html">True Wireless Stereo</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="right-menu"><a href="shop-left-sidebar.html">Oppo</a>
                                    <ul class="cat-mega-menu cat-mega-menu-3">
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Series</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Find X Series</a></li>
                                                <li><a href="shop-left-sidebar.html">Reno Series</a></li>
                                                <li><a href="shop-left-sidebar.html">A Series</a></li>
                                            </ul>
                                        </li>
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Accessories</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Charger</a></li>
                                                <li><a href="shop-left-sidebar.html">Earphone</a></li>
                                                <li><a href="shop-left-sidebar.html">Case</a></li>
                                                <li><a href="shop-left-sidebar.html">True Wireless Stereo</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="right-menu"><a href="shop-left-sidebar.html">Realme</a>
                                    <ul class="cat-mega-menu cat-mega-menu-3">
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Series</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Narzo Series</a></li>
                                                <li><a href="shop-left-sidebar.html">X Series</a></li>
                                                <li><a href="shop-left-sidebar.html">GT Series</a></li>
                                                <li><a href="shop-left-sidebar.html">C Series</a></li>
                                                <li><a href="shop-left-sidebar.html">9 Series</a></li>
                                                <li><a href="shop-left-sidebar.html">8 Series</a></li>
                                                <li><a href="shop-left-sidebar.html">7 Series</a></li>
                                                <li><a href="shop-left-sidebar.html">6 Series</a></li>
                                            </ul>
                                        </li>
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Accessories</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Charger</a></li>
                                                <li><a href="shop-left-sidebar.html">Earphone</a></li>
                                                <li><a href="shop-left-sidebar.html">Case</a></li>
                                                <li><a href="shop-left-sidebar.html">True Wireless Stereo</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="right-menu"><a href="shop-left-sidebar.html">Samsung</a>
                                    <ul class="cat-mega-menu cat-mega-menu-3">
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Series</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Galaxy Z Series</a></li>
                                                <li><a href="shop-left-sidebar.html">Galaxy S Series</a></li>
                                                <li><a href="shop-left-sidebar.html">Galaxy Note Series</a></li>
                                                <li><a href="shop-left-sidebar.html">Galaxy A Series</a></li>
                                                <li><a href="shop-left-sidebar.html">Galaxy M Series</a></li>
                                            </ul>
                                        </li>
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Accessories</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Charger</a></li>
                                                <li><a href="shop-left-sidebar.html">Earphone</a></li>
                                                <li><a href="shop-left-sidebar.html">Case</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="right-menu"><a href="shop-left-sidebar.html">Vivo</a>
                                    <ul class="cat-mega-menu cat-mega-menu-3">
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Series</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Xperia Series</a></li>
                                            </ul>
                                        </li>
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Accessories</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Charger</a></li>
                                                <li><a href="shop-left-sidebar.html">Earphone</a></li>
                                                <li><a href="shop-left-sidebar.html">Case</a></li>
                                                <li><a href="shop-left-sidebar.html">True Wireless Stereo</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="right-menu"><a href="shop-left-sidebar.html">Xiaomi</a>
                                    <ul class="cat-mega-menu cat-mega-menu-3">
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Series</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Mi Series</a></li>
                                                <li><a href="shop-left-sidebar.html">Redmi Series</a></li>
                                                <li><a href="shop-left-sidebar.html">Poco Series</a></li>
                                            </ul>
                                        </li>
                                        <li class="right-menu cat-mega-title">
                                            <a href="shop-left-sidebar.html">Accessories</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Charger</a></li>
                                                <li><a href="shop-left-sidebar.html">Earphone</a></li>
                                                <li><a href="shop-left-sidebar.html">Case</a></li>
                                                <li><a href="shop-left-sidebar.html">True Wireless Stereo</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
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
                                    <option value="{{ route('products', $item->name) }}">{{ $item->name }}</option>
                                @endforeach
                                <option value="16">Accessories</option>
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
                                        <span class="item-count">3</span>
                                        <i class="ion-bag"></i>
                                    </div>
                                    <div class="minicart-front_text">
                                        <span>Cart:</span>
                                        <span class="total-price">462.4</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-minicart_wrapper" id="miniCart">
        <div class="offcanvas-menu-inner">
            <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
            <div class="minicart-content">
                <div class="minicart-heading">
                    <h4>Shopping Cart</h4>
                </div>
                <ul class="minicart-list">
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        <div class="product-item_img">
                            <img src="assets/images/product/product_apple_13mini.jpg" alt="Uren's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">IPhone 13 Mini</a>
                            <span class="product-item_quantity">1 x Rp14.990,000</span>
                        </div>
                    </li>
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        <div class="product-item_img">
                            <img src="assets/images/product/product_apple_11pro.jpg" alt="Uren's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">IPhone 11 Pro</a>
                            <span class="product-item_quantity">1 x Rp24.990.000</span>
                        </div>
                    </li>
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        <div class="product-item_img">
                            <img src="assets/images/product/product_apple_13.jpg" alt="Uren's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">IPhone 13</a>
                            <span class="product-item_quantity">1 x Rp2.899.000</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="minicart-item_total">
                <span>Subtotal</span>
                <span class="ammount">Rp45.000.00‬0</span>
            </div>
            <div class="minicart-btn_area">
                <a href="cart" class="uren-btn uren-btn_dark uren-btn_fullwidth">Minicart</a>
            </div>
            <div class="minicart-btn_area">
                <a href="checkout" class="uren-btn uren-btn_dark uren-btn_fullwidth">Checkout</a>
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
                        <li class="menu-item-has-children"><a href="/"><span
                                    class="mm-text">Home</span></a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="shop-left-sidebar.html">
                                <span class="mm-text">Shop</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">
                                    <a href="shop-left-sidebar.html">
                                        <span class="mm-text">Brands</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="shop-grid-fullwidth.html">
                                                <span class="mm-text">Oppo</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-4-column.html">
                                                <span class="mm-text">Samsung</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar.html">
                                                <span class="mm-text">Xiaomi</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">
                                                <span class="mm-text">Realme</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">
                                                <span class="mm-text">Infinix</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">
                                                <span class="mm-text">OnePlus</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">
                                                <span class="mm-text">Vivo</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">
                                                <span class="mm-text">Apple</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop-list-left-sidebar.html">
                                        <span class="mm-text">Accessories</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="shop-list-fullwidth.html">
                                                <span class="mm-text">Calbe</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-list-left-sidebar.html">
                                                <span class="mm-text">Earphone</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-list-right-sidebar.html">
                                                <span class="mm-text">Headphone</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-list-right-sidebar.html">
                                                <span class="mm-text">Charger</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-list-right-sidebar.html">
                                                <span class="mm-text">Case</span>
                                            </a>
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
                                <li>
                                    <a href="my-account.html">
                                        <span class="mm-text">My Account</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="login-register.html">
                                        <span class="mm-text">Login | Register</span>
                                    </a>
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
