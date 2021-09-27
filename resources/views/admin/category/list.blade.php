@extends('admin.layouts.master')
@section('title')
    List Category
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
        <li class="breadcrumb-item"><a href="">Danh mục</a></li>
        <li class="breadcrumb-item active">Danh sách danh mục</li>
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
        'href'=> route('admin.category.create'),
        'type'=>'primary',
        'content'=>'Tạo danh mục mới'])
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
      
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <th>ID</th>
                <th>Tên</th>
                <th>Hành động</th>
            </thead>
            @foreach ($categories as $category)
            <tr>
              <td>{{$category->id}}</td>
              <td>{{$category->name}}</td>
              <td>
                  @include('admin.compoments.btn',[
                    'href'=> route('admin.category.show',['id'=>$category->id]),
                    'type'=>'primary',
                    'content'=>'<i class="fas fa-info"></i>'
                    ])
                  @include('admin.compoments.btn',[
                      'href'=> route('admin.category.edit',['id'=>$category->id]),
                      'type'=>'success',
                      'content'=>'<i class="fas fa-edit"></i>'
                    ])
                 <form action="{{route('admin.category.destroy',['id'=>$category->id])}}" method="POST">
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