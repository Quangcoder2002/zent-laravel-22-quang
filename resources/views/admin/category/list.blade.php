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
      @if (request()->get('list_delete') != 'active')
        @include('admin.compoments.btn',[
          'href'=> route('admin.category.create'),
          'type'=>'primary',
          'content'=>'Tạo danh mục mới'])
      @else
        <a class="btn btn-outline-primary" href="{{ route('admin.category.index')}}">Trở lại </a>
      @endif
    </h3>

    <div class="card-tools">
      <a class="btn btn-outline-primary" href="{{ route('admin.category.index',['list_delete'=>'active'])}}">Danh sách xóa</a>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0" style="max-height: 450px;">
    <div class="container-fluid">
      
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <th>ID</th>
                <th>Tên</th>
                <th >Hành động</th>
            </thead>
            @foreach ($categories as $category)
            <tr>
              <td>{{$category->id}}</td>
              <td>{{$category->name}}</td>
              <td>
                @if (request()->get('list_delete') != 'active')
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
                @endif
                 <form action="{{route('admin.category.destroy',['id'=>$category->id,'list_delete'=>request()->get('list_delete')])}}" method="POST" style="float: left;">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn btn-danger">
                    @if (request()->get('list_delete') != 'active')
                      <i class="fas fa-trash-alt"></i>
                    @else
                      <i class="fas fa-undo"></i> 
                    @endif 
                  </button>
                </form>
              </td>
          </tr>
            @endforeach
           
        </table>
        {{ $categories->links() }}
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.card-body -->
</div>
@endsection