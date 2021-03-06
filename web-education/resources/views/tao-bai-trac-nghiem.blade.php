@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Tạo bài trắc nghiệm</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">

                    <div class="blog-content col-md-9">
                        <form method="post" action="">
                            <div class="panel panel-info">
                              <div class="panel-heading">Khóa học đang tạo</div>
                              <div class="panel-body">Phát Âm Tiếng Anh Chuẩn</div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Danh sách chương đã tạo</label>
                                <select class="form-control" id="selectChuong">
                                  <option>Giới thiệu</option>
                                  <option>Ngữ âm cơ bản</option>
                                  <option>Ngữ âm nâng cao</option>
                                  <option>Tổng kết</option>
                                </select>
                            </div>
                             <br>
                            <div id="inputFormBaiGiang">
                                <div class="col-sm-8">
                                    <label for="motakhoahoc">Tên bài kiểm tra</label>
                                    <input type="text" class="form-control" id="motakhoahoc" placeholder="Tên bài kiểm tra">
                                </div>
                                <div class="col-sm-4">
                                    <label for="motakhoahoc">Thời gian làm bài(Phút)</label>
                                    <input type="number" class="form-control" min=1>
                                </div>
                            </div>
                            <br>
                            <div>
                                <button type="button" class="btn btn-success">Lưu lại</button>
                                <button type="button" class="btn btn-danger">Làm mới</button>
                            </div>
                        </form>
                    </div>
                    @include('panel')
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection

@section('js')

@endsection
