@extends('layout.index')

@section('content')
<!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
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
          <h3>Quản lý người dùng</h3>
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
              <h2>Danh sách người dùng</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">        
              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    
                    <th>ID</th>
                    <th>Tài khoản</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($user as $u)
                  <tr>
                    <td>{{$u -> id}}</td>
                    <td>{{$u -> username}}</td>
                    <td>{{$u -> password}}</td>
                    <td>{{$u -> email}}</td>
                    <td>@if($u -> role==0)
                    {{'Quản trị viên'}}
                    @elseif($u -> role==1)
                    {{'Nhà tuyển dụng'}}
                    @else
                    {{'Sinh viên'}}
                    @endif</td>
                    
                    <td>
                      <a href="admin/user/edit{{$u -> id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                      <a href="admin/user/del{{$u -> id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
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