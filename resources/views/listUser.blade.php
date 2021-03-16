@extends('index')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('thanhcong'))
        <div class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('thanhcong')}}</div>
    @endif
    <table class="table table-hover">
        <th>Id</th>
        <th>Tên</th>
        <th>email</th>
        <th>Mật khẩu</th>
        <th>Quyền</th>
        <th>Ngày tạo</th>
        <th>Chỉnh sửa</th>
        @foreach($list_user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>
                        <span class="d-inline-block text-truncate" style="max-width: 100px;">
                            {{$user->email}}
                        </span>
                </td>
                </td>
                <td>{{$user->password}}</td>
                <td>{{$user->role === 1 ? "Admin" : "User"}}</td>
                <td>{{$user->created_at}}</td>
                <td><a style="cursor: pointer ; color: blue" href="" >Chỉnh sửa</a></td>
            </tr>
        @endforeach
    </table>
@endsection
