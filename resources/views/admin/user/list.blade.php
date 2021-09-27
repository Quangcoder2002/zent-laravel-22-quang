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
      @include('admin.compoments.btn',[
        'href'=> route('admin.users.create'),
        'type'=>'primary',
        'content'=>'Tạo users mới'])
    </h3>

    <div class="card-tools">
      <div class="input-group input-group-sm" style="width: 150px;">
        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

        <div class="input-group-append">
          <button type="submit" class="btn btn-default">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>  
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0" style="height: 300px;">
    <div class="container-fluid">
      
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Avatar</th>
                <th>Nơi ở</th>
                <th>Hành động</th>
            </thead>
            @foreach ($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>
                    <img src="@if ($user->avatar) {{$user->avatar}} @else https://lh3.googleusercontent.com/proxy/w9NA_6Kij_7GTq6Qt3U9qkAuh05yVgLXo3jAaWm3M_5MaHUnhNV9aSLxuJ8Y8ebAqCjZCEQltZVoaBHXsmwn-NA6N0fvp6l4 @endif" width="40px" height="40px">
                </td>
                <td>{{$user->address}}</td>
                <td>
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
                   <form action="{{route('admin.users.destroy',['id'=>$user->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                  </form>
                </td>
            </tr>
          @endforeach
        </table>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.card-body -->
</div>
@endsection