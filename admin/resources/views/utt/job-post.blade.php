<!DOCTYPE html>
<html lang="en">
<head>
  <title>Việc làm IT</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.timepicker.css') }}">
    
    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
  
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.html">Home</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="index.html" class="nav-link">Trang chủ</a></li>
         <li class="nav-item"><a href="about.html" class="nav-link">Giới thiệu</a></li>
         <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
         <li class="nav-item"><a href="contact.html" class="nav-link">Liên hệ</a></li>
         <li class="nav-item cta mr-md-2"><a href="new-post.html" class="nav-link">Đăng tin tuyển dụng</a></li>
         <li class="nav-item cta cta-colored"><a href='#modal-id' class="nav-link" data-toggle="modal">Đăng nhập</a></li>
         
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
                        <form action="">
                          <p class="message text-center">Đăng nhập để khám phá website</p>
                          <div class="form-group">
                            <input class="form-control input-email" placeholder="Địa chỉ email" type="text" name="" value="">
                          </div>

                          <div class="form-group">
                            <input class="form-control input-pwd" type="password" name="" value="" placeholder="Mật khẩu">
                          </div>
                          <div class="checkbox">
                            <label class="remember"><input type="checkbox" name="remember"> Remember me</label>
                          </div>
                          <div class="form-group text-center">
                            <button type="submit" class="btn btn-default login" value="">Đăng nhập</button>
                          </div>
                          
                        </form>
                      </div>
                      <!-- end form signin -->

                      <div id="signup-id" class="tab-pane fade">
                        <form action="">
                          <p class="message text-center">Đăng kí để ứng tuyển nhanh hơn</p>
                          <div class="form-group">
                            <input type="text" class="form-control input-usename" name="" value="" placeholder="Tên đăng nhập">
                          </div>

                          <div class="form-group">
                            <input type="text" class="form-control input-email" name="" value="" placeholder="Địa chỉ email">
                          </div>

                          <div class="form-group">
                            <input class="form-control input-pwd" type="password" name="" value="" placeholder="Mật khẩu">
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

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
       <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></p>

       <div class="ftco-search">
         <div class="row">
          <div class="col-md-12 nav-link-wrap">
           <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
             <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Tìm việc</a>

             <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Nhà tuyển dụng</a>

           </div>
         </div>
         <div class="col-md-12 tab-wrap">
           
           <div class="tab-content p-4" id="v-pills-tabContent">

             <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
              <form action="#" class="search-job">
               <div class="row">
                <div class="col-md">
                 <div class="form-group">
                  <div class="form-field">
                   <div class="icon"><span class="icon-briefcase"></span></div>
                   <input type="text" class="form-control" placeholder="Ví dụ: PHP, JAVA...">
                 </div>
               </div>
             </div>
             <div class="col-md">
               <div class="form-group">
                <div class="form-field">
                 <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="" class="form-control">
                   <option value="">Category</option>
                   <option value="">Full Time</option>
                   <option value="">Part Time</option>
                   <option value="">Freelance</option>
                   <option value="">Internship</option>
                   <option value="">Temporary</option>
                 </select>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md">
           <div class="form-group">
            <div class="form-field">
             <div class="icon"><span class="icon-map-marker"></span></div>
             <input type="text" class="form-control" placeholder="Vị trí">
           </div>
         </div>
       </div>
       <div class="col-md">
         <div class="form-group">
          <div class="form-field">
            <input type="submit" value="Tìm kiếm" class="form-control btn btn-primary">
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
  <form action="#" class="search-job">
   <div class="row">
    <div class="col-md">
     <div class="form-group">
      <div class="form-field">
       <div class="icon"><span class="icon-user"></span></div>
       <input type="text" class="form-control" placeholder="Ví dụ: Viettel, Samsung...">
     </div>
   </div>
 </div>
 <div class="col-md">
   <div class="form-group">
    <div class="form-field">
     <div class="select-wrap">
      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
      <select name="" id="" class="form-control">
       <option value="">Category</option>
       <option value="">Full Time</option>
       <option value="">Part Time</option>
       <option value="">Freelance</option>
       <option value="">Internship</option>
       <option value="">Temporary</option>
     </select>
   </div>
 </div>
</div>
</div>
<div class="col-md">
 <div class="form-group">
  <div class="form-field">
   <div class="icon"><span class="icon-map-marker"></span></div>
   <input type="text" class="form-control" placeholder="Vị trí">
 </div>
