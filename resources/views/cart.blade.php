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
                                @php $subtotal = 0; $newPrice = 0; $totalDiscount = 0; $newTotal = 0; @endphp
                                @foreach ($data as $item)
                                @php $newPrice = $item->price - $item->product->discount; @endphp
                                <tr>
                                    <td class="uren-product-remove">
                                        <form action="{{ route('remove-from-bigcart', $item->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                    <td class="uren-product-thumbnail"><a><img src="{{ asset('assets/images/product/' . $item->product->image) }}" alt="Uren's Cart Thumbnail"></a></td>
                                    <td class="uren-product-name"><a style="color: #343A40">{{ $item->product->name }}</a></td>
                                    <td class="uren-product-price"><span class="amount">Rp. {{ number_format($item->product->price, 0, ',', '.') }}</span></td>
                                    <td class="quantity" width="200">
                                        <form action="{{ route('update-qty', $item->id) }}" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <input class="form-control mx-2x rounded" name="qty" value="{{ $item->quantity }}" type="number">
                                                <div class="input-group-append mx-2 rounded">
                                                    <button class="btn btn-primary" type="submit">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">Rp. {{ number_format($item->price * $item->quantity, 0 ,',', '.') }}</span></td>
                                    @php 
                                    $subtotal += $item->price * $item->quantity; 
                                    $totalDiscount += $item->product->discount * $item->quantity; 
                                    $newTotal = $subtotal - $totalDiscount; 
                                    @endphp
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span>Rp. {{ number_format($subtotal, 0, ',', '.') }}</span></li>
                                    <li>Diskon <span>Rp. {{ number_format($totalDiscount, 0, ',', '.') }}</span></li>
                                    <li>Total <span>Rp. {{ number_format($newTotal, 0, ',', '.') }}</span></li>
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