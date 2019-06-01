<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng Nhập</title>
	<link href="admin_asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="admin_asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="admin_asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="admin_asset/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="admin_asset/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="login">
	<div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

	@if(count($errors) > 0)
      
            <div class="alert alert-danger">
        
              @foreach($errors->all() as $err)
              {{$err}}<br>
              @endforeach
      
            </div>
      
            @endif
 
            @if(session('thongbao'))
          <div class="alert alert-success">
        
              {{session('thongbao')}}
         </div>
            @endif

	<form action="{{url('login')}}" method="post">
              <h1>Đăng nhập</h1>
              <div>
                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập"  />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu"  />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Đăng nhập</button>
                <a class="reset_pass" href="#">Quên mật khẩu</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Vào trang mới?
                  <a href="#signup" class="to_register"> Tạo tài khoản </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> UTT</h1>
                  
                </div>
              </div>
            </form>
         </section>
        </div>
	<div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="{{url('signup')}}" method="post">
              <h1>Tạo tài khoản</h1>
              <div>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input name="username" type="text" class="form-control" placeholder="tên đăng nhập"  />
              </div>
              <div>
                <input name="email" type="email" class="form-control" placeholder="Email"  />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="Mật khẩu"  />
              </div>
              <div>
                <input name="repassword" type="password" class="form-control" placeholder="Mật khẩu"  />
              </div>
              <div>
                <label class="radio-inline">
                  <input type="radio" name="role" value="1">Nhà tuyển dụng
                </label>
                </label>
                <label class="radio-inline">
                  <input type="radio" name="role" value="2" checked="">Sinh viên
                </label>
              </div>
              <div>
               <button class="btn btn-primary" type="reset">Làm mới</button>
                  <button type="submit" class="btn btn-success">Xác nhận</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Bạn đã có tài khoản?
                  <a href="#signin" class="to_register"> Đăng nhập </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> UTT</h1>
                  
                </div>
              </div>
            </form>
          </section>
        </div>
    </div>
</div>

</body>
</html>