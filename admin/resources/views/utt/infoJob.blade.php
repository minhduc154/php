<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Trang chủ</title>
    
    <base href="{{asset('')}}">

    <!-- Bootstrap -->
    <link href="admin_asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="admin_asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="admin_asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="admin_asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="admin_asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="admin_asset/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="admin_asset/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="admin_asset/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tin tuyển dụng</h3>
      </div>

      {{-- <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Nhập ...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Tìm kiếm</button>
            </span>
          </div>
        </div>
      </div> --}}
    </div>

    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Chi tiết công việc</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">        
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên đề tài</th>
                  <th>Công ty</th>
                  <th>Loại công việc</th>
                  <th>Mô tả công việc</th>
                  <th>Số lượng</th>
                  <th>Mức lương</th>
                  <th>Địa chỉ</th>
                  <th>Thời gian làm việc</th>
                  <th>Thời gian ứng tuyển</th>
                  <th>URL</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$job->id}}</td>
                  <td>{{$job->name_job}}</td>
                  <td>{{$job-> id_company}}</td>
                  <td>{{$job->type_job}}</td>
                  <td>{{$job->description_job}}</td>
                  <td>{{$job->quantity_job}}</td>
                  <td>{{$job->salary_job}}</td>
                  <td>{{$job->address_job}}</td>
                  <td>{{$job->workingtime_job}}</td>
                  <td>{{$job->applicationtime_job}}</td>
                  <td>{{$job->url_job}}</td>
                  
                </tr>
                @if(Auth::user()->role == 2)
              <td> <a class="btn btn-primary" href="admin/job/apply{{$job->id}}">Ứng tuyển</a></td>
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
</body>
</html>
