@extends('admin.layouts.master')
@section('title')
    Update User
@endsection
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Users</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"><a href="">Users</a></li>
        <li class="breadcrumb-item active">Chỉnh sửa User</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Chỉnh sửa User</h3>

    <div class="card-tools">
    
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="container">
      @if ($errors->any())
        <div class="alert alert-danger"><ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul></div>
       @endif
      <form method="POST" action="{{ route('admin.users.update',['id'=>$user->id]) }}" role="form" enctype="multipart/form-data">
        @method('PUT')  
        @csrf
          <input type="hidden" name="_method" value="put">
          <div class="form-group">
              <label for="">Tên</label>
              <input type="text" class="form-control" id="" placeholder="" name="name" value="{{$user->name}}">
          </div>
          <div class="form-group">
            <label for="">Số điện thoại</label>
            <input type="text" class="form-control" id="" placeholder="" name="phone" value="{{$user->userInfo->phone}}">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="" name="email" value="{{$user->email}}">
          </div>
          <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" id="" placeholder="" name="address" value="{{$user->userInfo->address}}">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Avatar</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="avatar">
                <label class="custom-file-label" for="exampleInputFile">Chọn file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>
            
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="">Role</label>
                <select name="roles[]" multiple class="form-control">
                  @foreach ($roles as $role)
                    @php
                          $selected = "";
                    @endphp
                    @foreach ($user->roles as $user_role)
                        @php
                            if ($user_role->id == $role->id) {
                              $selected = "selected";
                              break;
                            }
                        @endphp
                    @endforeach
                        <option value="{{ $role->id }}"  {{$selected}} >{{$role->name}}</option>
                    @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
          <button type="submit" class="btn btn-primary">Cập nhật</button>
      </form>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.card-body -->
</div>
@endsection
