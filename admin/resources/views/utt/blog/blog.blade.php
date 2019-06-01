@extends('utt.template.layout')

@section('content')


<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
      <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
       <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="front">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="blog">Blog</a></span></p>
       <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
     </div>
   </div>
 </div>
</div>
@foreach($news as $n)
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-3 d-flex ftco-animate">
        {{-- <div class="blog-entry align-self-stretch"> --}}
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
          </a>
          <div class="text mt-3">
           <div class="meta mb-2">
            <div><a href="#">{{$n -> created_at}}}</a></div>
            <div><a>Admin</a></div>
            <div><a class="meta-chat"><span class="icon-chat"></span> 3</a></div>
          </div>
          <h3 class="heading"><a href="admin/news/infoNews{{$n -> id}}">{{$n -> title_news}}</a></h3>
          <p>{{$n -> content_news}} <a href="admin/news/infoNews{{$n -> id}}"> ...Xem thêm</a></p>
        </div>
      {{-- </div> --}}
    </div>
    
</div>
</div>
</section>
@endforeach
@endsection