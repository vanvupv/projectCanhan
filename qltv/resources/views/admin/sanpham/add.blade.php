{{--@extends('admin.main')--}}
{{--@section('content')--}}
{{--    <form action="/admin/sanpham/add/store" method="post" id="quickForm" novalidate="novalidate">--}}
{{--        @include('share.error')--}}
{{--        <div class="card-body">--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Mã danh mục:</label>--}}
{{--                <input type="text" name="MaDM" class="form-control" id="MaDM" placeholder="Nhập mã danh mục">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Tên danh mục:</label>--}}
{{--                <input type="text" name="TenDM" class="form-control" id="TenDM" placeholder="Nhập tên danh mục">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Mô tả</label>--}}
{{--                <textarea name="MoTa" id="mota" rows="10" cols="80">--}}
{{--                This is my textarea to be replaced with CKEditor 4.--}}
{{--                </textarea>--}}
{{--                <script>--}}
{{--                    CKEDITOR.replace( 'mota' );--}}
{{--                </script>--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">Vị trí</label>--}}
{{--                <input type="text" name="ViTri" class="form-control" id="ViTri" placeholder="Nhập vị trí">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- /.card-body -->--}}
{{--        <div class="card-footer">--}}
{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        </div>--}}
{{--        @csrf--}}
{{--    </form>--}}
{{--@endsection--}}
@extends('admin.main')
@section('content')
    <form action="/admin/sanpham/add/store" method="POST" id="quickForm" novalidate="novalidate">
        @include('share.error')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Mã Sản Phẩm :</label>
                <input  type="text" name="MaDM" class="form-control" id="MaDM" placeholder="Nhập mã sản phẩm...">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Sản Phẩm:</label>
                <input type="text" name="TenDM" class="form-control" id="TenDM" placeholder="Nhập tên sản phẩm... ">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số Lượng:</label>
                <input type="number" min="0" name="SoLuong" class="form-control" id="SoLuong" placeholder="Nhập số lượng... ">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Đơn Vị Tính:</label>
                <input type="text" name="DonViTinh" class="form-control" id="DonViTinh" placeholder="Nhập Đơn Vị Tính... ">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giá Nhập:</label>
                <input type="number" min="0" name="GiaNhap" class="form-control" id="GiaNhap" placeholder="Giá Nhập... ">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giá Bán:</label>
                <input type="number" min="0" name="GiaBan" class="form-control" id="GiaBan" placeholder="Giá Bán... ">
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Mã Loại Sản Phẩm:</label>--}}
{{--                <input type="text" name="MaLoaiSP" class="form-control" id="MaLoaiSP" placeholder="Nhập Mã Loại... ">--}}
{{--            </div>--}}

            <div class="form-group">
                <label for="MaLoaiSP">Mã Loại Sản Phẩm:</label>
                <select name="MaLoaiSP" id="MaLoaiSP" class="form-control">
                    @foreach ($maLoaiSanPhamLists as $id => $maLoai)
                        <option value="{{ $id }}">{{ $maLoai }}</option>
                    @endforeach
                </select>
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        @csrf
    </form>
@endsection

