{{--@extends('admin.main')--}}
{{--@section('content')--}}
{{--    <form action="/admin/loaisanpham/editType/{{$loaisanpham->MaloaiSP }}}}"  method="POST" id="quickForm" novalidate="novalidate">--}}
{{--        @include('share.error')--}}
{{--        <div class="card-body">--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Mã Loại Sản Phẩm:</label>--}}
{{--                <input readonly type="text" value="{{$loaisanpham->MaLoaiSP}}" name="MaLoaiSP" class="form-control" id="MaLoaiSP" placeholder="Nhập mã loại sản phẩm...">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Tên Loại:</label>--}}
{{--                <input type="text" value="{{$loaisanpham->TenLoai}}" name="TenLoai" class="form-control" id="TenLoai" placeholder="Nhập tên loại... ">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Mô tả</label>--}}
{{--                <textarea name="MoTa" id="mota" rows="10" cols="80">--}}
{{--                {{$loaisanpham->MoTa}}--}}
{{--                </textarea>--}}
{{--                <script>--}}
{{--                    CKEDITOR.replace( 'mota' );--}}
{{--                </script>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- /.card-body -->--}}
{{--        <div class="card-footer">--}}
{{--            <button type="submit" class="btn btn-primary">Update</button>--}}
{{--        </div>--}}
{{--        @csrf--}}
{{--    </form>--}}
{{--@endsection--}}

@extends('admin.main')
@section('content')
    <form action={{ route('EditType', ['loaisanpham' => $loaisanpham->MaLoaiSP]) }} method="post">
        @include('share.error')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Mã Sản Phẩm :</label>
                <input type="text" value="{{$loaisanpham->TenLoai}}" name="TenLoai" class="form-control" id="TenLoai" placeholder="Nhập tên loại... ">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <textarea name="MoTa" id="mota" rows="10" cols="80">
                {{$loaisanpham->MoTa}}
                </textarea>
                <script>
                    CKEDITOR.replace( 'mota' );
                </script>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        @csrf
    </form>
@endsection


