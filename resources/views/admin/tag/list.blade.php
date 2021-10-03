@extends('admin.layouts.master')
@section('title')
    List Tags
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
        <li class="breadcrumb-item"><a href="">Tags</a></li>
        <li class="breadcrumb-item active">Danh sách tag</li>
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
        'href'=> route('admin.tag.create'),
        'type'=>'primary',
        'content'=>'Tạo bài tag'])
    </h3>
    <div class="card-tools">
     
    </div>
  </div>
  <br>
    <form method="GET" action="{{ route('admin.tag.index')}}"  class="form-inline form-group">
      <div class="col-3">
        <input type="text" value="{{ request()->get('name')}}" name="name" class="form-control" placeholder="Name" style="width: 100%;">
      </div>
      <div class="col-3">
        <button class="btn btn-info">Lọc</button>
        <a class="btn btn-outline-primary" href="{{ route('admin.tag.index')}}"><i class="fas fa-undo"></i></a>
      </div>
    </form>
  
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0" style="max-height: 450px;">
    <div class="container-fluid">
      
        <table class="table">
            <thead>
                <th>ID</th>
                <th style="width:400px;">Tên tag</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </thead>
            @foreach ($tags as $tag)
            <tr >
              <td>{{$tag->id}}</td>
              <td>{{$tag->name}}</td>
              <td>
                @if ($tag->created_at)
                    {{date('d-m-Y', strtotime($tag->created_at))}}
                @else
                    Ko xác định
                @endif
              </td>
              <td>
                  @include('admin.compoments.btn',[
                    'href'=> route('admin.tag.show',['id'=>$tag->id]),
                    'type'=>'primary',
                    'content'=>'<i class="fas fa-info"></i>'
                    ])
                  @include('admin.compoments.btn',[
                      'href'=> route('admin.tag.edit',['id'=>$tag->id]),
                      'type'=>'success',
                      'content'=>'<i class="fas fa-edit"></i>'
                    ])
                <form action="{{route('admin.tag.destroy',['id'=>$tag->id])}}" method="POST" style="float: left;">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form>
                  
              </td>
            </tr> 
            @endforeach
        </table>
        {{ $tags->links('admin.includes.simple-pagination') }}
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.card-body -->
</div>
@endsection