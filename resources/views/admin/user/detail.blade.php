@extends('admin.layouts.master')
@section('title')
    Quản lý người dùng
@endsection
@section('url-home')
{{ route('admin.users.index')}}
@endsection
@section('breadcrumb')
    Thông tin người dùng
@endsection
@section('content')
            <div class="user-profile-page">
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-7 border-right">
                                <div class="d-md-flex align-items-center">
                                    <div class="mb-md-0 mb-3">
                                        <img src="{{$user->userInfo->avatar_full}}" class="rounded-circle shadow" width="130" height="130" alt="" />
                                    </div>
                                    <div class="ml-md-4 flex-grow-1">
                                        <div class="d-flex align-items-center mb-1">
                                            <h4 class="mb-0">{{$user->name}}</h4>
                                        </div>
                                        <p class="mb-0 text-muted">Quản trị viên</p>
                                        <p class="text-primary"><i class='bx bx-buildings'></i>{{$user->userInfo->address}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <table class="table table-sm table-borderless mt-md-0 mt-3">
                                    <tbody>
                                        <tr>
                                            <th>Availability:</th>
                                            <td>Full-time <span class="badge badge-success">available</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Age:</th>
                                            <td>27</td>
                                        </tr>
                                        <tr>
                                            <th>Địa chỉ:</th>
                                            <td>{{$user->userInfo->address}}</td>
                                        </tr>
                                        <tr>
                                            <th>Years experience:</th>
                                            <td>6</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
<!--end page-wrapper-->
<!--start overlay-->    
@endsection