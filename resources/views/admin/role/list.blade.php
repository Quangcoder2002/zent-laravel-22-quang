@extends('admin.layouts.master')
@section('title')
    List Roles
@endsection
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Bài viết</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="">Roles</a></li>
        <li class="breadcrumb-item active">Danh sách Roles</li>
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
        'href'=> route('admin.role.create'),
        'type'=>'primary',
        'content'=>'Tạo bài role'])
    </h3>
    <div class="card-tools">
     
    </div>
  </div>
  <br>
    <form method="GET" action="{{ route('admin.role.index')}}"  class="form-inline form-group">
      <div class="col-3">
        <input type="text" value="{{ request()->get('name')}}" name="name" class="form-control" placeholder="Name" style="width: 100%;">
      </div>
      <div class="col-3">
        <button class="btn btn-info">Lọc</button>
        <a class="btn btn-outline-primary" href="{{ route('admin.role.index')}}"><i class="fas fa-undo"></i></a>
      </div>
    </form>
  
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0" style="max-height: 450px;">
    <div class="container-fluid">
      
        <table class="table">
            <thead>
                <th>ID</th>
                <th style="width:200px;">Tên role</th>
                <th>Permissions</th>
                <th>Hành động</th>
            </thead>
            @foreach ($roles as $role)
            <tr >
              <td>{{$role->id}}</td>
              <td>{{$role->name}}</td>
              <td>
                @foreach ($role->permissions as $key => $value)
                  @if ($key == 0)
                    {{$value->name}}
                  @else
                    {{'|'.$value->name}} 
                  @endif
                @endforeach
              </td>
              <td>
                  @include('admin.compoments.btn',[
                      'href'=> route('admin.role.edit',['id'=>$role->id]),
                      'type'=>'success',
                      'content'=>'<i class="fas fa-edit"></i>'
                    ])
                <form action="{{route('admin.role.destroy',['id'=>$role->id])}}" method="POST" style="float: left;">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form>
                  
              </td>
            </tr> 
            @endforeach
        </table>
        {{ $roles->links('admin.includes.simple-pagination') }}
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.card-body -->
</div>
@endsection