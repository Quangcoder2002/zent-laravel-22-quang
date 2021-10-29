@extends('admin.layouts.master')
@push('stack-css')
<link href="/admin/plugins/select2/css/select2.min.css" rel="stylesheet" />
<link href="/admin/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />
<link href="/admin/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
<link href="/admin/plugins/summernote/summernote-bs4.min.css">
@endpush
@section('title')
    Quản lý menu
@endsection
@section('url-home')
{{ route('admin.menu.index')}}
@endsection
@section('breadcrumb')
    Tạo trang mới
@endsection
@section('content')
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <a href="{{ route('admin.menu.index') }}" class="btn btn-outline radius-30"><i class="fadeIn animated bx bx-arrow-back" data-toggle="tooltip" data-placement="top" data-original-title="Nhấn để trở lại danh sách"></i></a>
                </div>
                <form method="POST" action="{{ route('admin.menu.update',['id' => $menu->id]) }}" role="form" enctype="multipart/form-data" novalidate="">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Tên trang</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationCustom01"  value="{{ $menu->name }}" name="name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
								<label for="validationCustom03">Đường dẫn</label>
                            <input type="text" class="form-control @error('url') is-invalid @enderror" id="validationCustom03"  value="{{ $menu->url }}" name="url">
                            @error('url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
							</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
								<label for="validationCustom02">Vị trí</label>
                            <input type="text" class="form-control @error('sort') is-invalid @enderror" id="validationCustom02"  value="{{ $menu->sort }}" name="sort">
                            @error('sort')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
							</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="validationCustom05">Trạng thái</label>
                                <select class="custom-select" id="validationCustom05" name="status" required="">
                                    <option value="1" @if ($menu->status == 1) selected @endif>Hiện</option>
                                    <option value="0" @if ($menu->status == 0) selected @endif>Ẩn</option>
                                </select>
                                <div class="invalid-feedback"></div>
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
@endpush