
@extends('admin.main')
@section('content')
    <style>
        .active {
            background-color: red;
            border: 1px solid red;
        }
    </style>
    <div>
        <button class="btn btn-danger">
            <a href="{{ route('AddImg') }}">Add Images</a>
        </button>
    </div>
{{--    <table class="table table-striped">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>ID</th>--}}
{{--            <th>Danh sách ảnh</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($groupedImages as $IDSanPham => $images)--}}
{{--            <tr>--}}
{{--                <td>{{ $IDSanPham }}</td>--}}
{{--                <td>--}}
{{--                    @foreach($images as $image)--}}
{{--                        <div class="image col-4">--}}
{{--                            <img class="w-100" src="../images/{{ $image->address }}" alt="">--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}

    <form action="{{ route('DeleteImage') }}" method="post">
        @method('DELETE') <!-- Add this line to override the form method -->
        @csrf
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Danh sách ảnh</th>
                <th>Chọn</th>
            </tr>
            </thead>
            <tbody>

            @foreach($groupedImages as $IDSanPham => $images)

                <tr>
                    <td>{{ $IDSanPham }}</td>
                    <td>
                        <div class="row p-0 m-0">
                        @foreach($images as $image)
                            <div class="image col-1 p-0 m-0">
                                <img class="w-100" src="../../images/{{ $image->address }}" alt="">
                                <input type="checkbox" name="selectedImages[]" value="{{ $image->IDImage }}">
                            </div>
                        @endforeach
                        </div>
                    </td>
                    <td>
                        <!-- Add a checkbox for each image with the corresponding ID -->
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <button type="submit">Xóa ảnh đã chọn</button>
    </form>


@endsection


