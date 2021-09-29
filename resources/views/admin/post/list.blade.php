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
     
    </div>
  </div>
  <br>
    <form method="GET" action="{{ route('admin.post.index')}}"  class="form-inline form-group">
      <div class="col-3">
        <input type="text" value="{{ request()->get('title')}}" name="title" class="form-control" placeholder="Title" style="width: 100%;">
      </div>
      <div class="col-1">
        <select name="status" class="form-control">
          <option value="">Status</option>
          <option @if ( request()->get('status')== 0 && request()->get('status') != '') selected @endif value="0">Ẩn</option>
          <option @if ( request()->get('status')== 1) selected @endif value="1">Hiện</option>
        </select>
      </div>
      <div class="col-3">
        <button class="btn btn-info">Lọc</button>
        <a class="btn btn-outline-primary" href="{{ route('admin.post.index')}}"><i class="fas fa-undo"></i></a>
      </div>
    </form>
  
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0" style="max-height: 450px;">
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
                {{ $post->status_text }}
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
                <form action="{{route('admin.post.destroy',['id'=>$post->id])}}" method="POST" style="float: left;">
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