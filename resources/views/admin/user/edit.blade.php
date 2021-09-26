@extends('admin.layouts.master')
@section('title')
    Update User
@endsection
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Users</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"><a href="">Users</a></li>
        <li class="breadcrumb-item active">Chỉnh sửa User</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Chỉnh sửa User</h3>

    <div class="card-tools">
    
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="container">
      <form method="POST" action="{{ route('admin.users.update',['id'=>$user->id]) }}" role="form" enctype="multipart/form-data">
        @method('PUT')  
        @csrf
          <input type="hidden" name="_method" value="put">
          <div class="form-group">
              <label for="">Tên</label>
              <input type="text" class="form-control" id="" placeholder="" name="name" value="{{$user->name}}">
          </div>
          <div class="form-group">
            <label for="">Số điện thoại</label>
            <input type="text" class="form-control" id="" placeholder="" name="phone" value="{{$user->phone}}">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="" name="email" value="{{$user->email}}">
          </div>
          <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" id="" placeholder="" name="address" value="{{$user->address}}">
          </div>
          <button type="submit" class="btn btn-primary">Cập nhật</button>
      </form>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.card-body -->
</div>
@endsection
