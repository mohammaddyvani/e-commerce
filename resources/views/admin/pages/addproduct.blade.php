@extends('admin.layouts.base')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Produk</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Tambah Produk</li>
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
                                    <h3 class="card-title my-auto">Tambah Produk</h3>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{$action}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nameproduct" class="form-label">Name Product</label>
                                        <input type="text" name="name" class="form-control" id="nameproduct"
                                            aria-describedby="name" value="{{ isset($products) ? $products->name : '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="selectbrands" class="form-label">Brands</label>
                                        <select class="form-select form-control" name="brand_id"
                                            aria-label="Default select example">
                                            <option selected>Select Brands</option>
                                            @foreach ($brands as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ isset($products) && $products->brand_id == $item->id ? 'Selected' : '' }}>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="selectcatalog" class="form-label">Category</label>
                                        <select class="form-select form-control" name="catalog"
                                            aria-label="Default select example">
                                            <option selected>Select Category</option>
                                            <option value="accessories" {{ isset($products) && $products->catalog == 'accessories' ? 'Selected' : '' }}>Accessoris</option>
                                            <option value="smartphone" {{ isset($products) && $products->catalog == 'smartphone' ? 'Selected' : '' }}>Smartphone</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="descriptionDimension" class="form-label">Dimension</label>
                                        <input type="text" name="des_Dimensions" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ isset($products) ? $products->des_Dimensions : '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="descriptionDisplay" class="form-label">Display</label>
                                        <input type="text" name="des_Display" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ isset($products) ? $products->des_Display : '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="descriptionOS" class="form-label">OS</label>
                                        <input type="text" name="des_OS" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ isset($products) ? $products->des_OS : '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="descriptionChipset" class="form-label">Chipset</label>
                                        <input type="text" name="des_Chipset" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ isset($products) ? $products->des_Chipset : '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="descriptionCPU" class="form-label">CPU</label>
                                        <input type="text" name="des_CPU" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ isset($products) ? $products->des_CPU : '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="descriptionMemory" class="form-label">Memory</label>
                                        <input type="text" name="des_memory" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ isset($products) ? $products->des_memory : '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="descriptionBattrey" class="form-label">Battrey</label>
                                        <input type="text" name="des_battery" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ isset($products) ? $products->des_battery : '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Description" class="form-label">Description</label>
                                        <textarea name="short_description" id="description" rows="3" class="form-control">{{ isset($products) ? $products->short_description : '' }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Price</label>
                                        <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ isset($products) ? $products->price : '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Stock</label>
                                        <input type="number" name="stock" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ isset($products) ? $products->des_stock : '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Discount</label>
                                        <input type="number" name="discount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ isset($products) ? $products->discount : '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Image</label>
                                        <input type="file" name="file" id="dropify">
                                        {{-- <input type="text" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp value="{{ isset($products) ? $products->image : '' }}""> --}}
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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

@section('script')

<script >
    $(document).ready(function() {
        $('#dropify').dropify();
    });
</script>

@endsection