@extends('admin.layouts.master')
@push('stack-css')
<link href="/admin/plugins/select2/css/select2.min.css" rel="stylesheet" />
<link href="/admin/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />
<link href="/admin/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
<link href="/admin/plugins/summernote/summernote-bs4.min.css">
@endpush
@section('title')
    Danh mục
@endsection
@section('url-home')
{{ route('admin.category.index')}}
@endsection
@section('breadcrumb')
    Chỉnh sửa danh mục
@endsection
@section('content')
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-0"><a href="{{ route('admin.category.index') }}" class="btn btn-outline radius-30"><i class="fadeIn animated bx bx-arrow-back"></i></a></h4>
                </div>
                <form method="POST" action="{{ route('admin.category.update',['id'=>$category->id]) }}" role="form" enctype="multipart/form-data" novalidate="">
                    @method('PUT')  
                    @csrf
                    <input type="hidden" name="_method" value="put">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Tên danh mục</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationCustom01" value="{{$category->name}}" name="name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <div class="col-md-12 mb-3">
                            <label for="short_content">Mô tả</label>
                            <textarea class="form-control @error('short_content') is-invalid @enderror" name="short_content" id="short_content" required="">{{$post->short_content}}</textarea>
                            @error('short_content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="content">Nội dung</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" required="">{{ $post->content }}</textarea>
                            @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div> --}}
                    </div>
                    {{-- <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
								<label>Tags</label>
								<select class="multiple-select" name="tag[]" data-placeholder="Choose anything" multiple="multiple">
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
                            <div class="form-group">
                                <label for="validationCustom04">Danh mục</label>
                                <select class="custom-select" id="validationCustom04" name="category_id" required="">
                                    <option value="0" @if ($post->category_id==0) selected @endif>Không</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" @if ($category->id == $post->category_id) selected @endif>{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback"></div>
							</div>
                            <div class="form-group">
                                <label for="validationCustom05">Trạng thái</label>
                                <select class="custom-select" id="validationCustom05" name="status" required="">
                                    <option @if ($post->status== 2) selected @endif value="2">Công khai</option>
                                    <option @if ($post->status== 1) selected @endif value="1">Đã viết xong</option>
                                    <option @if ($post->status== 0) selected @endif value="0">Bản nháp</option>
                                </select>
                                <div class="invalid-feedback"></div>
							</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Ảnh(Đang cập nhật)</label>
                            <div class="custom-file mb-3">
                                <input class="custom-file-input" id="upload" type="file" name="images" multiple>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div> --}}
                    <button class="btn btn-primary" type="submit">Tạo</button>
                </form>
                
            </div>
        </div>
@endsection
@push('stack-js')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
     CKEDITOR.replace('short_content');
     CKEDITOR.replace('content');
</script>
<script src="/admin/plugins/select2/js/select2.min.js"></script>
<script>
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
    $('.multiple-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script src="/admin/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
<script src="/admin/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
<script src="/admin/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
<script src="/admin/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
<script src="/admin/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
<script>
    $('#upload').FancyFileUpload({
		params: {
			action: '{{ route('admin.category.update',['id'=>$category->id]) }}'
		},
		maxfilesize: 1000000000
	})
</script>
@endpush