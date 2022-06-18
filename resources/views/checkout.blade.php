@extends('layouts.app')

@section('content')
    <!-- Begin Uren's Checkout Area -->
    <div class="checkout-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="coupon-accordion">
                        <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="javascript:void(0)">
                                    <p class="checkout-coupon">
                                        <input placeholder="Coupon code" type="text">
                                        <input class="coupon-inner_btn" value="Apply Coupon" type="submit">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        @csrf
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Country <span class="required">*</span></label>
                                        <select class="myniceselect nice-select wide" name="country">
                                            <option data-display="Select Country">Select Country</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Singapore">Singapore</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input placeholder="First Name" name="firstname" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input placeholder="Last Name" name="lastname" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <textarea rows="2" name="address" class="form-control"></textarea>
                                    </div>
                                </div>
                                {{-- <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" name="city">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Region / Districts <span class="required">*</span></label>
                                        <input placeholder="" type="text" name="districts">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Province <span class="required">*</span></label>
                                        <input placeholder="" type="text" name="province">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input placeholder="" type="text" name="postal_code">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input placeholder="" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="your-order">
                            <h3>Your order</h3>
                            <div class="your-order-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="cart-product-name">Product</th>
                                            <th class="cart-product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $subtotal = 0;
                                            $discount = 0;
                                            $totalpay = 0;
                                        @endphp
                                        @foreach ($data as $item)
                                            <tr class="cart_item">
                                                <td class="cart-product-name"> {{ $item->product->name }}<strong
                                                        class="product-quantity">
                                                        × {{ $item->quantity }}</strong></td>
                                                <td class="cart-product-total"><span
                                                        class="amount">Rp. {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</span></td>
                                                @php
                                                    $subtotal += $item['price'] * $item->quantity;
                                                    $discount += $item->product->discount;
                                                    $totalpay = $subtotal - $discount;
                                                @endphp
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        {{-- @foreach ($data as $item) --}}
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td na><span class="amount"><input type="hidden" name="total_price" value="{{ $subtotal }}">Rp.
                                                    {{ number_format($subtotal, 0, ',', '.') }}</span>
                                            </td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th>Discount</th>
                                            <td><span class="amount">Rp.
                                                    {{ number_format($discount, 0, ',', '.') }}</span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount"><input type="hidden" name="total_payment" value="{{ $totalpay }}">Rp.
                                                        {{ number_format($totalpay, 0, ',', '.') }}</span></strong></td>
                                        </tr>

                                        {{-- @endforeach --}}
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="#payment-1">
                                                <h5 class="panel-title">
                                                    <label data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="false" aria-controls="collapseOne">
                                                        <a>
                                                            <input type="radio" name="paymet_method" value="Bank">
                                                            <span>Direct Bank Transfer</span>
                                                            <i class="fas fa-credit-card ml-2"></i>
                                                        </a>
                                                    </label>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Make your payment directly into our bank account. Please use your
                                                        Order
                                                        ID as the payment
                                                        reference. Your order won’t be shipped until the funds have cleared
                                                        in
                                                        our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="#payment-2">
                                                <h5 class="panel-title">
                                                    <label class="collapsed" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        <a>
                                                            <input type="radio" name="paymet_method" value="COD">
                                                            <span>Cash on Delivery</span>
                                                            <i class="fas fa-truck ml-2"></i>
                                                        </a>
                                                    </label>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Make your payment directly into our bank account. Please use your
                                                        Order
                                                        ID as the payment
                                                        reference. Your order won’t be shipped until the funds have cleared
                                                        in
                                                        our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-button-payment">
                                        <input value="Place order" type="submit">
                                        {{-- <button type="submit">Place order</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Uren's Checkout Area End Here -->
@endsection
