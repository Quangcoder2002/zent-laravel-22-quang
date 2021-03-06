@extends('admin.layouts.master')
@section('title')
    Detail
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
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Xem chi tiết danh mục</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="container-fluid">
    <div class="container">
        <h3 align="center">Detail Category</h3>
        <hr>
            <h1>Name:{{ $category->name }}</h1>
            <p>Slug: {{$category->slug}}</p>
            <h3>Các bài viết thuộc danh mục:</h3>
            <ul>
              @foreach ($category->posts as $post)
                <li>{{ $post->title }}</li>
              @endforeach
            </ul>
          
        </div>
</div><!-- /.container-fluid -->
@endsection