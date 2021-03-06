@extends('layout-admin')
@section('content-admin')
<div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Khóa học</h3>
            <ul>
                <li>Danh sách khóa học</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Fees Table Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>Ảnh khóa học</th>
                                <th>Tên khóa học</th>
                                <th>Giá</th>
                                <th>Mức độ</th>
                                <th>Ngày tạo</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($hocVien->hoaDon as $dsHoaDon)
                            @foreach($dsHoaDon->ctHoaDon as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td><img src="{{ asset('assets/images/'.$item->khoaHoc->hinh_anh) }}" width="50px" height="50px"></td>
                                <td><a href="{{route('lay-chuong',$item->khoaHoc->id)}}">{{$item->khoaHoc->ten_khoa_hoc}}</a></td>
                                <td>{{number_format($item->khoaHoc->gia)}}</td>
                                <td>{{$item->khoaHoc->muc_do}}</td>
                                <td>{{$item->khoaHoc->created_at}}</td>
                            @endforeach
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Fees Table Area End Here -->
        <footer class="footer-wrap-layout1">
            <div class="copyright">© Copyrights <a href="#">QTTT</a>
            </div>
        </footer>
    </div>
<script>
function thongbaoxoa($id) {
    Swal.fire({
        title: 'Bạn có thay đổi Không?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok. Thay đổi!',
        cancelButtonText:'Không'
        }).then((result) => {
        if (result.value) {
            Swal.fire(
            'Thành công!',
            'Bạn đã thay đổi thành công.',
            'success'
            )
            $url='/admin/ds-khoa-hoc/'+$id;
            open($url,"_self")
        }
    })
}
</script>
<script>
function huyDuyetKH($id) {
    Swal.fire({
        title: 'Bạn có muốn hủy duyệt khóa học?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok. Hủy!',
        cancelButtonText:'Không'
        }).then((result) => {
        if (result.value) {
            Swal.fire(
            'Đã hủy!',
            'Bạn đã hủy thành công.',
            'success'
            )
            $url='/admin/huy-khoa-hoc/'+$id;
            open($url,"_self") 
        }
    })
}
</script>
@endsection
