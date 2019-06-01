@extends('layout.index')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Danh sách sinh viên</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Nhập ...">
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
            <h2>Danh sách sinh viên</h2>
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
                  <th>Tên nhà tuyển dụng</th>
                  <th>Nghề nghiệp</th>
                  <th>Loại công việc</th>
                  <th>Image</th>
                  <th>Tùy chọn</th>
                </tr>
              </thead>
              @foreach($student as $stu)
              <tbody>
                <tr>
                  <td>{{$stu->id}}</td>
                  <td>{{$stu->name_student}}</td>
                  <td>{{$stu->career_student}}</td>
                  <td>{{$stu->jobtype_student}}</td>
                  <td><img width="100px" src="upload/student/{{$stu->image_student}}" alt=""></td>
                  <td>
                    <a href="admin/student/edit/{{$stu->id}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                    <a href="admin/student/delete/{{$stu->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                    <a href="admin/filestudent/infoStudent{{$stu->id}}" class="btn btn-success"><i class=""></i> Chi tiết </a>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection