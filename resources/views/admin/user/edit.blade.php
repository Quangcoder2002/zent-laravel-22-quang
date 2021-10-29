@extends('admin.layouts.master')
@push('stack-css')
<link href="/admin/plugins/select2/css/select2.min.css" rel="stylesheet" />
<link href="/admin/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />
<link href="/admin/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
<link href="/admin/plugins/summernote/summernote-bs4.min.css">
@endpush
@section('title')
    Quản lý người dùng
@endsection
@section('url-home')
{{ route('admin.users.index')}}
@endsection
@section('breadcrumb')
    Chỉnh sửa người dùng
@endsection
@section('content')
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-0"><a href="{{ route('admin.users.index') }}" class="btn btn-outline radius-30"><i class="fadeIn animated bx bx-arrow-back" data-toggle="tooltip" data-placement="top" data-original-title="Nhấn để trở lại danh sách"></i></a><label for="" style="text-align: center; width: 100%;">Câp nhật thông tin</label></h4>
                    
                </div>
                <form method="POST" action="{{ route('admin.users.update',['id'=>$user->id]) }}" role="form" enctype="multipart/form-data" novalidate="">
                    @method('PUT') 
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3 ">
                            <label for="validationCustom01">Họ Tên</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationCustom01" name="name" value="{{$user->name}}" required="">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="validationCustom02" name="email" value="{{$user->email}}" required="">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="form-row">
                                <label for="validationCustom03">Số điện thoại</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="validationCustom03" name="phone" value="{{$user->userInfo->phone}}" required="">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-row">
                                <label for="validationCustom04">Địa chỉ</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="validationCustom04" name="address" value="{{$user->userInfo->address}}" required="">
                                @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group" style="width: 100%;">
                                    <label for="validationCustom05">Cấp quyền</label>
                                    <select class="multiple-select form-control" id="validationCustom05" name="roles[]" data-placeholder="Choose anything"  multiple="multiple">
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
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Ảnh đại diện</label>
                            <div class="custom-file mb-3">
                                <input class="custom-file-input"  id="fancy-file-upload" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Lưu</button>
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
	$('#fancy-file-upload').FancyFileUpload({
		params: {
			action: 'fileuploader'
		},
		maxfilesize: 1000000
	});
</script>
<script>
	$(document).ready(function () {
		$('#image-uploadify').imageuploadify();
	});
</script>
@endpush