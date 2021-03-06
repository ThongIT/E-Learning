@extends('layout')
<title>EDUQTTT - Giới thiệu</title>
@section('content')
@include('header')
<!-- Start Breadcrumb 
============================================= -->
<div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a href="/gioi-thieu">Giới thiệu</a>
    </div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="">
                    <h2>Giới thiệu</h2>
                </div>
            </div>
        </div>
    </div>
<!-- End Breadcrumb -->

<!-- Start About 
============================================= -->
<div class="about-area default-padding">
    <div class="container">
        <div class="row">
            <div class="about-items">
                <div class="about-info">
                    <h2>Xin Chào ! <span>Chúng tôi là EDUQTTT</span></h2>
                    <blockquote>
                        EDUQTTT tự hào là "siêu thị" các khóa học trực tuyến ngắn hạn lớn nhất Đông Nam Á với hàng nghìn khóa học thuộc mọi lĩnh vực, đội ngũ giảng viên chuyên nghiệp, giàu kinh nghiệm và mạng lưới học viên rộng khắp cả nước. Educom - nơi bạn học mọi kĩ năng làm chủ tương <br>
                        EDUQTTT - Sự lựa chọn cho mọi lứa tuổi, kỹ năng và trình độ<br>
                        Phương pháp sư phạm LIPE<br>
                        Trải nghiệm học tập không giới hạn<br>
                        Mua một lần học trọn đời<br>
                        Dễ học, dễ ứng dụng<br>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->
@endsection
