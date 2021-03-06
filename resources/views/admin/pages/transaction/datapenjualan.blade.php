@extends('admin.layouts.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Transaksi</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                            <li class="breadcrumb-item active">Data Penjualan</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <h3 class="card-title my-auto">Data Penjualan</h3>
                                    {{-- <a href="/addproduct">
                                        <button class="btn btn-sm btn-success" style="margin-left: 780px;">Tambah
                                            Produk</button>
                                    </a> --}}
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Id</th>
                                            <th>Nama Pembeli</th>
                                            <th>Nama Produk</th>
                                            <th>Jumlah</th>
                                            <th>Alamat</th>
                                            <th>Pembayaran</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $item)
                                            <tr>
                                                <td class="text-center" style="vertical-align: middle">{{ $item->id }}</td>
                                                <td style="vertical-align: middle">{{ $item->address->name }}</td>
                                                <td style="vertical-align: middle">
                                                    @foreach ($item->detailTransaction as $product)
                                                        <li style="text-align: left">{{ $product->product->name }}</li>
                                                    @endforeach
                                                </td>
                                                <td style="vertical-align: middle">
                                                    @foreach ($item->detailTransaction as $product)
                                                        <li>{{ $product->quantity }} pcs</li>
                                                    @endforeach
                                                </td>
                                                <td style="vertical-align: middle">{{ $item->address->address . ' , ' . $item->address->districts . ' , ' . $item->address->city . ' , ' . $item->address->province . ' , ' . $item->address->country }}
                                                </td>
                                                <td class="text-center" style="vertical-align: middle">{{ $item->paymet_method }}</td>
                                                <td class="text-center" style="vertical-align: middle">{{ $item->status }}</td>
                                                <td class="text-center" style="vertical-align: middle">
                                                    <a href="{{ route('detailorder', $item->id) }}"
                                                        class="btn btn-warning btn-sm" style="width: 30px; height: 30px;"><i class="fas fa-info"></i></a>
                                                    
                                                    @if ($item->status != 'Shipping')
                                                    <a href="{{ route('update-status-order', $item->id) }}"
                                                        class="btn btn-success btn-sm" style="width: 30px; height: 30px;"><i class="fas fa-arrow-up"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
