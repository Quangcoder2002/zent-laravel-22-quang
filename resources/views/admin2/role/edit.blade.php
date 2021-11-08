@extends('admin.layouts.master')
@section('title')
    Add Role
@endsection
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Roles</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="">Roles</a></li>
        <li class="breadcrumb-item active">Chỉnh sửa role</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Tạo mới Role</h3>
  
      <div class="card-tools">
       
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container">
            <form method="POST" action="{{ route('admin.role.update',['id'=>$role->id]) }}" role="form" enctype="multipart/form-data">
                @method('PUT')  
                @csrf
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label for="">Tên role</label>
                    <input type="text" class="form-control"  placeholder="" value="{{ $role->name }}" name="name">
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="">Permission</label>
                      <select name="permissions[]" multiple="" class="form-control">
                        @foreach ($permissions as $permission)
                          @php
                                $selected = "";
                          @endphp
                          @foreach ($role->permissions as $role_permission)
                              @php
                                  if ($role_permission->id == $permission->id) {
                                    $selected = "selected";
                                    break;
                                  }
                              @endphp
                            @endforeach
                    <option value="{{ $permission->id }}"  {{$selected}} >{{$permission->name}}</option>
                  @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <br>
                <input type="submit" class="btn btn-primary" value="Tạo">
            </form>
        </div><!-- /.container-fluid -->
    </div>
  <!-- /.card-body -->
</div>
@endsection