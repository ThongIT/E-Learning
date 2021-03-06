@extends('layout')
@section( 'content')
@include('header')
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script>
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" /> 
<!-- Start Login
    ============================================= -->
    @if (session('thongbao'))
    <script>
        swal.fire("{{ session('thongbao') }}","","success")
    </script>
@endif
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="{{ route('xu-ly-quen-mat-khau')}}" id="login-form" method="POST" class="white-popup-block">
                    @csrf
                        <div class="login-custom">
                            <div class="heading">
                                <h4><i class="fas fa-edit"></i>Quên mật khẩu </h4>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                @if(session('error'))
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                                @endif
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                        Khôi phục mật khẩu
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Đăng ký tài khoản mới <a href="dang-ky">Đăng ký</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->
@endsection
