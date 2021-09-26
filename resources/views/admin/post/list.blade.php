@extends('admin.layouts.master')
@section('title')
    List Post
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
        <li class="breadcrumb-item"><a href="">Bài viết</a></li>
        <li class="breadcrumb-item active">Danh sách Bài viết</li>
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
        'href'=> route('admin.post.create'),
        'type'=>'primary',
        'content'=>'Tạo bài viết mới'])
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
      
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Tên bài viết</th>
                <th>Danh mục</th>
                <th>Người tạo</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </thead>
            @foreach ($posts as $post)
            <tr >
              <td>{{$post->id}}</td>
              <td>{{$post->title}}</td>
              <td>
                @foreach ($categories as $category)
                  @if ($post->category_id == $category->id)
                    {{$category->name}}   
                  @endif 
                @endforeach
              </td>
              <td>
                @foreach ($users as $user)
                  @if ($post->user_created_id == $user->id)
                    {{$user->name}}   
                  @endif 
                @endforeach
              </td>
              <td>
                @if ($post->status == 1)
                  Hiện
                @else
                  Ẩn
                @endif 
              </td>
              <td>
                @if ($post->created_at)
                    {{date('d-m-Y', strtotime($post->created_at))}}
                @else
                    Ko xác định
                @endif
              </td>
              <td>
                  @include('admin.compoments.btn',[
                    'href'=> route('admin.post.show',['id'=>$post->id]),
                    'type'=>'primary',
                    'content'=>'<i class="fas fa-info"></i>'
                    ])
                  @include('admin.compoments.btn',[
                      'href'=> route('admin.post.edit',['id'=>$post->id]),
                      'type'=>'success',
                      'content'=>'<i class="fas fa-edit"></i>'
                    ])
                  @include('admin.compoments.btn',[
                    'href'=> route('admin.post.destroy',['id'=>$post->id]),
                    'type'=>'danger',
                    'content'=>'<i class="fas fa-trash-alt"></i>'
                  ])
              </td>
            </tr> 
            @endforeach
        </table>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.card-body -->
</div>
@endsection