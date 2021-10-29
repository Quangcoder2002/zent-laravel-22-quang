@extends('admin.layouts.master')
@section('title')
    Quản lý người dùng
@endsection
@section('url-home')
{{ route('admin.users.index')}}
@endsection
@section('breadcrumb')
    Danh sách người dùng
@endsection
@section('content')
        <div class="card">
            <div class="card-body">
                <div class="card-title row">
                    <div class="col-10"> <h4 class="mb-0">Danh sách</h4></div>
                    <div class="col-2" style="right: 0;">
                        @if (request()->get('list_delete') != 'active')
                            <a class="btn btn-outline-primary" href="{{ route('admin.users.index', ['list_delete'=>'active'])}}">Danh sách xóa</a>
                         @endif
                    </div>
                </div>
                <hr>
                <div class="table">
                    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                @if (request()->get('list_delete') != 'active')
                                    <a href="{{ route('admin.users.create')}}" class="btn btn-outline-success radius-30">Tạo người dùng mới</a>
                                @else
                                    <a class="btn btn-outline-primary" href="{{ route('admin.users.index')}}">Trở lại</a>
                                @endif
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div>
                                        <form method="GET" action="{{ route('admin.users.index',['list_delete'=>request()->get('list_delete')])}}"  class="form-inline form-group">
                                            <input type="text" value="{{request()->get('list_delete')}}" name="list_delete" hidden>
                                            <div class="row">
                                                <div class="col-5">
                                                    <input class="form-control" value="{{ request()->get('name')}}" name="name" class="form-control" placeholder="Họ tên">
                                                </div>
                                                <div class="col-4">
                                                    <input class="form-control" value="{{ request()->get('email')}}" name="email" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="col-1">
                                                    <a class="btn btn-danger" href="{{ route('admin.users.index',['list_delete'=>request()->get('list_delete')])}}"><i class="bx bx-refresh" data-toggle="tooltip" data-placement="top" data-original-title="tạo mới"></i></a>
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
							<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Họ tên</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Email</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Quyền hạn</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Số điện thoại</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">Ảnh đại diện</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Địa chỉ</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 139px;">Tác vụ</th></tr>
						</thead>
                        <tbody style="text-align: center">
                            @foreach ($users as $user)
                        <tr role="row">
                            <td class="sorting_1">{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @foreach ($user->roles as $key => $role)
                                    @if ($key == 0)
                                        {{ $role->name }} 
                                    @else
                                        {{'| '.$role->name}}
                                    @endif
                                @endforeach  
                            </td>
                            <td>
                                @if ($user->userInfo != null)
                                    {{$user->userInfo->phone}}
                                @endif    
                            </td>
                            <td><img src="@if ($user->userInfo == null) {{Illuminate\Support\Facades\Storage::disk('public')->url('avatar.jpg')}}@else{{ $user->userInfo->avatar_full }}
                            @endif" width="70px" height="90px"></td>
                            <td>
                                @if ($user->userInfo != null)
                                {{$user->userInfo->address}}
                                @endif
                            </td>
                            <td>
                                @if (request()->get('list_delete') != 'active')
                                <button type="button" class="btn btn-outline-info m-1" data-toggle="modal" data-target="#detal{{$user->id}}"><i class="fadeIn animated bx bx-info-circle" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết"></i></button>
							    <!-- Modal -->
							    <div class="modal fade" id="detal{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
								    <div class="modal-dialog modal-xl">
									    <div class="modal-content">
										    <div class="modal-header">
											    <h5 class="modal-title">Xem chi tiết</h5>
											    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
											    </button>
										    </div>
										    <div class="modal-body">
                                               <h1>{{$user->name}}</h1> 
                                            </div>
									    </div>
								    </div>
							    </div>
                                
                                <a href="{{route('admin.users.edit',['id'=>$user->id])}}" class="btn btn-outline-dark m-1"><i class="fadeIn animated bx bx-edit-alt" data-toggle="tooltip" data-placement="top" data-original-title="Chỉnh sửa"></i></a>
                                  <button type="button" class="btn btn-outline-warning m-1" data-toggle="modal" data-target="#login{{$user->id}}"><i class="fadeIn animated bx bx-user-check" data-toggle="tooltip" data-placement="top" data-original-title="Đăng nhập"></i></button>
                                  <!-- Modal -->
                                  <div class="modal fade" id="login{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                  Bạn có muốn tiếp tục không?
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                                                  <form action="{{ route('admin.users.login', $user->id )}}" method="post" style="float: left;">
                                                      @csrf
                                                      <button class="btn btn btn-danger">Có</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                <button type="button" class="btn btn-outline-danger m-1" data-toggle="modal" data-target="#delete{{$user->id}}"><i class="fadeIn animated bx bx-trash" data-toggle="tooltip" data-placement="top" data-original-title="Xóa"></i></button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                Bạn có muốn xóa người dùng này không?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                                <form action="{{route('admin.users.destroy',['id'=>$user->id])}}" method="post" style="float: left;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn btn-danger">Tiếp tục</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <form action="{{route('admin.users.destroy',['id'=>$user->id,'list_delete'=>request()->get('list_delete')])}}" method="POST" style="float: left;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn btn-outline-success">
                                        <i class="fadeIn animated bx bx-recycle" data-toggle="tooltip" data-placement="top" data-original-title="Khôi phục"></i> 
                                    </button>
                                    </form> 
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example_info" role="status" aria-live="polite"></div>
                </div>
                <div class="col-sm-12 col-md-7">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
@endsection