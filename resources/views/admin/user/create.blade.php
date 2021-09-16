</body>
</html>
@extends('admin.layouts.master')
@section('title')
    Add Users
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
        <li class="breadcrumb-item"><a href="">Users</a></li>
        <li class="breadcrumb-item active">Tạo mới User</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Tạo mới User</h3>
  
      <div class="card-tools">
       
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container">
            <form method="POST" action="{{ route('admin.users.store') }}" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tên</label>
                    <input type="text" class="form-control" id="" placeholder="" name="name">
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" class="form-control" id="" placeholder="" name="description">
                </div>
                <input type="submit" class="btn btn-primary" value="Tạo">
            </form>
        </div><!-- /.container-fluid -->
    </div>
  <!-- /.card-body -->
</div>
@endsection