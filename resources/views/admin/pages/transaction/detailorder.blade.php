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
                                    {{-- </div> --}}
                                    <div class="mb-3">
                                        <label class="form-label">Alamat Pengiriman</label>
                                        <textarea rows="3" class="form-control" disabled readonly>{{ $item->address->address . ' , ' . $item->address->districts . ' , ' . $item->address->city . ' , ' . $item->address->province . ' , ' . $item->address->country }}</textarea>
                                    </div>
                                    @endforeach
                                    {{-- <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Konfirmasi Password</label>
                                        <input type="password" name="confirm_password" placeholder="Konfirmasi Password" class="form-control">
                                    </div> --}}
                                    {{-- <div class="mb-3">
                                        <label for="selectrole" class="form-label">Role</label>
                                        <select class="form-select form-control" name="role_id"
                                            aria-label="Default select example">
                                            <option selected>Select Role</option>
                                            @foreach ($roles as $item)
                                                <option value="{{ $item->id }}"
                                                {{ isset($users) && $users->role_id == $item->id ? 'Selected' : '' }}>
                                                {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a class="btn btn-secondary" href="/datauser" role="button">Cancle</a> --}}
                                {{-- </form> --}}
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