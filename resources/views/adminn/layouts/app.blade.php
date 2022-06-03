@extends('admin.layouts.base');

@section('app')
<div id="wrapper">
    @include('admin.layouts.partials.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('admin.layouts.partials.top-nav')

            @yield('content')

        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> - developed by
                        <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
                    </span>
                </div>
            </div>

            <div class="container my-auto py-2">
                <div class="copyright text-center my-auto">
                    <span>copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> - distributed by
                        <b><a href="https://themewagon.com/" target="_blank">themewagon</a></b>
                    </span>
                </div>
            </div>
        </footer>
        <!-- Footer -->
    </div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="{{ asset('assetsAdmin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/js/ruang-admin.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

@endsection