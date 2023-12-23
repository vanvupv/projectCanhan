
{{--@extends('admin.main')--}}
{{--@section('content')--}}
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
            <th>Tên Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach($roleLists as $roleList)
            <tr>
                <td>{{$roleList->id}}</td>
                <td>{{$roleList->role_name}}</td>

                <td>
                    <a class="btn btn-primary mr-3" href="/admin/sanpham/edit/{{$roleList->id}}"><i class="fa fa-edit "></i></a>
                    <a class="btn btn-danger" href="#" onclick="Delete({{$roleList->id}},'/admin/sanpham/delete')"><i class = "fa fa-trash"></i></a>
                </td>
            </tr
        @endforeach
        </tbody>
    </table>
{{--    {{ $roleLists->links() }}--}}
{{--@endsection--}}

