@extends('admin.layouts.base')

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <h3 class="card-title my-auto">Form User</h3>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @foreach ($detail as $item)                                
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Nama Penerima</label>
                                            <input type="text" value="{{ $item->address->name }}" class="form-control" disabled readonly>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>User</label>
                                            <input type="text" value="{{ $item->id_user }}" class="form-control" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Alamat</label>
                                            <textarea rows="2" class="form-control" disabled readonly>{{ $item->address->address . ' , ' . $item->address->districts . ' , ' . $item->address->city . ' , ' . $item->address->province . ' , ' . $item->address->country }}</textarea>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>No. Telp</label>
                                            <input type="text" value="{{ $item->address->phone }}" class="form-control" disabled readonly>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Jenis Pembayaran</label>
                                            <input type="text" value="{{ $item->paymet_method }}" class="form-control" disabled readonly>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Status</label>
                                            <input type="text" value="{{ $item->status }}" class="form-control" disabled readonly>
                                    </div>
                                    <table class="table mt-3">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="uren-product-thumbnail">Foto Produk</th>
                                                <th class="cart-product-name">Nama Produk</th>
                                                <th class="uren-product-price">Harga</th>
                                                <th class="uren-product-quantity">Jumlah</th>
                                                <th>Diskon</th>
                                                <th class="uren-product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $total = 0;
                                            $discount = 0;
                                            $subtotal = 0;
                                        @endphp
                                            @foreach ($item->detailTransaction as $i)
                                                @php
                                                    $discount = $i->product->discount * $i->quantity;
                                                    $total = ($i->product['price'] * $i->quantity) - $discount;
                                                    $subtotal += $total;
                                                @endphp
                                            <tr class="text-center">
                                                <td class="uren-product-thumbnail">
                                                    <img src="{{ asset('assets/images/product/' . $i->product->image) }}" width="100px">
                                                </td>
                                                <td style="vertical-align: middle">{{ $i->product->name }}</td>
                                                <td style="vertical-align: middle">Rp. {{ number_format($i->product->price, 0 ,',', '.') }}</td>
                                                <td style="vertical-align: middle">{{ $i->quantity }}</td>
                                                <td style="vertical-align: middle">Rp. {{ number_format($discount, 0 ,',', '.') }}</td>
                                                <td style="vertical-align: middle">Rp. {{ number_format($total, 0,',', '.') }}</td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <th class="text-center">Subtotal</th>
                                                <th class="text-center">:</th>
                                                <th class="text-center">Rp. {{ number_format($subtotal, 0,',', '.') }}</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="{{ route('dataselling') }}" class="btn btn-secondary ml-2">Kembali</a>
                                    @if (!in_array($item->status, ['Shipping', 'Cancel', 'Delivered']))
                                    <form action="{{ route('update-status-order', $item->id) }}" method="post">
                                        @csrf
                                    <button type="submit" class="btn btn-success ml-2">Proses Pengiriman</button>
                                    </form>
                                    @endif
                                    @endforeach
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('script')

<script>
    $(document).ready(function() {
        $('#dropify').dropify();
    });
</script>

@endsection