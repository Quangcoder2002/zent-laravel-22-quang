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
      
    </h3>
    <div class="card-tools">
     
    </div>
  </div>
      
  <div class="container-fluid">
      
    <table class="table">
        <thead>
            <th>Ảnh</th>
            <th>Tên</th>
            <th>Hành động</th>
        </thead>
        @foreach ($files as $file)
        <tr >
          <td>
            <img src="{{ asset('/storage/'.$file)}}" alt="" width="100px" height="100px">
          </td>
          <td>{{$file}}</td>
          <td>
            {{-- @include('admin.compoments.btn',[
              'href'=> route('admin.storage.download',['id'=>$file]),
              'type'=>'success',
              'content'=>'<i class="fas fa-download"></i>'
            ]) --}}
            <form method="GET" action="{{ route('admin.storage.index')}}">
                <input type="text" value="{{$file}}" name="name" class="form-control" hidden>
                <button class="btn btn-info"><i class="fas fa-download"></i></button>
            </form>
             <form action="{{route('admin.storage.destroy',['id'=> $file])}}" method="POST" style="float: left;" class="form-group">
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
@endsection