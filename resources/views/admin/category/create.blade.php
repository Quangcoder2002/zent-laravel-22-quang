@extends('admin.layouts.master')
@section('title')
    Add Category
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
        <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Danh mục</a></li>
        <li class="breadcrumb-item active">Tạo mới danh mục</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Tạo mới danh mục</h3>

    <div class="card-tools">
    
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
<div class="container-fluid">
    <form method="POST" action="{{ route('admin.category.store') }}" role="form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name">
        </div>
        <input type="submit" class="btn btn-primary" value="Create">
    </form>
</div><!-- /.container -->
</div>
<!-- /.card-body -->
</div>
@endsection