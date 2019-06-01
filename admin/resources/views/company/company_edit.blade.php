@extends('layout.index')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Sửa <h5>{{$company->name_company}}</h5></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Thông tin nhà tuyển dụng</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            @if(count($errors) > 0)
                  <div class="alert alert_danger">
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


            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="admin/company/edit/{{ $company->id }}" method="POST" enctype="multipart/form-data">
              
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên công ty</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" name ="name_company" class="form-control col-md-7 col-xs-12" value="{{$company->name_company}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Số điện thoại</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="phone_company" required="required" class="form-control col-md-7 col-xs-12" value="{{$company->phone_company}}">
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="email_company" required="required" class="form-control col-md-7 col-xs-12" value="{{$company->email_company}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Website<span></span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="url_company" value="{{$company->url_company}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="address_company" value="{{$company->address_company}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình ảnh</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <img width="300px" src="upload/company/{{$company->image_company}}" alt="">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="file" name="image_company">
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