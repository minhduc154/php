  
@extends('utt.template.layout')

@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
      <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
       <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="front">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="contact">Liên hệ</a></span></p>
       <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Liên hệ với chúng tôi</h1>
     </div>
   </div>
 </div>
</div>

<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h3">Về chúng tôi</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3">
        <p><span>Địa chỉ:</span> 54 Triều Khúc, Thanh Xuân, Hà Nội</p>
      </div>
      <div class="col-md-3">
        <p><span>Điện thoại:</span> <a href="tel://1234567920">0243.854 4264</a></p>
      </div>
      <div class="col-md-3">
        <p><span>Email:</span> <a href="mailto:info@yoursite.com">utt@utt.edu.vn</a></p>
      </div>
      <div class="col-md-3">
        <p><span>Website</span> <a href="#">utt.edu.vn</a></p>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="#" class="bg-white p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Họ tên">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Email liên hệ ">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Tin nhắn"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Gửi tin nhắn" class="btn btn-primary py-3 px-5">
          </div>
        </form>
        
      </div>

      <div class="col-md-6 d-flex">
       <div id="map" class="bg-white"></div>
     </div>
   </div>
 </div>
</section>

@endsection