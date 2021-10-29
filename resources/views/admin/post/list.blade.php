@extends('admin.layouts.master')
@section('title')
    Bài viết
@endsection
@section('url-home')
{{ route('admin.post.index')}}
@endsection
@section('breadcrumb')
    Danh sách bài viết
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
                                <a href="{{route('admin.post.create')}}" class="btn btn-outline-success radius-30" rel="noopener noreferrer">Tạo bài viết mới</a>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div>
                                        <form method="GET" action="{{ route('admin.post.index')}}"  class="form-group">
                                            <div class="row">
                                                <div class="col-5">
                                                    <input type="text" value="{{ request()->get('title')}}" name="title" class="form-control" placeholder="Tên bài viết" style="width: 100%;">
                                                </div>
                                                <div class="col-4">
                                                    <select name="status" class="form-control">
                                                        <option value="">Trạng thái</option>
                                                        <option @if ( request()->get('status')== 0 && request()->get('status') != '') selected @endif value="0">Nhập</option>
                                                        <option @if ( request()->get('status')== 1) selected @endif value="1">Đã viết xong</option>
                                                        <option @if ( request()->get('status')== 2) selected @endif value="2">Công khai</option>
                                                      </select>
                                                </div>
                                                <div class="col-1">
                                                    <a href="{{route('admin.post.index')}}" class="btn btn-danger"><i class="bx bx-refresh" data-toggle="tooltip" data-placement="top" data-original-title="tạo mới"></i></a>
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
							<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Ảnh</th><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Tên bài viết</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Danh mục</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 130px;">Thẻ</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Trạng thái</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">Người tạo</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Ngày tạo</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 197px;">Tác vụ</th></tr>
						</thead>
                        <tbody>
                            @foreach ($posts as $post)
                        <tr role="row">
                            <td>
                                <img src="{{ $post->image_url_full }}"
                                width="100px">
                            </td>
                            <td class="sorting_1">{{$post->title}}</td>
                            <td>
                                @if ($post->category_id != 0)
                                {{$post->category->name}}
                              @endif
                            </td>
                            <td>
                                @foreach ($post->tags as $tag)
                                    <span class="badge badge-info">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                            <td>{!!$post->status_text!!}</td>
                            <td>{{$post->user->name}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-info m-1" data-toggle="modal" data-target="#exampleModal{{$post->id}}"><i class="fadeIn animated bx bx-info-circle" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết"></i></button>
							    <!-- Modal -->
							    <div class="modal fade" id="exampleModal{{$post->id}}" tabindex="-1" role="dialog" aria-hidden="true">
								    <div class="modal-dialog modal-xl">
									    <div class="modal-content">
										    <div class="modal-header">
											    <h5 class="modal-title">Xem chi tiết</h5>
											    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
											    </button>
										    </div>
										    <div class="modal-body">
                                               <h1>{{$post->title}}</h1> 
                                                {!!$post->content!!}
                                            </div>
									    </div>
								    </div>
							    </div>
                                <a href="{{route('admin.post.edit',['id'=>$post->id])}}" class="btn btn-outline-primary m-1"><i class="fadeIn animated bx bx-edit-alt" data-toggle="tooltip" data-placement="top" data-original-title="Chỉnh sửa"></i></a>
                                <button type="button" class="btn btn-outline-danger m-1" data-toggle="modal" data-target="#delete{{$post->id}}"><i class="fadeIn animated bx bx-trash" data-toggle="tooltip" data-placement="top" data-original-title="Xóa"></i></button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$post->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                <form action="{{route('admin.post.destroy',['id'=>$post->id])}}" method="POST" style="float: left;">
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
                    <div > {{ $posts->links() }}</div>
                </div>
            </div>
        </div>
@endsection