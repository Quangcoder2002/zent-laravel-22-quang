<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Syndash - Bootstrap4 admin Template</title>
	<!--favicon-->
	<link rel="icon" href="/admin/images/favicon-32x32.png" type="image/png" />
	<!-- Vector CSS -->
	<link href="/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<!--plugins-->
	<link href="/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="/admin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="/admin/css/pace.min.css" rel="stylesheet" />
	<script src="/admin/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/admin/css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="/admin/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="/admin/css/app.css" />
	<link rel="stylesheet" href="/admin/css/dark-sidebar.css" />
	<link rel="stylesheet" href="/admin/css/dark-theme.css" />
	<link rel="stylesheet" href="/admin/plugins/Toast/css/toast.css" />
	@stack('stack-css')
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		@include('admin.includes.sidebar-wrapper')
		<!--end sidebar-wrapper-->
		<!--header-->
		@include('admin.includes.top-header')
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<div class="page-content-wrapper">
				<div class="page-content">
					<div id="toast" ></div>
					<!--breadcrumb-->
					@if (!request()->routeIs('admin.dashboard.*'))
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">@yield('title')</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="@yield('url-home')"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">@yield('breadcrumb')</li>
								</ol>
							</nav>
						</div>
					</div>
					@endif
					<!--end breadcrumb-->
					<!--page-content-wrapper-->
					
					@yield('content')
					<!--end page-content-wrapper-->
				</div>
			</div>
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		@include('admin.includes.footer')
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	{{-- <div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="custom-control custom-radio">
					<input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="darkmode">Dark Mode</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
					<label class="custom-control-label" for="lightmode">Light Mode</label>
				</div>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="DarkSidebar">
				<label class="custom-control-label" for="DarkSidebar">Dark Sidebar</label>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="ColorLessIcons">
				<label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
			</div>
		</div>
	</div> --}}
	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/admin/js/jquery.min.js"></script>
	<script src="/admin/js/popper.min.js"></script>
	<script src="/admin/js/bootstrap.min.js"></script>
	<!--plugins-->
	<script src="/admin/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="/admin/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- Vector map JavaScript -->
	<script src="/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="/admin/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
	<script src="/admin/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="/admin/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="/admin/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="/admin/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="/admin/plugins/Toast/js/toast.js"></script>
	<script src="/admin/js/index.js"></script>
	<!-- App JS -->
	<script src="/admin/js/app.js"></script>
	<script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
	</script>
	<script>
			@if (session('error'))
			toast({
				title: "Thất bại!",
					message: "{{ session('error') }}",
					type: "error",
					duration: 5000
			});
		@endif
		@if (session('success'))
			toast({
				title: "Thành công!",
				message: "{{ session('success') }}",
				type: "success",
				duration: 5000
			});
		@endif
		@if (session('login'))
			toast({
				title: "Thành công!",
				message: "{{ session('login') }}",
				type: "success",
				duration: 5000
			});
		@endif
	</script>
	@stack('stack-js')
</body>
</html>