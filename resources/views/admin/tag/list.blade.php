@extends('admin.layouts.master')
@section('title')
    Thẻ
@endsection
@section('url-home')
{{ route('admin.tag.index')}}
@endsection
@section('breadcrumb')
    Danh sách thẻ
@endsection
@section('content')
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-0">Danh sách</h4>
                </div>
                <hr>
                <div class="table">
                    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <a href="{{route('admin.tag.create')}}" class="btn btn-outline-success radius-30" rel="noopener noreferrer">Tạo thẻ mới</a>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div>
                                        <form method="GET" action="{{ route('admin.tag.index')}}"  class="form-group">
                                            <div class="row">
                                                <div class="col-9">
                                                    <input type="text" value="{{ request()->get('name')}}" name="name" class="form-control" placeholder="Tên thẻ" style="width: 100%;">
                                                </div>
                                                <div class="col-1">
                                                    <a href="{{route('admin.tag.index')}}" class="btn btn-danger"><i class="bx bx-refresh" data-toggle="tooltip" data-placement="top" data-original-title="tạo mới"></i></a>
                                                </div>
                                                <div class="col-2">
                                                    <button type="submit" class="btn btn-info"><i class="lni lni-search-alt" data-toggle="tooltip" data-placement="top" data-original-title="Tìm kiếm"></i></i></button>
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                        <thead style="text-align: center;">
							<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Tên thẻ</th><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Ngày tạo</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 197px;">Tác vụ</th></tr>
						</thead>
                        <tbody>
                            @foreach ($tags as $tag)
                        <tr role="row">
                            <td>
                                {{ $tag->name }}
                            </td>
                            <td>{{$tag->created_at}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-info m-1" data-toggle="modal" data-target="#exampleModal{{$tag->id}}"><i class="fadeIn animated bx bx-info-circle" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết"></i></button>
							    <!-- Modal -->
							    <div class="modal fade" id="exampleModal{{$tag->id}}" tabindex="-1" role="dialog" aria-hidden="true">
								    <div class="modal-dialog modal-xl">
									    <div class="modal-content">
										    <div class="modal-header">
											    <h5 class="modal-title">Xem chi tiết</h5>
											    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
											    </button>
										    </div>
										    <div class="modal-body">
                                               <h1>{{$tag->name}}</h1> 
                                            </div>
									    </div>
								    </div>
							    </div>
                                <a href="{{route('admin.tag.edit',['id'=>$tag->id])}}" class="btn btn-outline-primary m-1"><i class="fadeIn animated bx bx-edit-alt" data-toggle="tooltip" data-placement="top" data-original-title="Chỉnh sửa"></i></a>
                                <button type="button" class="btn btn-outline-danger m-1" data-toggle="modal" data-target="#delete{{$tag->id}}"><i class="fadeIn animated bx bx-trash" data-toggle="tooltip" data-placement="top" data-original-title="Xóa"></i></button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$tag->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    <div class="parent-icon icon-color-4">
                                                        <i class="bx bx-error"></i> Cảnh báo
                                                    </div>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có muốn xóa bài viết này không?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                                <form action="{{route('admin.tag.destroy',['id'=>$tag->id])}}" method="POST" style="float: left;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn btn-danger">Tiếp tục</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div > {{ $tags->links() }}</div>
                </div>
            </div>
        </div>
@endsection