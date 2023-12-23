
@extends('admin.main')
@section('content')
    <style>
        .active {
            background-color: red;
            border: 1px solid red;
        }
    </style>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Mã Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Đơn Vị Tính</th>
            <th>Giá Nhập</th>
            <th>Giá Bán</th>
            <th>Loại Sản Phẩm</th>
            <th>Mô Tả</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sanphams as $sanpham)
            <tr>
                <td>{{$sanpham->IDSanPham}}</td>
                <td>{{$sanpham->MaSP}}</td>
                <td>{{$sanpham->TenSP}}</td>
                <td>{{$sanpham->SoLuong}}</td>
                <td>{{$sanpham->DonViTinh}}</td>
                <td>{{$sanpham->GiaNhap}}</td>
                <td>{{$sanpham->GiaBan}}</td>
                @foreach($maLoaiSanPhamLists as $id => $maLoai)
                    @if($sanpham->MaLoaiSP == $id)
                        <td>{{$maLoai}}</td>
                        @break
                    @endif
                @endforeach
                <td>{!! $sanpham->MoTa !!}</td>
                <td><a class="btn btn-primary mr-3" href="/admin/sanpham/edit/{{$sanpham->IDSanPham}}"><i class="fa fa-edit "></i></a>
                <a class="btn btn-danger" href="#" onclick="Delete({{$sanpham->IDSanPham}},'/admin/sanpham/delete')"><i class = "fa fa-trash"></i></a>
                </td>
            </tr
        @endforeach
        </tbody>
    </table>
    {{ $sanphams->links() }}
@endsection

