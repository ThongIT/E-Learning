@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{asset('assets/img/banner/19.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Chi tiết khóa học</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Course Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Course Details
    ============================================= -->
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Course Info -->
                <div class="col-md-9">
                    <div class="courses-info">
                        <h2>
                            {{ $dsKhoaHoc->ten_khoa_hoc}}
                        </h2>
                        <div class="course-meta">
                            <div class="item author">
                                <div class="thumb">
                                    <a href="#"><img alt="Thumb" src="{{ asset('assets/images/'.$dsKhoaHoc->giangVien->anh_dai_dien) }}"></a>
                                </div>
                                {{--  <div class="desc">
                                    <h4>{{ $dsKhoaHoc->giangVien->ho_ten }}</h4>
                                    <a href="#">{{ $dsKhoaHoc->giangVien->email }}</a>
                                </div>  --}}
                            </div>
                            <div class="item category">
                                <h4>Mức Độ</h4>
                                <a href="#">{{ $dsKhoaHoc->muc_do }}</a>
                            </div>
                            <div class="item rating">
                                <h4>Đánh giá</h4>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>({{ sizeof($danhGia) }} Đánh giá)</span>
                            </div>
                            <div class="item price">
                                <h4>Giá</h4>
                                <span>{{ number_format($dsKhoaHoc->gia) }} VNĐ</span>
                            </div>
                            <div class="align-right">
                                <a class="btn btn-theme effect btn-sm" href="#">
                                    <i class="fas fa-chart-bar"></i> Ghi danh
                                </a>
                            </div>
                        </div>
                        <img class="img-ct-khoa-hoc" src="{{asset('assets/images/'.$dsKhoaHoc->hinh_anh)}}" alt="Thumb">
                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                        Thông tin chung
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        Giáo trình
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                       Giảng viên
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab4" aria-expanded="false">
                                        Đánh giá
                                    </a>
                                </li>
                            </ul>
                            <!-- End Tab Nav -->
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <!-- Single Tab -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="info title">
                                        <p>
                                            {!! $dsKhoaHoc->mo_ta_chi_tiet !!}
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->

                                <div id="tab2" class="tab-pane fade">
                                    <div class="info title">
                                        <p>
                                        </p>
                                        <h4>Danh Sách Bài Học</h4>
                                        @foreach($dsKhoaHoc->Chuong as $key => $dschuong)
                                        <!-- Start Course List -->
                                        <div class="course-list-items acd-items acd-arrow">
                                            <div class="panel-group symb" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#ac{{$dschuong->id}}">
                                                                <strong>{{$loop->index +1}}</strong>
                                                                {{ $dschuong->ten_chuong }}
                                                            </a>
                                                        </h4>
                                                    </div>

                                                    <div id="ac{{ $dschuong->id }}" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                @foreach($dschuong->noiDung as $dsBai)
                                                                <li>
                                                                    <div class="title">
                                                                        <i class="fas fa-play-circle"></i>
                                                                        <!-- <i class="fas fa-file"></i> -->
                                                                        <p>
                                                                            Bài {{$key +1}}.{{$loop->index +1}}
                                                                        </p>
                                                                        <h5>
                                                                            <a href="#">{{ $dsBai->tieu_de }}</a>
                                                                        </h5>
                                                                        <div class="access-type">
                                                                            <img src="{{asset('assets/img/quiz.png')}}" alt="Kiểm tra" style="width:20px;height:20px;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="intro">
                                                                        <div class="item">
                                                                            <p>
                                                                                Phát hành - {{ $dsBai->created_at->diffForHumans() }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="item">
                                                                            <p>
                                                                                Duration: 1 hours 30 min
                                                                            </p>
                                                                           <a href="#">Preview</a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Course List -->

                                        @endforeach
                                    </div>
                                </div>

                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab3" class="tab-pane fade">
                                    <div class="info title">
                                        <div class="advisor-list-items">
                                            <!-- Advisor Item -->
                                            <div class="item">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/'.$dsKhoaHoc->giangVien->anh_dai_dien) }}" alt="Thumb">
                                                </div>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4>@if($toChuc) {{ $toChuc->ten_to_chuc }} @else {{ $dsKhoaHoc->giangVien->ho_ten }} @endif</h4>
                                                    </div>
                                                    <span class="designation">@if($toChuc) {{ $toChuc->emal_nlh }} @else {{ $dsKhoaHoc->giangVien->email }} @endif</span>
                                                    <p>
                                                    {{$dsKhoaHoc->giangVien->gioi_thieu}}
                                                    </p>
                                                    <p>
                                                    Số khóa học: {{$dsKhoaHoc->giangVien->khoaHoc->count()}}
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- End Advisor Item -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab4" class="tab-pane fade">
                                    <div class="info title">
                                        <div class="course-rating-list">
                                            <div class="average-rating">
                                                <h2>{{ $ctDanhGia[5] }}</h2>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <h4>{{ sizeof($danhGia) }} đánh giá</h4>
                                            </div>
                                            <div class="rating-status">
                                                <!-- Progress Bar Start -->
                                                <div class="progress-box">
                                                    <h5>5 Star <span class="pull-right">{{ $ctDanhGia[4] }}</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="{{$ctDanhGia[10]}}"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <h5>4 Star <span class="pull-right">{{ $ctDanhGia[3] }}</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="{{ $ctDanhGia[9] }}"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <h5>3 Star <span class="pull-right">{{ $ctDanhGia[2] }}</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="{{ $ctDanhGia[8] }}"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <h5>2 Star <span class="pull-right">{{ $ctDanhGia[1] }}</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="{{ $ctDanhGia[7] }}"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <h5>1 Star <span class="pull-right">{{ $ctDanhGia[0] }}</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="{{ $ctDanhGia[6] }}"></div>
                                                    </div>
                                                </div>
                                                <!-- End Progressbar -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Tab -->
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->
                    </div>
                </div>
                <!-- End Course Info -->

                <!-- Start Course Sidebar -->
                <div class="col-md-3">
                    <div class="aside">
                        <!-- Sidebar Item -->
                        <div class="sidebar-item course-info">
                            <div class="title">
                                <h4>Mô tả khóa học</h4>
                            </div>
                            <ul>
                                <li><i class="flaticon-translation"></i> Ngôn Ngữ  <span class="pull-right">{{ $dsKhoaHoc->ngon_ngu }}</span></li>
                                <li><i class="flaticon-faculty-shield"></i> Bài giảng  <span class="pull-right">{{ $dsKhoaHoc->dsChuongBai->count() }}</span></li>
                                <li><i class="flaticon-film"></i> Video  <span class="pull-right">04:15:38</span></li>
                                <li><i class="flaticon-levels"></i> Mức độ  <span class="pull-right">{{ $dsKhoaHoc->muc_do }}</span></li>
                                <li><i class="flaticon-group-of-students"></i> Học viên  <span class="pull-right">{{ sizeof($dsKhoaHoc->ctHoaDon) }}</span></li>
                            </ul>
                        </div>
                        <!-- End Sidebar Item -->
                        <!-- Sidebar Item -->
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>Lĩnh vực</h4>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">Java Programming <span>23</span></a>
                                </li>
                                <li>
                                    <a href="#">Social Science <span>0</span></a>
                                </li>
                                <li>
                                    <a href="#">Business Management <span>12</span></a>
                                </li>
                                <li>
                                    <a href="#">Online Learning <span>17</span></a>
                                </li>
                                <li>
                                    <a href="#">Course Management <span>0</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Sidebar Item -->
                        <!-- Sidebar Item -->
                        <div class="sidebar-item similar-courses">
                            <div class="title">
                                <h4>Khóa học tương tự</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{asset('assets/img/gallery/9.jpg')}}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Subjects allied to Creative arts and design</a>
                                        <div class="meta">
                                            <span>$29.00</span>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{asset('assets/img/gallery/10.jpg')}}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Business and administrative subjects</a>
                                        <div class="meta">
                                            <span>$26.00</span>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{asset('assets/img/gallery/11.jpg')}}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Business and administrative subjects</a>
                                        <div class="meta">
                                            <span>$18.00</span>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Sidebar Item -->
                    </div>
                </div>
                <!-- End Course Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Course Details -->

    <!-- Start Newsletter
    ============================================= -->
    <!-- <div class="newsletter-area fixed">
        <div class="container">
            <div class="subscribe-items shadow theme-hard default-padding bg-cover" style="background-image: url({{asset('assets/img/banner/11.jpg')}});">
                <div class="row">
                    <div class="col-md-7 left-info">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <h3>Subscribe to our newsletter</h3>
                                <p>
                                    Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <form action="#">
                            <div class="input-group">
                                <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                <button type="submit">
                                    Subscribe <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Newsletter -->
@endsection
