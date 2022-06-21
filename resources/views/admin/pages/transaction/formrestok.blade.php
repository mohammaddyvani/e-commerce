@extends('admin.layouts.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Restok Produk</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Restok Produk</li>
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
                                    <h3 class="card-title my-auto">Restok Produk</h3>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{$action}}" method="POST" enctype="multipart/form-data">
                                    @csrf  
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb--20">
                                            <label for="nameproduct" class="form-label">Name Produk</label>
                                            <select name="product_id" class="form-control form-select">
                                                <option selected>Select Product</option>
                                                @foreach ($products as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label class="form-label">Jumlah</label>
                                            <input type="number" name="quantity" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb--20 mt-4">
                                            <a href="{{ route('restockproduct') }}" class="btn btn-secondary">Kembali</a>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>    
                                    </div>                         
                                </form>
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
