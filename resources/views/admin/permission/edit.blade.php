@extends('admin.layouts.master')
@section('title')
    Add Role
@endsection
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">permissions</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="">permissions</a></li>
        <li class="breadcrumb-item active">Chỉnh sửa permission</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Chỉnh sửa permission</h3>
  
      <div class="card-tools">
       
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container">
            <form method="POST" action="{{ route('admin.permission.update',['id'=>$permission->id]) }}" role="form" enctype="multipart/form-data">
                @method('PUT')  
                @csrf
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label for="">Tên role</label>
                    <input type="text" class="form-control"  placeholder="" value="{{ $permission->name }}" name="name">
                </div>
                <input type="submit" class="btn btn-primary" value="Sửa">
            </form>
        </div><!-- /.container-fluid -->
    </div>
  <!-- /.card-body -->
</div>
@endsection