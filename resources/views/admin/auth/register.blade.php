<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Syndash - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="/admin/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="/admin/css/pace.min.css" rel="stylesheet" />
	<script src="/admin/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/admin/css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="/admin/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="/admin/css/app.css" />
</head>

<body class="bg-register">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-register d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
                <form action="{{ route('auth.register') }}" method="POST">
                  @csrf
                  <div class="card-body p-md-5">
                    <div class="text-center">
                      <img src="/admin/images/logo-icon.png" width="80" alt="">
                      <h3 class="mt-4 font-weight-bold">Tạo một tài khoản</h3>
                    </div>
                    <div class="input-group shadow-sm rounded mt-5">
                      <div class="input-group-prepend">	<span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="/admin/images/icons/search.svg" alt="" width="16"></span>
                      </div>
                      <input type="button" class="form-control border-0" value="Đăng ký bằng google">
                    </div>
                    <div class="input-group shadow-sm rounded mt-3">
                      <div class="input-group-prepend">	<span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="/admin/images/icons/facebook.svg" alt="" width="16"></span>
                      </div>
                      <input type="button" class="form-control border-0 text-facebook" value="Đăng ký bằng Facebook">
                    </div>
                    <div class="login-separater text-center"> <span>HOẶC ĐĂNG KÝ BẰNG EMAIL</span>
                      <hr/>
                    </div>
                    <div class="form-group mt-4">
                      <label>Email</label>
                      <input type="text" class="form-control" placeholder="Nhập email" name="email" value="{{old('email')}}"/>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label>Họ tên</label>
                        <input type="text" class="form-control" placeholder="Nhập họ tên" name="name" value="{{old('name')}}"/>
                      </div>
                      {{-- <div class="form-group col-md-6">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Deo" />
                      </div> --}}
                    </div>
                    <div class="form-group">
                      <label>Mật khẩu</label>
                      <div class="input-group" id="show_hide_password">
                        <input class="form-control border-right-0" type="password" placeholder="Mật khẩu"  name="password">
                        <div class="input-group-append">	<a href="javascript:;" class="input-group-text bg-transparent border-left-0"><i class='bx bx-hide'></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Nhập lại mật khẩu</label>
                      <div class="input-group">
                        <input class="form-control" type="password" placeholder="Nhập lại mật khẩu" name="password_confirmation">
                      </div>
                    </div>
                    {{-- <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">I read and agree to Terms & Conditions</label>
                      </div>
                    </div> --}}
                    <div class="btn-group mt-3 w-100">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                      </button>
                    </div>
                    <hr/>
                    <div class="text-center mt-4">
                      <p class="mb-0">Bạn có tài khoản? <a href="{{route('auth.login')}}">Đăng nhập</a>
                      </p>
                    </div>
                  </div>
                </form>
							</div>
							<div class="col-lg-6">
								<img src="/admin/images/login-images/register-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/admin/js/jquery.min.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
</body>

</html>