</div>
</div>
<div class="col-md">
 <div class="form-group">
  <div class="form-field">
    <input type="submit" value="Tìm kiếm" class="form-control btn btn-primary">
  </div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<section class="ftco-section ftco-counter">
 <div class="container">
  <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 heading-section text-center ftco-animate">
     <span class="subheading">Công việc dành cho bạn</span>
     <h2 class="mb-4"><span>Current</span> Job Posts</h2>
   </div>
 </div>
 <div class="row">
   <div class="col-md-3 ftco-animate">
    <ul class="category">
     <li><a href="#">Web Development <span class="number" data-number="1000">0</span></a></li>
     <li><a href="#">Graphic Designer <span class="number" data-number="1000">0</span></a></li>
     <li><a href="#">Multimedia <span class="number" data-number="2000">0</span></a></li>
     <li><a href="#">Advertising <span class="number" data-number="900">0</span></a></li>
   </ul>
 </div>
 <div class="col-md-3 ftco-animate">
  <ul class="category">
   <li><a href="#">Education &amp; Training <span class="number" data-number="3500">0</span></a></li>
   <li><a href="#">English <span class="number" data-number="1560">0</span></a></li>
   <li><a href="#">Social Media <span class="number" data-number="1000">0</span></a></li>
   <li><a href="#">Writing <span class="number" data-number="2500">0</span></a></li>
 </ul>
</div>
<div class="col-md-3 ftco-animate">
  <ul class="category">
   <li><a href="#">PHP Programming <span class="number" data-number="5500">0</span></a></li>
   <li><a href="#">Project Management <span class="number" data-number="2000">0</span></a></li>
   <li><a href="#">Finance Management <span class="number" data-number="800">0</span></a></li>
   <li><a href="#">Office &amp; Admin <span class="number" data-number="7000">0</span></a></li>
 </ul>
</div>
<div class="col-md-3 ftco-animate">
  <ul class="category">
   <li><a href="#">Web Designer <span><span class="number" data-number="8000">0</span></span></a></li>
   <li><a href="#">Customer Service <span class="number" data-number="4000">0</span></a></li>
   <li><a href="#">Marketing &amp; Sales <span class="number" data-number="3300">0</span></a></li>
   <li><a href="#">Software Development <span class="number" data-number="1356">0</span></a></li>
 </ul>
</div>
</div>
</div>
</section>

<section class="ftco-section bg-light">
 <div class="container">
  <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 heading-section text-center ftco-animate">
      <h2 class="mb-4"><span>Công việc</span> mới</h2>
    </div>
  </div>
  <div class="row">
   <div class="col-md-12 ftco-animate">

    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

      <div class="mb-4 mb-md-0 mr-5">
        <div class="job-post-item-header d-flex align-items-center">
          <h2 class="mr-3 text-black h3">Frontend Development</h2>
          <div class="badge-wrap">
           <span class="bg-primary text-white badge py-2 px-3">Partime</span>
         </div>
       </div>
       <div class="job-post-item-body d-block d-md-flex">
        <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
      </div>
    </div>

    <div class="ml-auto d-flex">
      <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply Job</a>
      <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
       <span class="icon-heart"></span>
     </a>
   </div>
 </div>
</div><!-- end -->

<div class="col-md-12 ftco-animate">
  <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

    <div class="mb-4 mb-md-0 mr-5">
     <div class="job-post-item-header d-flex align-items-center">
       <h2 class="mr-3 text-black h4">Full Stack Developer</h2>
       <div class="badge-wrap">
        <span class="bg-warning text-white badge py-2 px-3">Full Time</span>
      </div>
    </div>
    <div class="job-post-item-body d-block d-md-flex">
     <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a></div>
     <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
   </div>
 </div>

 <div class="ml-auto d-flex">
   <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply Job</a>
   <a href="#" class="btn btn-danger rounded-circle btn-favorite d-flex align-items-center">
     <span class="icon-heart"></span>
   </a>
 </div>

</div>
</div> <!-- end -->
<div class="col-md-12 ftco-animate">
 <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

  <div class="mb-4 mb-md-0 mr-5">
   <div class="job-post-item-header d-flex align-items-center">
     <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
     <div class="badge-wrap">
      <span class="bg-info text-white badge py-2 px-3">Freelance</span>
    </div>
  </div>
  <div class="job-post-item-body d-block d-md-flex">
   <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
   <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
 </div>
</div>

<div class="ml-auto d-flex">
  <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply Job</a>
  <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
   <span class="icon-heart"></span>
 </a>
