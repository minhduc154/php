@extends('layout.index')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Thêm tin tuyển dụng</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Nhập...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Tìm kiếm</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Thông tin tuyển dụng</h2>
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
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="admin/job/add" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên đề tài</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name ="name_job" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Loại công việc</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="type_job" id="" class="form-control col-md-7 col-xs-12">
                      <option value="FullTime">Full Time</option>
                      <option value="PartTime">Part Time</option>
                      <option value="Freelance">Freelance</option>
                      <option value="Internship">Internship</option>
                      <option value="Temporary">Temporary</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả công việc</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="description_job"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Số lượng</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="quantity_job" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mức lương</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="text" name="salary_job">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="text" name="address_job">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Thời gian làm việc</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="text" name="workingtime_job">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Thời gian ứng tuyển</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="applicationtime_job" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">URL</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="url_job" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="reset">Làm mới</button>
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
