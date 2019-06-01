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
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Thông tin sinh viên</h3>
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
            <h2>Hồ sơ sinh viên</h2>
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
                  <th>Tên sinh viên</th>
                  <th>Ngày sinh</th>
                  <th>Địa chỉ</th>
                  <th>Chuyên ngành</th>
                  <th>Trình độ</th> 
                  <th>Kĩ năng</th> 
                  <th>Mục tiêu</th>
                  
                  <th>Kinh nghiệm</th>
                  
                  <th>Email</th>
                  <th>Số điện thoại</th>
                  <th>CV</th>
                  
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td>{{$student-> id}}</td>
                  <td>{{$student->student -> name_student}}</td>
                  <td>{{$student->birthday}}</td>
                  <td>{{$student->address_student}}</td>
                  <td>{{$student->technique_student}}</td>
                  <td>{{$student->education_student}}</td>
                  <td>{{$student->skill_student}}</td>
                  <td>{{$student->taget_student}}$</td>
                  
                  
                  <td>{{$student->experience_student}} năm</td>
                  
                  <td>{{$student->email_student}}</td>
                  <td>{{$student->phone_student}}</td>
                  <td><a href="upload/filestudent/{{$student->pdf_student}}">Xem</a></td>
                  
                </tr>
                
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
