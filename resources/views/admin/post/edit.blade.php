@extends('admin.layouts.master')
@section('title')
    Update Post
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
        <li class="breadcrumb-item active"><a href="">Bài viết</a></li>
        <li class="breadcrumb-item active">Chỉnh sửa bài viết</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')

<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Chỉnh sửa bài viết</h3>

    <div class="card-tools">
    
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="container">
      @if (session('error'))
      <div class="alert alert-danger" role="alert">
      {{ session('error') }}
      </div>
      @endif
      @if ($errors->any())
        <div class="alert alert-danger"><ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul></div>
       @endif
      <form method="POST" action="{{ route('admin.post.update',['id'=>$post->id]) }}" role="form" enctype="multipart/form-data">
        @method('PUT')  
        @csrf
          <input type="hidden" name="_method" value="put">
          <div class="form-group">
              <label for="">Tên</label>
              <input type="text" class="form-control" id="" placeholder="" name="title" value="{{$post->title}}">
          </div>
          @include('admin.compoments.summernote',[
            'title'=>'Mô tả',
            'name'=>'short_content',
            'id' => 'short_content',
            'content'=>$post->short_content
          ])
          @include('admin.compoments.summernote',[
            'title'=>'Nội dung',
            'name'=>'content',
            'id' => 'content',
            'content'=>$post->content
          ])
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="">Tags</label>
                <select name="tags[]" multiple="" class="form-control">
                  @foreach ($tags as $tag)
                      @php
                            $selected = "";
                      @endphp
                      @foreach ($post->tags as $post_tag)
                          @php
                              if ($post_tag->id == $tag->id) {
                                $selected = "selected";
                                break;
                              }
                          @endphp
                        @endforeach
                    <option value="{{ $tag->id }}"  {{$selected}} >{{$tag->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group" data-select2-id="90">
                <label>Danh mục</label>
                <select class="form-control" name="category_id">
                  <option value="0" @if ($post->category_id==0) selected @endif>Không</option>
                  @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if ($category->id == $post->category_id) selected @endif>{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group" data-select2-id="90">
                <label>Trạng thái</label>
                <select class="form-control" name="status">
                  <option @if ($post->status== 2) selected @endif value="2">Công khai</option>
                  <option @if ($post->status== 1) selected @endif value="1">Đã viết xong</option>
                  <option @if ($post->status== 0) selected @endif value="0">Bản nháp</option>
                </select>
              </div>
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
          <button type="submit" class="btn btn-primary">Cập nhật</button>
      </form>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.card-body -->
</div>
@endsection
