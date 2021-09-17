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
                <th>Tên</th>
                <th>Avatar</th>
                <th>Mô tả</th>
                <th>Hành động</th>
            </thead>
            <tr >
                <td>1</td>
                <td>Tuyển Việt Nam quyết tạo "địa chấn" ở vòng loại World Cup</td>
                <td>
                    <img src="https://media-cdn.laodong.vn/Storage/NewsPortal/2020/5/14/805420/Viet-Nam-Vs-Malaysia.jpg" width="100px" height="100px">
                </td>
                <td width="500px">
                    Tuyển Việt Nam quyết tạo "địa chấn" ở vòng loại World Cup; Phan Văn Đức rách mu bàn chân; Văn Hậu bị chỉ trích ở SC Heerenveen; Ronaldo ngưỡng mộ sự nghiệp của Messi... là những tin tức thể thao nổi bật ngày 14.5.
                </td>
                <td>
                    @include('admin.compoments.btn',[
                      'href'=> route('admin.post.show',['id'=>1]),
                      'type'=>'primary',
                      'content'=>'<i class="fas fa-info"></i>'
                      ])
                    @include('admin.compoments.btn',[
                        'href'=> route('admin.post.edit',['id'=>1]),
                        'type'=>'success',
                        'content'=>'<i class="fas fa-edit"></i>'
                      ])
                    @include('admin.compoments.btn',[
                      'href'=> route('admin.post.delete',['id'=>1]),
                      'type'=>'danger',
                      'content'=>'<i class="fas fa-trash-alt"></i>'
                    ])
                </td>
            </tr>
        </table>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.card-body -->
</div>
@endsection