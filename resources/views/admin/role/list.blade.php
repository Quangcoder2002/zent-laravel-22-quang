@extends('admin.layouts.master')
@section('title')
    Quản lý vai trò
@endsection
@section('url-home')
{{ route('admin.role.index')}}
@endsection
@section('breadcrumb')
    Danh sách vai trò
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
                                <a href="{{route('admin.role.create')}}" class="btn btn-outline-success radius-30" rel="noopener noreferrer">Tạo vai trò mới</a>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                        <thead style="text-align: center;">
							<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Tên vai trò</th><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Ouyền truy cập</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 197px;">Tác vụ</th></tr>
						</thead>
                        <tbody>
                            @foreach ($roles as $role)
                        <tr role="row">
                            <td>
                                {{ $role->name }}
                            </td>
                            <td class="sorting_1">
                                @foreach ($role->permissions as $key => $value)
                                @if ($key == 0)
                                    {{$value->name}}
                                @else
                                    {{'|'.$value->name}} 
                                @endif
                                @endforeach
                            </td>   
                            <td>
                                <button type="button" class="btn btn-outline-info m-1" data-toggle="modal" data-target="#exampleModal{{$role->id}}"><i class="fadeIn animated bx bx-info-circle" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết"></i></button>
							    <!-- Modal -->
							    <div class="modal fade" id="exampleModal{{$role->id}}" tabindex="-1" role="dialog" aria-hidden="true">
								    <div class="modal-dialog modal-xl">
									    <div class="modal-content">
										    <div class="modal-header">
											    <h5 class="modal-title">Xem chi tiết</h5>
											    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
											    </button>
										    </div>
										    <div class="modal-body">
                                               <h1>{{$role->title}}</h1> 
                                            </div>
									    </div>
								    </div>
							    </div>
                                <a href="{{route('admin.role.edit',['id'=>$role->id])}}" class="btn btn-outline-primary m-1"><i class="fadeIn animated bx bx-edit-alt" data-toggle="tooltip" data-placement="top" data-original-title="Chỉnh sửa"></i></a>
                                <button type="button" class="btn btn-outline-danger m-1" data-toggle="modal" data-target="#delete{{$role->id}}"><i class="fadeIn animated bx bx-trash" data-toggle="tooltip" data-placement="top" data-original-title="Xóa"></i></button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$role->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                Bạn có muốn xóa vai trò này không?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                                <form action="{{route('admin.role.destroy',['id'=>$role->id])}}" method="post" style="float: left;">
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
                    <div > {{ $roles->links() }}</div>
                </div>
            </div>
        </div>
@endsection