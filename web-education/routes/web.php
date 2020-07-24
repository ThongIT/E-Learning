<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/khoa-hoc', function () {
    return view('khoa-hoc');
});

// Route::get('/chi-tiet-khoa-hoc', function () {
//     return view('KhoaHoc.chi-tiet-khoa-hoc');
// });

Route::get('/giang-vien', function () {
    return view('giang-vien');
});

Route::get('/thong-tin-giang-vien', function () {
    return view('thong-tin-giang-vien');
});

Route::get('dang-nhap', function () {
    return view('login-2');
});

Route::get('/dang-ky', function () {
    return view('register');
});

Route::get('/doi-mat-khau', function () {
    return view('doi-mat-khau');
});

Route::get('/lien-he', function () {
    return view('lien-he');
});

Route::get('/khoa-hoc-cua-toi', function () {
    return view('khoa-hoc-cua-toi');
});

Route::get('/thong-tin-ca-nhan', function () {
    return view('thong-tin-ca-nhan');
});

Route::get('/login-admin', function () {
    return view('login-admin');
});

Route::get('/ds-linh-vuc', function () {
    return view('ds-linh-vuc');
});

Route::get('/thong-ke', function () {
    return view('thong-ke');
});

Route::get('/ds-hoc-vien', function () {
    return view('ds-hoc-vien');
});

Route::get('/ds-giang-vien', function () {
    return view('ds-giang-vien');
});

Route::get('/kich-hoat-khoa-hoc', function () {
    return view('kich-hoat-khoa-hoc');
});

Route::get('/them-cau-hoi', function () {
    return view('them-cau-hoi');
})->name('them-cau-hoi');

Route::get('/ds-khoa-hoc-da-tao', function () {
    return view('ds-khoa-hoc-da-tao');
});

Route::get('/tao-bai-giang-cho-chuong', function () {
    return view('tao-bai-giang-cho-chuong');
});
Route::get('/tao-mo-ta-khoa-hoc', function () {
    return view('tao-mo-ta-khoa-hoc');
});

Route::get('/tao-chuong-cho-khoa-hoc', function () {
    return view('tao-chuong-cho-khoa-hoc');
});

Route::get('/tao-bai-trac-nghiem', function () {
    return view('tao-bai-trac-nghiem');
});

Route::get('/sua-mo-ta-khoa-hoc', function () {
    return view('sua-mo-ta-khoa-hoc');
});

Route::get('/sua-chuong-khoa-hoc', function () {
    return view('sua-chuong-khoa-hoc');
});

Route::get('/sua-bai-giang-khoa-hoc', function () {
    return view('sua-bai-giang-khoa-hoc');
});

Route::get('/gioi-thieu', function () {
    return view('gioi-thieu');
});

Route::get('quen-mat-khau', function () {
    return view('quen-mat-khau');
});

Route::get('thu-lay-gia-tri', function () {
    return view('thu-lay-gia-tri');
});

// Route::get('tim-kiem', function () {
//     return view('tim-kiem');
// });

Route::prefix('trang-chu')->group(function () {
    Route::name('trang-chu.')->group(function(){
    //trang chủ
    Route::get('/', 'KhoaHocController@index')->name('index');
    //trang khóa học
    Route::get('khoa-hoc', 'KhoaHocController@hienThiKhoaHoc')->name('khoa-hoc');
    //Hiển thị tìm kiếm
    Route::get('tim-kiem', 'KhoaHocController@timKiem')->name('xu-ly-tim-kiem');
     //Hiển thị tìm kiếm nâng cao
     Route::get('tim-kiem-nc', 'KhoaHocController@timKiemNangCao')->name('xu-ly-tim-kiem-nc');
    //Hiển thị chi tiết khóa  học
    Route::get('khoa-hoc/{id}', 'KhoaHocController@hienThiChiTietKhoaHoc')->name('chi-tiet-khoa-hoc');

    });
});

Route::get('trac-nghiem','GhiFileXmlController@docDuLieu')->name('trac-nghiem');
Route::post('ghi-file','GhiFileXmlController@ghiDuLieu')->name('ghi-file');
// Route::get('','NguoiDungCotroller@getDangNhap')->name('dangnhap');
// Route::post('/login-2','NguoiDungCotroller@postxulyDangNhap')->name('xulydangnhap');
?>
