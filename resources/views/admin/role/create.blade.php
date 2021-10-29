@extends('admin.layouts.master')
@push('stack-css')
<link href="/admin/plugins/select2/css/select2.min.css" rel="stylesheet" />
<link href="/admin/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />
<link href="/admin/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
<link href="/admin/plugins/summernote/summernote-bs4.min.css">
@endpush
@section('title')
    Quản lý vai trò
@endsection
@section('url-home')
{{ route('admin.role.index')}}
@endsection
@section('breadcrumb')
    Tạo mới vai trò
@endsection
@section('content')
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <a href="{{ route('admin.role.index') }}" class="btn btn-outline radius-30"><i class="fadeIn animated bx bx-arrow-back" data-toggle="tooltip" data-placement="top" data-original-title="Nhấn để trở lại danh sách"></i></a>
                </div>
                <form method="POST" action="{{route('admin.role.store')}}" role="form" enctype="multipart/form-data" novalidate="">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Tên vai trò</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationCustom01"  value="{{ old('name') }}" name="name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
								<label>Xét quyền</label>
								<select class="multiple-select" name="permission[]" data-placeholder="Choose anything" multiple="multiple">
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->id }}">{{$permission->name}}</option>
                                    @endforeach
								</select>
							</div>
                        </div>
                    </div>
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
			action: 'fileupload'
		},
		maxfilesize: 1000000000
	})
</script>
@endpush