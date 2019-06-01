  
@extends('utt.template.layout')

@section('content')

<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
      <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
       <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="{{route('home')}}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Tài khoản</span></p>
       <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tài khoản</h1>
     </div>
   </div>
 </div>
</div>

<div class="ftco-section bg-light">
  <form action="{{route('StudentStore') }}" method="POST" class="p-5 bg-white" enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type="hidden" name="_token" value="{{csrf_token()}}"/>
   <input type="hidden" name="fileId" value="{{ $student['id_file'] }}">

   <div class="container">
    <h3>Cập nhật hồ sơ sinh viên</h3>
    <div class="row">

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

<!--         <div class="row form-group mb-12">

  <label class="font-weight-bold" for="fullname">Ảnh đại diện</label>
  <div class="col-md-12 mb-12 mb-md-0">
    <input type="file" name="stuAvata" class="form-control fullname" value="  " placeholder="Select your CV...">
  </div>
</div> -->

<div class="row form-group md-12">
  <div class="col-md-12 mb-12 mb-md-0">
    <label class="font-weight-bold" for="fullname">Họ tên</label>
    <input type="text" name ="name" class="form-control fullname " value="{{ $student['name'] }}" placeholder="Họ và tên">
    @if($errors->has('name'))
      <p style="color:red">{{$errors->first('name')}}</p>
    @endif
  </div>
</div>

<div class="row form-group mb-12">
  <label class="font-weight-bold" for="fullname">Số điện thoại</label>
  <div class="col-md-12 mb-12 mb-md-0">
    <input type="text" name="phone" class="form-control fullname " value="{{ $student['phone'] }}" placeholder="Số điện thoại">
    @if($errors->has('phone'))
      <p style="color:red">{{$errors->first('phone')}}</p>
    @endif
  </div>
</div>

<div class="row form-group mb-12">
  <label class="font-weight-bold" for="fullname">Email</label>
  <div class="col-md-12 mb-12 mb-md-0">
    <input type="text" name="email" class="form-control fullname " value="{{ $student['email'] }}" placeholder="Email">
    @if($errors->has('email'))
      <p style="color:red">{{$errors->first('email')}}</p>
    @endif
  </div>
</div>
</div>

<div class="col-md-6 col-lg-6 mb-6">
 <div class="row form-group mb-12">
  <div class="col-md-12 mb-12 mb-md-0">
    <label class="font-weight-bold" for="fullname">Địa chỉ</label>
    <input type="text" name = "address" class="form-control fullname" value="{{$student['address']}}" placeholder="Địa chỉ">
    @if($errors->has('address'))
      <p style="color:red">{{$errors->first('address')}}</p>
    @endif
  </div>
</div>

<div class="row form-group mb-12">
  <label class="font-weight-bold" for="fullname">Kỹ thuật</label>
  <div class="col-md-12 mb-12 mb-md-0">
    <input type="text" name="technique" class="form-control fullname" value="{{ $student['technique'] }}" placeholder="Kĩ thuật">
    @if($errors->has('technique'))
      <p style="color:red">{{$errors->first('technique')}}</p>
    @endif
  </div>
</div>

<div class="row form-group mb-12">
  <label class="font-weight-bold" for="fullname">Thời gian làm việc</label>
  <div class="col-md-12 mb-12 mb-md-0">
    <input type="text" name="working_time" class="form-control fullname" value="{{ $student['working_time'] }}" placeholder="Thời gian làm việc">
    @if($errors->has('working_time'))
      <p style="color:red">{{$errors->first('working_time')}}</p>
    @endif
  </div>
</div>

<div class="row form-group mb-12">
  <label class="font-weight-bold" for="fullname">Mục tiêu</label>
  <div class="col-md-12 mb-12 mb-md-0">
    <input type="text" name="target" class="form-control fullname" value="{{ $student['target'] }}" placeholder="Mục tiêu">
    @if($errors->has('target'))
      <p style="color:red">{{$errors->first('target')}}</p>
    @endif
  </div>
</div>

<div class="row form-group mb-12">
  <label class="font-weight-bold" for="fullname">Trình độ học vấn</label>
  <div class="col-md-12 mb-12 mb-md-0">
    <input type="text" name="education" class="form-control fullname" value="{{ $student['education'] }}" placeholder="Trình độ học vấn">
    @if($errors->has('education'))
      <p style="color:red">{{$errors->first('education')}}</p>
    @endif
  </div>
</div>

<div class="row form-group mb-12">
  <label class="font-weight-bold" for="fullname">Kinh nghiệm</label>
  <div class="col-md-12 mb-12 mb-md-0">
    <input type="text" name="experience" class="form-control fullname" value="{{ $student['experience'] }}" placeholder="Kinh nghiệm">
    @if($errors->has('experience'))
      <p style="color:red">{{$errors->first('experience')}}</p>
    @endif
  </div>
</div>

<div class="row form-group mb-12">
  <label class="font-weight-bold" for="fullname">Kĩ năng</label>
  <div class="col-md-12 mb-12 mb-md-0">
    <input type="text" name="skill" class="form-control fullname" value="{{ $student['skill'] }}" placeholder="Kĩ năng">
    @if($errors->has('skill'))
      <p style="color:red">{{$errors->first('skill')}}</p>
    @endif
  </div>
</div>


<div class="row form-group mb-12">
  <label class="font-weight-bold" for="fullname">CV</label>
  <div class="col-md-12 mb-12 mb-md-0">
    <input type="file" name="pdf" class="form-control fullname" value="{{$student['pdf']}}" placeholder="Select your CV...">

  </div>
</div>

<div class="row form-group">
  <div class="col-md-12">
    <input type="submit" value="Cập nhật" class="btn btn-primary  py-2 px-5">
  </div>
</div>



</div>



</div>
</div>

</form>

</div>



@endsection





