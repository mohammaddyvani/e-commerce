@extends('layouts.app')

@section('content')
    <!--Begin Uren's Wishlist Area -->
    <div class="uren-wishlist_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="javascript:void(0)">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="uren-product_remove">remove</th>
                                        <th class="uren-product-thumbnail">images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="uren-product-price">Unit Price</th>
                                        <th class="uren-product-stock-status">Stock Status</th>
                                        <th class="uren-cart_btn">add to cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wishlistProduct as $item)
                                    <tr>
                                        <td class="uren-product_remove"><a href="javascript:void(0)"><i
                                                    class="fa fa-trash" title="Remove"></i></a></td>
                                        <td class="uren-product-thumbnail"><a href="javascript:void(0)"><img
                                                    src="{{ asset('assets/images/product/' . $item['image']) }}"
                                                    alt="Uren's Wishlist Thumbnail"></a>
                                        </td>
                                        <td class="uren-product-name"><a href="javascript:void(0)">{{ $item['name'] }}</a></td>
                                        <td class="uren-product-price"><span class="amount">Rp{{ number_format($item->price, 0, ',', '.') }}</span></td>
                                        <td class="uren-product-stock-status"><span class="in-stock">in stock</span>
                                        </td>
                                        <td class="uren-cart_btn"><a href="javascript:void(0)">add to cart</a></td>
                                    </tr>
                                        
                                    @endforeach
                                    {{-- <tr>
                                        <td class="uren-product_remove"><a href="javascript:void(0)"><i
                                                    class="fa fa-trash" title="Remove"></i></a></td>
                                        <td class="uren-product-thumbnail"><a href="javascript:void(0)"><img
                                                    src="assets/images/product/small-size/2.jpg"
                                                    alt="Uren's Wishlist Thumbnail"></a>
                                        </td>
                                        <td class="uren-product-name"><a href="javascript:void(0)">Suretin mipen ruma</a>
                                        </td>
                                        <td class="uren-product-price"><span class="amount">??30.50</span></td>
                                        <td class="uren-product-stock-status"><span class="in-stock">in stock</span>
                                        </td>
                                        <td class="uren-cart_btn"><a href="javascript:void(0)">add to cart</a></td>
                                    </tr>
                                    <tr>
                                        <td class="uren-product_remove"><a href="javascript:void(0)"><i
                                                    class="fa fa-trash" title="Remove"></i></a></td>
                                        <td class="uren-product-thumbnail"><a href="javascript:void(0)"><img
                                                    src="assets/images/product/small-size/3.jpg"
                                                    alt="Uren's Wishlist Thumbnail"></a>
                                        </td>
                                        <td class="uren-product-name"><a href="javascript:void(0)">Bag Goodscol model</a>
                                        </td>
                                        <td class="uren-product-price"><span class="amount">??40.19</span></td>
                                        <td class="uren-product-stock-status"><span class="out-stock">out stock</span>
                                        </td>
                                        <td class="uren-cart_btn"><a href="javascript:void(0)">add to cart</a></td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Uren's Wishlist Area End Here -->
@endsection
