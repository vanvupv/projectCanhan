{{--@extends('admin.main')--}}
{{--@section('content')--}}
{{--    <style>--}}
{{--        .active {--}}
{{--            background-color: red;--}}
{{--            border: 1px solid red;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <table class="table table-striped">--}}
{{--        <thead>--}}
{{--            <tr>--}}
{{--                <th>ID</th>--}}
{{--                <th>Mã danh mục</th>--}}
{{--                <th>Tên danh mục</th>--}}
{{--                <th>Mô tả</th>--}}
{{--                <th>Vị trí</th>--}}
{{--                <th>Thao tác</th>--}}
{{--            </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--            @foreach($danhmucs as $loaisanpham)--}}
{{--                <tr>--}}
{{--                    <td>{{$loaisanpham->id}}</td>--}}
{{--                    <td>{{$loaisanpham->MaDM}}</td>--}}
{{--                    <td>{{$loaisanpham->TenDM}}</td>--}}
{{--                    <td>{!! $loaisanpham->MoTa !!}</td>--}}
{{--                    <td>{{$loaisanpham->Vitri}}</td>--}}
{{--                    <td><a class="btn btn-primary mr-3" href="/admin/loaisanpham/edit/{{$loaisanpham->id}}"><i class="fa fa-edit "></i></a>--}}
{{--                        <a class="btn btn-danger" href="#" onclick="Delete({{$loaisanpham->id}},'/admin/loaisanpham/delete')"><i class = "fa fa-trash"></i></a>--}}
{{--                    </td>--}}
{{--                </tr--}}
{{--            @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--{{ $danhmucs->links() }}--}}
{{--@endsection--}}

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
            <th>Mã Loại Sản Phẩm</th>
            <th>Tên Loại</th>
            <th>Mô Tả</th>
        </tr>
        </thead>
        <tbody>
        @foreach($loaisanphams as $loaisanpham)
            <tr>
                <td>{{$loaisanpham->MaLoaiSP}}</td>
                <td>{{$loaisanpham->TenLoai}}</td>
                <td>{!!$loaisanpham->MoTa!!}</td>
                <td><a class="btn btn-primary mr-3" href="/admin/loaisanpham/editType/{{$loaisanpham->MaLoaiSP}}"><i class="fa fa-edit "></i></a>
                <a class="btn btn-danger" href="#" onclick="Delete({{$loaisanpham->MaLoaiSP}},'/admin/loaisanpham/delete')"><i class = "fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $loaisanphams->links() }}
@endsection


