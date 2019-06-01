@extends('layout.index')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Cập nhật thông tin hồ sơ ứng tuyển: {{$topic-> id}}</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

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


            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="admin/topic/edit/{{$topic-> id}}" method="POST">
              
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tên Sinh Viên*</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="id_student
                  "  class="form-control col-md-7 col-xs-12" value="{{$topic-> id_student}}" readonly="">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên Công Việc<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12"  type="text" name="id_job" placeholder="Nhập địa chỉ email" value="{{$topic-> id_job}}" readonly="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tình Trạng<span class="required">*</span>
                </label>
                <label class="radio-inline">
                  <input type="radio" name="status" value="0" @if($topic->status ==0)
                  {{"checked"}} 
                  @endif
                  >Đang Chờ Duyệt
                </label> 
                </label>
                <label class="radio-inline">
                  <input type="radio" name="status" value="1" @if($topic->status ==1)
                  {{"checked"}} 
                  @endif>Nhận hồ sơ
                </label>
                </label>
                <label class="radio-inline">
                  <input type="radio" name="status" value="2" @if($topic->status ==2)
                  {{"checked"}} 
                  @endif>Loại hồ sơ
                </label>
              </div>
              
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  
                  <button type="submit" class="btn btn-success">Xác nhận</button>
                  <a href="admin/topic/list" class="btn btn-primary" type="reset">Hủy</a>
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