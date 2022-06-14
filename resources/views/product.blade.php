@extends('layouts.app')

@section('content')
    <!-- Begin Uren's Shop Grid Fullwidth  Area -->
    <div class="shop-content_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-toolbar">
                        <div class="product-view-mode">
                            {{-- <a class="grid-1" data-target="gridview-1" data-toggle="tooltip" data-placement="top"
                                title="1">1</a> --}}
                            {{-- <a class="grid-2" data-target="gridview-2" data-toggle="tooltip" data-placement="top"
                                title="2">2</a> --}}
                            <a class="grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top"
                                title="3">3</a>
                            <a class="grid-4" data-target="gridview-4" data-toggle="tooltip" data-placement="top"
                                title="4">4</a>
                            <a class="active grid-5" data-target="gridview-5" data-toggle="tooltip" data-placement="top"
                                title="5">5</a>
                            {{-- <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top"
                                title="List"><i class="fa fa-th-list"></i></a> --}}
                        </div>

                        <div class="product-item-selection_area">
                            <div class="product-short">
                                <label class="select-label">Short By:</label>
                                <select class="myniceselect nice-select">
                                    <option value="1">Default</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                    <option value="5">Rating (Highest)</option>
                                    <option value="5">Rating (Lowest)</option>
                                    <option value="5">Model (A - Z)</option>
                                    <option value="5">Model (Z - A)</option>
                                </select>
                            </div>
                            <div class="product-showing">
                                <label class="select-label">Show:</label>
                                <select class="myniceselect short-select nice-select">
                                    <option value="1">15</option>
                                    <option value="1">20</option>
                                    <option value="1">25</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="shop-product-wrap grid gridview-5 listfullwidth img-hover-effect_area row">
                        @foreach ($products as $item)
                            <div class="col-lg-4">
                                <div class="product-slide_item">
                                    <div class="inner-slide">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="{{ route('detail', $item['name'])}}">
                                                    <img class="primary-img"
                                                        src="{{ asset('assets/images/product/' . $item['image']) }}"
                                                        alt="Uren's Product Image">
                                                </a>
                                                <div class="sticker">
                                                    <span class="sticker">New</span>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li><a class="uren-add_cart" href="{{ route('add-to-cart', $item->id) }}" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a href="{{ route('detail', $item['name'])}}"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Quick View"><i class="ion-android-open"></i></a></li>
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
                                                            <li class="silver-color"><i class="ion-android-star"></i>
                                                            </li>
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
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="uren-paginatoin-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="uren-pagination-box primary-color">
                                            <li class="active"><a href="javascript:void(0)">1</a></li>
                                            <li><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)">4</a></li>
                                            <li><a href="javascript:void(0)">5</a></li>
                                            <li><a class="Next" href="javascript:void(0)">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Uren's Shop Grid Fullwidth  Area End Here -->
@endsection
