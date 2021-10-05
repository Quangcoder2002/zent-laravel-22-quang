<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN | @yield('title')</title>
  @include('admin.compoments.css_base')
  @stack('stack-css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('admin.includes.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        @yield('content-header')
    </div>
    <!-- /.content-header -->
<!-- Main content -->
<section class="content">
    @yield('content')

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
 
@include('admin.includes.footer')
@include('admin.compoments.scripts_base')
@stack('stack-scripts')
</body>
</html>
