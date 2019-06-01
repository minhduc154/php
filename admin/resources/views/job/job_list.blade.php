@extends('layout.index')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Danh sách tin tuyển dụng</h3>
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
            <h2>Danh sách tin tức</h2>
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
                  <th>Tùy chọn</th>
                </tr>
              </thead>
              <tbody>
                @foreach($job as $jb)
                <tr>
                  <td>{{$jb->id}}</td>
                  <td>{{$jb->name_job}}</td>
                  <td>{{$jb-> id_company}}</td>
                  <td>{{$jb->type_job}}</td>
                  <td>{{$jb->description_job}}</td>
                  <td>{{$jb->quantity_job}}</td>
                  <td>{{$jb->salary_job}}</td>
                  <td>{{$jb->address_job}}</td>
                  <td>{{$jb->workingtime_job}}</td>
                  <td>{{$jb->applicationtime_job}}</td>
                  <td>{{$jb->url_job}}</td>
                  <td>
                    <a href="admin/job/edit/{{$jb->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                    <a href="admin/job/delete/{{$jb->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection