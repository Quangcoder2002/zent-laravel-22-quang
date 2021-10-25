@extends('admin.layouts.master')
@section('title')
    List Permissions
@endsection
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Permissions</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="">Permissions</a></li>
        <li class="breadcrumb-item active">Danh sách Permissions</li>
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
          'href'=> route('admin.permission.create'),
          'type'=>'primary',
          'content'=>'Tạo danh mục mới'])
      @else
        <a class="btn btn-outline-primary" href="{{ route('admin.permission.index')}}">Trở lại </a>
      @endif
    </h3>

    <div class="card-tools">
      <a class="btn btn-outline-primary" href="{{ route('admin.permission.index',['list_delete'=>'active'])}}">Danh sách xóa</a>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0" style="max-height: 450px;">
    <div class="container-fluid">
      
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <th>ID</th>
                <th>Tên</th>
            </thead>
            @foreach ($permissions as $permission)
            <tr>
              <td>{{$permission->id}}</td>
              <td>{{$permission->name}}</td>
              <td>
                  {{-- @include('admin.compoments.btn',[
                      'href'=> route('admin.permission.edit',['id'=>$permission->id]),
                      'type'=>'success',
                      'content'=>'<i class="fas fa-edit"></i>'
                    ])
                 <form action="{{route('admin.permission.destroy',['id'=>$permission->id,'list_delete'=>request()->get('list_delete')])}}" method="POST" style="float: left;">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn btn-danger">
                    @if (request()->get('list_delete') != 'active')
                      <i class="fas fa-trash-alt"></i>
                    @else
                      <i class="fas fa-undo"></i> 
                    @endif 
                  </button>
                </form> --}}
              </td>
            </tr>
            @endforeach
           
        </table>
        {{ $permissions->links() }}
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.card-body -->
</div>
@endsection