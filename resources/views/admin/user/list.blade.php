@extends('admin.layouts.master')
@section('title')
    List users
@endsection
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">users</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="">users</a></li>
        <li class="breadcrumb-item active">Danh sách users</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">
        @if (request()->get('list_delete') != 'active')
          @include('admin.compoments.btn',[
            'href'=> route('admin.users.create'),
            'type'=>'primary',
            'content'=>'Tạo users mới'])
        @else
          <a class="btn btn-outline-primary" href="{{ route('admin.users.index')}}">Trở lại </a>
        @endif
    </h3>

    <div class="card-tools">
      @if (request()->get('list_delete') != 'active')
        <a class="btn btn-outline-primary" href="{{ route('admin.users.index', ['list_delete'=>'active'])}}">Danh sách xóa</a>
      @endif
    </div>
  </div>
  <br>
  <form method="GET" action="{{ route('admin.users.index',['list_delete'=>request()->get('list_delete')])}}"  class="form-inline form-group">
    <input type="text" value="{{request()->get('list_delete')}}" name="list_delete" hidden>
    <div class="col-3">
      <input type="text" value="{{ request()->get('name')}}" name="name" class="form-control" placeholder="Tên" style="width: 100%;">
    </div>
    <div class="col-3" >
      <input type="text" value="{{ request()->get('email')}}" name="email" class="form-control" placeholder="Email" style="width: 100%;">
    </div>
    <div class="col-3">
      <button class="btn btn-info" >Lọc</button>
      <a class="btn btn-outline-primary" href="{{ route('admin.users.index',['list_delete'=>request()->get('list_delete')])}}"><i class="fas fa-undo"></i></a>
    </div>
  </form>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0" style="max-height: 450px;">
    <div class="container-fluid">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Avatar</th>
                <th>Hành động</th>
            </thead>
            @foreach ($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                  @if ($user->userInfo != null)
                  {{$user->userInfo->phone}}
                  @endif
                </td>
                <td>
                  @if ($user->userInfo != null)
                  {{$user->userInfo->address}}
                  @endif
                </td>
                <td>
                    <img src="@if ($user->avatar) {{$user->avatar}} @else https://lh3.googleusercontent.com/proxy/w9NA_6Kij_7GTq6Qt3U9qkAuh05yVgLXo3jAaWm3M_5MaHUnhNV9aSLxuJ8Y8ebAqCjZCEQltZVoaBHXsmwn-NA6N0fvp6l4 @endif" width="40px" height="40px">
                </td>
                <td>
                  @if (request()->get('list_delete') != 'active')
                    @include('admin.compoments.btn',[
                      'href'=> route('admin.users.show',[
                        'id'=>$user->id
                      ]),
                      'type'=>'primary',
                      'content'=>'<i class="fas fa-info"></i>'
                      ])
                    @include('admin.compoments.btn',[
                        'href'=> route('admin.users.edit',['id'=>$user->id]),
                        'type'=>'success',
                        'content'=>'<i class="fas fa-edit"></i>'
                      ]) 
                  @endif
                  <form method="POST" action="{{ route('admin.users.login', $user->id )}}">
                    @csrf
                    <button class="btn btn-outline-danger">
                      <i class="fas fa-user"></i>
                    </button>
                  </form>
                  
                    <form action="{{route('admin.users.destroy',['id'=>$user->id,'list_delete'=>request()->get('list_delete')])}}" method="POST" style="float: left;">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn btn-danger">
                        @if (request()->get('list_delete') != 'active')
                          <i class="fas fa-trash-alt"></i>
                        @else
                          <i class="fas fa-undo"></i> 
                        @endif 
                      </button>
                    </form>
                </td>
            </tr>
          @endforeach
        </table>
        {{ $users->links() }}
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.card-body -->
</div>
@endsection