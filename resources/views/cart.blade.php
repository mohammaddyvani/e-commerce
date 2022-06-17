@extends('layouts.app')

@section('content')

    <!-- Begin Uren's Cart Area -->
    <div class="uren-cart-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="uren-product-remove">remove</th>
                                    <th class="uren-product-thumbnail">images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="uren-product-price">Unit Price</th>
                                    <th class="uren-product-quantity">Quantity</th>
                                    <th class="uren-product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $subtotal = 0; @endphp
                                @foreach ($data as $item)
                                <tr>
                                    <td class="uren-product-remove">
                                        <form action="{{ route('remove-from-bigcart', $item->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                    <td class="uren-product-thumbnail"><a><img src="{{ asset('assets/images/product/' . $item->product->image) }}" alt="Uren's Cart Thumbnail"></a></td>
                                    <td class="uren-product-name"><a href="">{{ $item->product->name }}</a></td>
                                    <td class="uren-product-price"><span class="amount">Rp{{ number_format($item['price']) }}</span></td>
                                    <td class="quantity" width="200">
                                        <form action="{{ route('update-qty', $item->id) }}" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <input class="form-control" name="qty" value="{{ $item->quantity }}" type="number">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">Rp{{ number_format($item['price'] * $item->quantity) }}</span></td>
                                    @php $subtotal += $item['price'] * $item->quantity; @endphp
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                </div>
                                <div class="coupon2">
                                    <input class="button" name="update_cart" value="Update cart" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span>Rp. {{ number_format($subtotal, 0, ',', '.') }}</span></li>
                                    <li>Diskon <span>Rp. 0</span></li>
                                    <li>Total <span>Rp. {{ number_format($subtotal, 0, ',', '.') }}</span></li>
                                </ul>
                                <a href="{{ route('checkout')}}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Uren's Cart Area End Here -->

@endsection