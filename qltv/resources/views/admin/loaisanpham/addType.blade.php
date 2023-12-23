{{--  --}}
@extends('admin.main')
@section('content')
    <form action="/admin/loaisanpham/addType/store" method="POST" id="quickForm" novalidate="novalidate">
        @include('share.error')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Mã Loại Sản Phẩm:</label>
                <input type="text" name="MaLoaiSP" class="form-control" id="MaLoaiSP" placeholder="Nhập mã loại sản phẩm...">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Loại:</label>
                <input type="text" name="TenLoai" class="form-control" id="TenLoai" placeholder="Nhập tên loại... ">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <textarea name="MoTa" id="mota" rows="10" cols="80">

                </textarea>
                <script>
                    CKEDITOR.replace( 'mota' );
                </script>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
        @csrf
    </form>
@endsection


