@extends('admin.layouts.master')
@section('title')
    List Users
@endsection
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Users</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Users</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="container">
  <div class="main-body"> 
        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="@if ($user->avatar) {{$user->avatar}} @else https://lh3.googleusercontent.com/proxy/w9NA_6Kij_7GTq6Qt3U9qkAuh05yVgLXo3jAaWm3M_5MaHUnhNV9aSLxuJ8Y8ebAqCjZCEQltZVoaBHXsmwn-NA6N0fvp6l4 @endif" alt="Admin" class="rounded-circle" height="150" width="150">
                  <div class="mt-3">
                    <h4>{{$user->name}}</h4>
                    <p class="text-secondary mb-1">Full Stack Developer</p>
                    <p class="text-muted font-size-sm">{{$user->address}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$user->email}}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$user->phone}}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{$user->address}}
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
  </div>
@endsection