@extends('admin.layouts.master')
@section('title')
    Các quyền
@endsection
@section('url-home')
{{ route('admin.permission.index')}}
@endsection
@section('breadcrumb')
    Danh sách quyền
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
            
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                        <thead style="text-align: center;">
							<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Tên quyền</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 197px;">Tác vụ</th></tr>
						</thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                        <tr role="row">
                            <td>
                                {{ $permission->name }}
                            </td> 
                            <td>
                                <button type="button" class="btn btn-outline-info m-1" data-toggle="modal" data-target="#exampleModal{{$permission->id}}"><i class="fadeIn animated bx bx-info-circle" data-toggle="tooltip" data-placement="top" data-original-title="Xem chi tiết"></i></button>
							    <!-- Modal -->
							    <div class="modal fade" id="exampleModal{{$permission->id}}" tabindex="-1" role="dialog" aria-hidden="true">
								    <div class="modal-dialog modal-xl">
									    <div class="modal-content">
										    <div class="modal-header">
											    <h5 class="modal-title">Xem mô tả</h5>
											    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
											    </button>
										    </div>
										    <div class="modal-body">
                                               <h1>{{$permission->name}}</h1> 
                                            </div>
									    </div>
								    </div>
							    </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div > {{ $permissions->links() }}</div>
                </div>
            </div>
        </div>
@endsection