@extends('layouts.app')

@section('content')
    <!-- Begin Uren's Page Content Area -->
    <main class="page-content">
        <!-- Begin Uren's Account Page Area -->
        <div class="account-page-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="account-dashboard-tab" data-toggle="tab" href="#account-dashboard" role="tab" aria-controls="account-dashboard" aria-selected="true">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-orders-tab" data-toggle="tab" href="#account-orders" role="tab" aria-controls="account-orders" aria-selected="false">Orders</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" id="account-address-tab" data-toggle="tab" href="#account-address" role="tab" aria-controls="account-address" aria-selected="false">Addresses</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" id="account-details-tab" data-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="false">Change Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-logout-tab" href="{{ route('logout') }}" role="tab" aria-selected="false">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                            <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel" aria-labelledby="account-dashboard-tab">
                                <div class="myaccount-dashboard">
                                    <p>Hello <b>{{ $user->name }}</b> (not {{ $user->name }}? <a href="auth">Sign
                                            out</a>)</p>
                                    <p>From your account dashboard you can view your recent orders, manage your shipping and
                                        billing addresses and <a href="#">edit your password and account details</a>.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                                <div class="myaccount-orders">
                                    <h4 class="small-title">MY ORDERS</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <tbody>
                                                <tr>
                                                    <th>ORDER</th>
                                                    <th>DATE</th>
                                                    <th>NAMA BARANG</th>
                                                    <th>STATUS</th>
                                                    <th>TOTAL</th>
                                                    {{-- <th></th> --}}
                                                </tr>
                                                @foreach ($transaction as $item)
                                                <tr>
                                                    <td><a class="account-order-id">{{ $item->id }}</a></td>
                                                    <td>{{ $item->created_at == null ? '-' : date('d M Y',strtotime($item->created_at))}}</td>
                                                    <td>
                                                        <ol>
                                                            @foreach($item->detailTransaction as $i)
                                                                <li>{{ $i->product->name }} ({{ $i->quantity}} pcs)</li>
                                                            @endforeach
                                                        </ol>    
                                                    </td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>Rp. {{ number_format($item->total_price, 0, ',', '.')}}</td>
                                                    {{-- <td><a href="javascript:void(0)" class="uren-btn uren-btn_dark uren-btn_sm"><span>View</span></a> --}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                                {{-- <tr>
                                                    <td><a class="account-order-id" href="javascript:void(0)">#5356</a></td>
                                                    <td>Mar 27, 2019</td>
                                                    <td>On Hold</td>
                                                    <td>£162.00 for 2 items</td>
                                                    <td><a href="javascript:void(0)" class="uren-btn uren-btn_dark uren-btn_sm"><span>View</span></a>
                                                    </td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="tab-pane fade" id="account-address" role="tabpanel" aria-labelledby="account-address-tab">
                                <div class="myaccount-address">
                                    <p>The following addresses will be used on the checkout page by default.</p>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="small-title">BILLING ADDRESS</h4>
                                            <address>
                                                {{ $default_address->address . $default_address->city . $default_address->province . $default_address->postal_code}}
                                                {{ $default_address->name }}<br>
                                                {{ $default_address->address }}<br>
                                                {{ $default_address->city }}<br>
                                                {{ $default_address->province }}<br>
                                                {{ $default_address->postal_code }}<br>
                                                {{ $default_address->phone }}<br>
                                            </address>
                                        </div>
                                        <div class="col">
                                            <h4 class="small-title">SHIPPING ADDRESS</h4>
                                            <address>
                                                1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="tab-pane fade" id="account-details" role="tabpanel" aria-labelledby="account-details-tab">
                                <div class="myaccount-details">
                                    <form action="{{ route('changepassword') }}" class="uren-form" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @error('error')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="uren-form-inner">
                                            <div class="single-input">
                                                <label for="account-details-oldpass">Current Password(leave blank to leave
                                                    unchanged)</label>
                                                <input type="password" id="account-details-oldpass" name="oldpassword">
                                            </div>
                                            <div class="single-input">
                                                <label for="account-details-newpass">New Password (leave blank to leave
                                                    unchanged)</label>
                                                <input type="password" id="account-details-newpass" name="newpassword">
                                            </div>
                                            <div class="single-input">
                                                <label for="account-details-confpass">Confirm New Password</label>
                                                <input type="password" id="account-details-confpass" name="confrimnewpassword">
                                            </div>
                                            <div class="single-input">
                                                <button class="uren-btn uren-btn_dark" type="submit"><span>SAVE
                                                CHANGES</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Account Page Area End Here -->
    </main>
    <!-- Uren's Page Content Area End Here -->
@endsection