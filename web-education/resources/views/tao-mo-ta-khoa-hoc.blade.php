@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Tạo mô tả khóa học</h1>
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
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                    @endforeach
                                </div>
                            @endif
                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                            <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="form-group">
                                    <label for="tenkhoahoc">Tên khóa học</label>
                                    <input type="text" class="form-control" placeholder="Thiết kế website" name="TenKhoaHoc" value="{{ old('TenKhoaHoc') }}">
                                </div>
                                <div class="form-group">
                                    <label for="motakhoahoc">Mô tả khóa học</label>
                                    <input type="text" class="form-control" placeholder="website" name="MoTaKhoaHoc" value="{{ old('MoTaKhoaHoc') }}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="mucdo">Cấp độ</label>
                                    <select name="MucDo" id="">
                                        <option value="socap">Sơ cấp</option>
                                        <option value="trungcap">Trung cấp</option>
                                        <option value="chuyensau">Chuyên sâu</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="ngonngu">Ngôn ngữ</label>
                                    <select name="NgonNgu" id="">
                                        <option value="Tiếng việt">Tiếng việt</option>
                                        <option value="Tiếng anh">Tiếng anh</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="gia">Giá khóa học</label>
                                    <input type="number" class="form-control" name="Gia" placeholder="500.000 đồng" value="{{ old('Gia') }}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="khoahoc">Ảnh khóa học</label>
                                    <input type="file" class="form-control-file" name="AnhKhoaHoc" value="{{ old('AnhKhoaHoc') }}">
                                </div>
                                <div class="form-group">
                                    <label for="linhvuc">Lĩnh vực</label>
                                    <select class="form-control" id="" name="LinhVuc">
                                    @foreach ($linhvucs as $lv)
                                    <option value="{{$lv->id}}">
                                        {{$lv->ten_linh_vuc}}
                                    </option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="motatongquat">Mô tả tổng quát</label>
                                    <input type="textarea" class="form-control" name="MoTaTongQuat" value="{{ old('MoTaTongQuat') }}" rows="3" >
                                </div>
                                <button type="submit" class="btn btn-success">Lưu lại</button>
                                <button type="reset" class="btn btn-danger">Làm mới</button>
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
