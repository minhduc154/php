  
@extends('utt.template.layout')

@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('{{ URL::asset('asset_css/images/bg_2.jpg') }}" data-stellar-background-ratio="0.5">
  
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
       <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></p>
       <!-- <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1> -->

       <div class="ftco-search">
         <div class="row">
          <div class="col-md-12 nav-link-wrap">
           <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            
             <?php

          if(Auth::user()-> role == 2)
          { 
          ?>
           
             <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Sinh viên tìm việc</a>
             </div>
         </div>
         <div class="col-md-12 tab-wrap">
           
           <div class="tab-content p-4" id="v-pills-tabContent">

             <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
              <form action="admin/job/search" method="post" class="search-job">
               <div class="row">
                <div class="col-md">
                 <div class="form-group">
                  <div class="form-field">
                   <div class="icon"><span class="icon-briefcase"></span></div>
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                   <input type="text" name ='name_job' class="form-control" placeholder="Ví dụ: PHP, JAVA...">
                 </div>
               </div>
             </div>
             <div class="col-md">
               <div class="form-group">
                <div class="form-field">
                 <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="type_job" id="" class="form-control">
                   <option value="">Category</option>
                   <option value="FullTime">Full Time</option>
                   <option value="PartTime">Part Time</option>
                   <option value="Freelance">Freelance</option>
                   <option value="Internship">Internship</option>
                   <option value="Temporary">Temporary</option>
                 </select>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md">
           <div class="form-group">
            <div class="form-field">
             <div class="icon"><span class="icon-map-marker"></span></div>
             <input type="text" class="form-control" placeholder="Ví trị " name="address_job">
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
          <?php
          }
          else if(Auth::user()-> role == 1)
           {
          ?>

           <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Nhà tuyển dụng tìm sinh viên</a>
             </div>
         </div>
         <div class="col-md-12 tab-wrap">
           
           <div class="tab-content p-4" id="v-pills-tabContent">

             <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
              <form action="admin/filestudent/search" method="post" class="search-job">
               <div class="row">
                <div class="col-md">
                 <div class="form-group">
                  <div class="form-field">
                   <div class="icon"><span class="icon-briefcase"></span></div>
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                   <input type="text" name ='skill_student' class="form-control" placeholder="Ví dụ: PHP, JAVA...">
                 </div>
               </div>
             </div>
             <div class="col-md">
               <div class="form-group">
                <div class="form-field">
                 <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="experience_student" id="" class="form-control">
                   <option value="">Năm kinh nghiệm</option>
                   <option value="0">Chưa có kinh nghiệm</option>
                   <option value="1">1 năm</option>
                   <option value="2">2 năm</option>
                   <option value="3">3 năm</option>
                 </select>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md">
           <div class="form-group">
            <div class="form-field">
             <div class="icon"><span class="icon-map-marker"></span></div>
             <input type="text" class="form-control" placeholder="Ví trị " name="address_student">
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



           <?php
            }
           ?>        

             
           

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="ftco-section bg-light">
 <div class="container">
  <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 heading-section text-center ftco-animate">
      <!--             <span class="subheading">Công việc mới</span> -->
      <h2 class="mb-4"><span>CÔNG VIỆC</span></h2>
    </div>
  </div>
  <div class="row">
   <div class="container-fluid">
  @foreach($job as $j)
<!-- khối này sẽ có 4 column với width bằng nhau và = 25% -->
 <div class="row">
  <div class="col"><h2 class="mr-3 text-black h3">{{$j -> name_job}}</h2></div>
  <div class="col"><span class="bg-primary text-white badge py-2 px-3">{{$j-> type_job}}</span></div>
  <div class="col"><span class="icon-layers"></span>{{$j-> id_company }} <a href="#"></a></div>
  <div class="col"><span class="icon-my_location"></span> <span>{{$j-> address_job}}</span></div>
    <div class="col"><a href="admin/job/infoJob{{$j -> id}}" class="btn btn-primary py-2 mr-1">Chi tiết</a></div>
 </div> 
 @endforeach

</div>



</div>
</section>

@endsection