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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($danhSachKhoaHoc as $item)
                            <tr>
                                <td><img src="{{ asset('assets/images/'.$item->hinh_anh) }}" width="50px" height="50px"></td>
                                <td><a href="{{route('lay-chuong',$item->id)}}">{{$item->ten_khoa_hoc}}</a></td>
                                <td>{{$item->gia}}</td>
                                <td>{{$item->muc_do}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>@if($item->trang_thai == 3)
                                <button type="submit" class="btn btn-success" onclick="thongbaoxoa({{$item->id}})">Đã duyệt</button>
                                @endif
                                @if($item->trang_thai == 2)
                                <button type="submit" class="btn btn-danger" onclick="thongbaoxoa({{$item->id}})">Chưa duyệt</button>
                                @endif
                                @if($item->trang_thai == 1)
                                <button type="submit" class="btn btn-info">Đang tạo</button>
                                @endif
                                 </td>
                                 <td>
                                    <button onclick="xoa({{$item->id}})" class="btn btn-danger">xóa</button>
                                </td>
                            </tr>
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
function xoa($id) {
    Swal.fire({
        title: 'Bạn có Muốn Xóa Không?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok. Xóa nó!',
        cancelButtonText:'Không'
        }).then((result) => {
        if (result.value) {
            Swal.fire(
            'Đã Xóa!',
            'Bạn đã xóa thành công.',
            'success'
            )
            $url='/khoa-hoc/xoa/'+$id;
            open($url,"_self") 
        }
    })
}
</script>
@endsection
