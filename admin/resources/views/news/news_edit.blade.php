  
@extends('layout.index')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Sửa {{$news->name_news}}</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Thông tin {{$news->name_news}}</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            @if(count($errors)>0 )
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
            <form id="demo-form2" class="form-horizontal form-label-left" action="admin/news/edit/{{ $news->id }}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Loại tin</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="newstype" id="" class="form-control col-md-7 col-xs-12">
                    @foreach($newstype as $ntp)
                      <option 
                      @if($news->newstype->id==$ntp->id)
                      {{"selected"}}
                      @endif
                       value="{{$ntp->id}}">{{$ntp->name_newstype}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên tin tức</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name ="name_news" class="form-control col-md-7 col-xs-12" value="{{$news->name_news}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiêu đề</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name ="title_news" class="form-control col-md-7 col-xs-12" value="{{$news->title_news}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên Mô tả</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name ="description_news" class="form-control col-md-7 col-xs-12" value="{{$news->description_news}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nội dung</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name ="content_news" class="form-control col-md-7 col-xs-12" value="{{$news->content_news}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hình ảnh</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <p><img width="400px" src="upload/news/{{$news->image_news}}"></p>
                  <input type="file" id="first-name" name ="image_news" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="reset">Làm mới</button>
                  <button type="submit" class="btn btn-success">Sửa</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection
