@extends('admin.layouts.master')
@section('title')
    Add Post
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
        <li class="breadcrumb-item active">Tạo mới bài viết</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Tạo mới bài viết</h3>
  
      <div class="card-tools">
       
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @if (session('error'))
      <div class="alert alert-danger" role="alert">
      {{ session('error') }}
      </div>
    @endif
        <div class="container">
          @if ($errors->any())
            <div class="alert alert-danger"><ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul></div>
          @endif
            <form method="POST" action="{{ route('admin.post.store') }}" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tên</label>
                    <input type="text" class="form-control"  placeholder="" value="{{ old('title') }}" name="title">
                    {{-- @error('title')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}
                </div>
                @include('admin.compoments.summernote',[
                  'title'=>'Mô tả',
                  'name'=>'short_content',
                  'content'=>'',
                  'id' => 'short_content'
                ])
                @include('admin.compoments.summernote',[
                  'title'=>'Nôi dung',
                  'name'=>'content',
                  'id' => 'content',
                  'content'=>''
                ])
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="">Tags</label>
                      <select name="tag[]" multiple="" class="form-control">
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{$tag->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="">Trạng thái</label>
                    <select class="custom-select custom-select-lg mb-3" name="status">
                      <option selected value="2">Công khai</option>
                      <option value="1">Đã viết xong</option>
                      <option value="0">Nhập</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <label for="">Danh mục</label>
                    <select class="custom-select custom-select-lg mb-3" name="category_id">
                      <option selected value="0">Không</option>
                      @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-12">
                    <label for="exampleInputFile">Ảnh</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="images">
                        <label class="custom-file-label" for="exampleInputFile">Chọn file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
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