@extends('layout.index')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Danh sách hồ sơ sv</h3>
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
            <h2>Danh sách hồ sơ sv</h2>
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
                  {{-- <th>Tên sinh viên</th> --}}
                  <th>Chuyên ngành</th>
                  <th>Địa chỉ</th>
                  <th>Ngày sinh</th>
                  <th>Mục tiêu</th>
                  <th>Trình độ</th>
                  <th>Kinh nghiệm</th>
                  <th>Kĩ năng</th>
                  <th>Email</th>
                  <th>Số điện thoại</th>
                  <th>CV</th>
                  <th>Tùy chọn</th>
                </tr>
              </thead>
              <tbody>
                @foreach($filestudent as $ft)
                <tr>
                  <td>{{$ft-> id}}</td>
                  {{-- <td>{{$ft->id_student}}</td> --}}
                  <td>{{$ft->technique_student}}</td>
                  <td>{{$ft->address_student}}</td>
                  <td>{{$ft->birthday}}</td>
                  <td>{{$ft->taget_student}}</td>
                  <td>{{$ft->education_student}}</td>
                  <td>{{$ft->experience_student}}</td>
                  <td>{{$ft->skill_student}}</td>
                  <td>{{$ft->email_student}}</td>
                  <td>{{$ft->phone_student}}</td>
                  <td><a href="upload/filestudent/{{$ft->pdf_student}}">Xem</a></td>
                  <td>
                    <a href="admin/filestudent/edit/{{$ft->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                    <a href="admin/filestudent/delete/{{$ft->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
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