</div>
</div>
</div> <!-- end -->
<div class="col-md-12 ftco-animate">

 <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

  <div class="mb-4 mb-md-0 mr-5">
   <div class="job-post-item-header d-flex align-items-center">
     <h2 class="mr-3 text-black h4">Frontend Development</h2>
     <div class="badge-wrap">
      <span class="bg-secondary text-white badge py-2 px-3">Internship</span>
    </div>
  </div>
  <div class="job-post-item-body d-block d-md-flex">
   <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
   <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
 </div>
</div>

<div class="ml-auto d-flex">
  <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply Job</a>
  <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
   <span class="icon-heart"></span>
 </a>
</div>
</div>
</div> <!-- end -->
<div class="col-md-12 ftco-animate">
 <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

  <div class="mb-4 mb-md-0 mr-5">
   <div class="job-post-item-header d-flex align-items-center">
     <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
     <div class="badge-wrap">
      <span class="bg-danger text-white badge py-2 px-3">Temporary</span>
    </div>
  </div>
  <div class="job-post-item-body d-block d-md-flex">
   <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
   <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
 </div>
</div>

<div class="ml-auto d-flex">
  <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply Job</a>
  <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
   <span class="icon-heart"></span>
 </a>
</div>
</div>
</div> <!-- end -->
<div class="col-md-12 ftco-animate">

  <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

    <div class="mb-4 mb-md-0 mr-5">
      <div class="job-post-item-header d-flex align-items-center">
        <h2 class="mr-3 text-black h3">Frontend Development</h2>
        <div class="badge-wrap">
         <span class="bg-primary text-white badge py-2 px-3">Partime</span>
       </div>
     </div>
     <div class="job-post-item-body d-block d-md-flex">
      <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
      <div><span class="icon-map-marker"></span> <span>Western City, UK</span></div>
    </div>
  </div>

  <div class="ml-auto d-flex">
    <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply Job</a>
    <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
     <span class="icon-heart"></span>
   </a>
 </div>
</div>
</div><!-- end -->

<div class="col-md-12 ftco-animate">
  <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

    <div class="mb-4 mb-md-0 mr-5">
     <div class="job-post-item-header d-flex align-items-center">
       <h2 class="mr-3 text-black h4">Full Stack Developer</h2>
       <div class="badge-wrap">
        <span class="bg-warning text-white badge py-2 px-3">Full Time</span>
      </div>
    </div>
    <div class="job-post-item-body d-block d-md-flex">
     <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a></div>
     <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
   </div>
 </div>

 <div class="ml-auto d-flex">
  <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply Job</a>
  <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
   <span class="icon-heart"></span>
 </a>
</div>

</div>
</div> <!-- end -->
<div class="col-md-12 ftco-animate">
 <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

  <div class="mb-4 mb-md-0 mr-5">
   <div class="job-post-item-header d-flex align-items-center">
     <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
     <div class="badge-wrap">
      <span class="bg-info text-white badge py-2 px-3">Freelance</span>
    </div>
  </div>
  <div class="job-post-item-body d-block d-md-flex">
   <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
   <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
 </div>
</div>

<div class="ml-auto d-flex">
  <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply Job</a>
  <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
   <span class="icon-heart"></span>
 </a>
</div>
</div>
</div> <!-- end -->
<div class="col-md-12 ftco-animate">

 <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

  <div class="mb-4 mb-md-0 mr-5">
   <div class="job-post-item-header d-flex align-items-center">
     <h2 class="mr-3 text-black h4">Frontend Development</h2>
     <div class="badge-wrap">
      <span class="bg-secondary text-white badge py-2 px-3">Internship</span>
    </div>
  </div>
  <div class="job-post-item-body d-block d-md-flex">
   <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
   <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
 </div>
</div>

<div class="ml-auto d-flex">
  <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply Job</a>
  <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
   <span class="icon-heart"></span>
 </a>
</div>
</div>
</div> <!-- end -->
<div class="col-md-12 ftco-animate">
 <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

  <div class="mb-4 mb-md-0 mr-5">
   <div class="job-post-item-header d-flex align-items-center">
     <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
     <div class="badge-wrap">
      <span class="bg-danger text-white badge py-2 px-3">Temporary</span>
    </div>
  </div>
  <div class="job-post-item-body d-block d-md-flex">
   <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
   <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
 </div>
</div>

<div class="ml-auto d-flex">
  <a href="job-single.html" class="btn btn-primary py-2 mr-1">Apply Job</a>
  <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
   <span class="icon-heart"></span>
 </a>
</div>
</div>
</div> <!-- end -->
</div>
<div class="row mt-5">
  <div class="col text-center">
    <div class="block-27">
      <ul>
        <li><a href="#">&lt;</a></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&gt;</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</section>

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
                  <input type="submit" value="Đang kí" class="submit px-3">
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
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>