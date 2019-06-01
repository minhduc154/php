  
@extends('layout.index')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Sửa</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Thông tin loại tin tức</h2>
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
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="admin/newstype/edit/{{ $newstype->id }}" method="POST">
              <input type="hidden" name ="_token" value="{{csrf_token()}}" />
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên loại tin *</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name ="name_newstype" class="form-control col-md-7 col-xs-12" value="{{ $newstype->name_newstype }}">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Thoát</button>
                  <button type="submit" class="btn btn-success">Xác nhận</button>
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
