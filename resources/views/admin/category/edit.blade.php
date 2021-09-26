@extends('admin.layouts.master')
@section('title')
    Update User
@endsection
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Danh mục</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"><a href="">Danh mục</a></li>
        <li class="breadcrumb-item active">Chỉnh sửa danh mục</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Chỉnh sửa danh mục</h3>

    <div class="card-tools">
    
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="container">
      <form method="post" action="{{ route('admin.category.update',['id'=>$category->id]) }}" role="form" enctype="multipart/form-data">
        @method('PUT')  
        @csrf
          <input type="hidden" name="_method" value="put">
          <div class="form-group">
              <label for="">Tên</label>
              <input type="text" class="form-control" id="" placeholder="" name="name" value="{{$category->name}}">
          </div>
          <button type="submit" class="btn btn-primary">Cập nhật</button>
      </form>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.card-body -->
</div>
@endsection
