
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

<body class="bg-login">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
                <form action="{{ route('auth.login')}}" method="post">
                  @csrf
                  <div class="card-body p-md-5">
                    <div class="text-center">
                      <img src="/admin/images/logo-icon.png" width="80" alt="">
                      <h3 class="mt-4 font-weight-bold">Chào mừng trở lại</h3>
                    </div>
                    <div class="input-group shadow-sm rounded mt-5">
                      <div class="input-group-prepend">	<span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="/admin/images/icons/search.svg" alt="" width="16"></span>
                      </div>
                      <input type="button" class="form-control  border-0" value="Đăng nhập bằng google">
                    </div>
                    <div class="login-separater text-center"> <span>HOẶC ĐĂNG NHẬP BẰNG EMAIL</span>
                      <hr/>
                    </div>
                    <div class="form-group mt-4">
                      <label>Email</label>
                      <input type="email" class="form-control" placeholder="Nhập email của bạn" name="email"/>
                    </div>
                    <div class="form-group">
                      <label>Mật khẩu</label>
                      <div class="input-group" id="show_hide_password">
                        <input class="form-control " type="password" placeholder="Mật khẩu"  name="text">
                        <div class="input-group-append">	<a href="javascript:;" class="input-group-text bg-transparent border-left-0"><i class='bx bx-hide'></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="customSwitch1" id="remember" name="remember" value="true">
                          <label class="custom-control-label" for="customSwitch1">Ghi nhớ</label>
                        </div>
                      </div>
                      <div class="form-group col text-right"> <a href="authentication-forgot-password.html"><i class='bx bxs-key mr-2'></i>Quên mật khẩu</a>
                      </div>
                    </div>
                    <div class="btn-group mt-3 w-100">
                      <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                      </button>
                    </div>
                    <hr>
                    <div class="text-center">
                      <p class="mb-0">Không có tài khoản? <a href="{{route('auth.register')}}">Đăng ký</a>
                      </p>
                    </div>
                  </div>
                </form>
							</div>
							<div class="col-lg-6">
								<img src="/admin/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
  <script src="/admin/js/jquery.min.js"></script>
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
