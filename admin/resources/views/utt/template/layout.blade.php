
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/open-iconic-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/animate.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/magnific-popup.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/aos.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/ionicons.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/jquery.timepicker.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/style.css') }}">
</head>

<body>
  <style>
    a.dropdown-toggle.username {
      background: transparent;
      color: back;
      border: 0px solid #ddd;
    }

    ul.nav.navbar-nav.navbar-right {
      background: transparent!important;
    }


  </style>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href=""></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="front" class="nav-link">Trang chủ</a></li>
         <li class="nav-item active"><a href="about" class="nav-link">Giới thiệu</a></li>
         <li class="nav-item active"><a href="blog" class="nav-link">Blog</a></li>
         <li class="nav-item active"><a href="contact" class="nav-link">Liên hệ</a></li>

         @if(Auth::check())

         <ul class="nav navbar-nav navbar-right username" >
          <li class="dropdown">
           <a  href="" class="dropdown-toggle username" data-toggle="dropdown">
            {{Auth::user()->username}}
          </a>
          <ul class="dropdown-menu">
            <?php

          if(Auth::user()-> role == 2)
          { 
          ?>
            <li><a href="admin/student/edit/{{Auth::user()->id}}">Cập nhật hồ sơ</a></li>
            <li><a href="">Đổi mật khẩu</a></li>
            <li><a href="admin/topic/listForStudent">Công việc đã ứng tuyển</a></li>
            <li><a href="logout">Đăng xuất</a></li>
          <?php
            }
            else if(Auth::user()-> role == 1)
            {
          ?>
            <li><a href="admin/company/edit/{{Auth::user()->id}}">Cập nhật hồ sơ</a></li>
            <li><a href="">Đổi mật khẩu</a></li>
            <li><a href="admin/topic/listForCompany">Quản lý hồ sơ đã ứng tuyển</a></li>
            <li><a href="admin/job/listForCompany">Quản lý tin tuyển dụng</a></li>
            <li><a href="logout">Đăng xuất</a></li>
          <?php
          }
          else
          {
          ?>
           
            <li><a href="">Đổi mật khẩu</a></li>
            <li><a href="home">Quản lý hệ thống</a></li>
            <li><a href="logout">Đăng xuất</a></li>
            <?php
          }
          ?> 
          </ul>
        </li>
      </ul>


      @else
      <li class="nav-item cta mr-md-2"><a href="new-post.html" class="nav-link">Nhà tuyển dụng</a></li>


      <li class="nav-item cta cta-colored"><a href='#modal-id' class="nav-link" data-toggle="modal">Đăng nhập</a></li>

      @endif

      <!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a> -->
      <div class="modal fade" id="modal-id">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="ftco-login">
                <div class="row">
                 <div class="col-md-12 nav-link-wrap">

                  <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Đăng nhập</a></li>
                    <li><a data-toggle="tab" href="#signup-id">Đăng kí</a></li>
                  </ul>

                  <div class="tab-content">

                    <div id="home" class="tab-pane in active">
                      <?php

                      ?>
                      <form action="" method="POST">
                        <p class="message text-center">Đăng nhập để khám phá website</p>
                        @if($errors ->has('errorlogin'))
                        <div class="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <p style="color:red">{{$errors->first('erroslogin')}} </p>
                        </div>
                        @endif
                        <div class="form-group">
                          <input class="form-control input-email" placeholder="Email" type="text" name="email" value="{{old('email')}}">
                          @if($errors->has('email'))
                          <p style="color:red">{{$errors->first('email')}}</p>
                          @endif
                        </div>

                        <div class="form-group">
                          <input class="form-control input-pwd" type="password" name="password" value="" placeholder="Mật khẩu">
                          @if($errors->has('password'))
                          <p style="color:red">{{$errors->first('password')}}</p>
                          @endif
                        </div>
                        <div class="checkbox">
                          <label class="remember"><input type="checkbox" name="remember"> Remember me</label>
                        </div>
                        <div class="form-group text-center">
                          {!! csrf_field() !!}
                          <button type="submit" class="btn btn-default login" value="">Đăng nhập</button>
                        </div>

                      </form>
                    </div>
                    <!-- end form signin -->

                    <div id="signup-id" class="tab-pane fade">
                      <form action="">
                        <p class="message text-center">Đăng kí để ứng tuyển nhanh hơn</p>
                        <div class="form-group">
                          <input type="text" class="form-control input-usename" name="username" value="" placeholder="Tên đăng nhập">
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control input-email" name="email" value="" placeholder="Địa chỉ email">
                        </div>

                        <div class="form-group">
                          <input class="form-control input-pwd" type="password" name="password" value="" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group text-center">
                          <button type="submit" class="btn btn-default login" value="">Đăng kí</button>
                        </div>

                      </form>
                    </div>

                    <!-- end form signup -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </ul>
</div>
</div>
</nav>
<!-- END nav -->

@yield('content')

<section class="ftco-section-parallax">
  <div class="parallax-img d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <h2>Đăng kí để nhận tin mới nhất</h2>
          <div class="row d-flex justify-content-center mt-4 mb-4">
            <div class="col-md-8">
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Địa chỉ email của bạn">
                  <input type="submit" value="Đăng kí" class="submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
       <div class="ftco-footer-widget mb-3">
        <h2 class="ftco-heading-2"><strong>ĐẠI HỌC CÔNG NGHỆ GTVT</strong></h2>
        <p>Số 54 Triều Khúc, Thanh Xuân, Hà Nội</p>
        <p>Điện thoại: 0243.854 4264</p>
        <p>Fax: 0243.854 7695</p>
        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
          <li class="ftco-animate"><a href="https://twitter.com"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a href="https://fb.com"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-3">
        <h2 class="ftco-heading-2"><strong>CƠ SỞ VĨNH PHÚC</strong></h2>
        <ul class="list-unstyled">
          <p>Số 278 Lam Sơn, Đồng Tâm, TP. Vĩnh Yên, Vĩnh Phúc</p>
          <p>Điện thoại: 0211.386.7405</p>
          <p>Fax: 0211.386.7391</p>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-3 ml-md-3">
        <h2 class="ftco-heading-2">CƠ SỞ THÁI NGUYÊN</h2>
        <ul class="list-unstyled">
          <p>Phường Tân Thịnh, TP.Thái Nguyên, Thái Nguyên</p>
          <p>Điện thoại: 0280.385.6545</p>
          <p>Fax: 0280.374.6975</p>
        </ul>
      </div>
    </div>
  </div>
</div>
</footer>



<!-- loader -->


<script src="asset_css/js/jquery.min.js"></script>
<script src="asset_css/js/jquery-migrate-3.0.1.min.js"></script>
<script src="asset_css/js/popper.min.js"></script>
<script src="asset_css/js/bootstrap.min.js"></script>
<script src="asset_css/js/jquery.easing.1.3.js"></script>
<script src="asset_css/js/jquery.waypoints.min.js"></script>
<script src="asset_css/js/jquery.stellar.min.js"></script>
<script src="asset_css/js/owl.carousel.min.js"></script>
<script src="asset_css/js/jquery.magnific-popup.min.js"></script>
<script src="asset_css/js/aos.js"></script>
<script src="asset_css/js/jquery.animateNumber.min.js"></script>
<script src="asset_css/js/bootstrap-datepicker.js"></script>
<script src="asset_css/js/jquery.timepicker.min.js"></script>
<script src="asset_css/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="asset_css/js/google-map.js"></script>
<script src="asset_css/js/main.js"></script>

</body>
</html>
