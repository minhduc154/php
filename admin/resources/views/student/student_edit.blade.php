@extends('layout.index')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Sửa <h5>{{$student->name_student}}</h5></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Thông tin {{$student->name_student}}</h2>
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

                   
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="admin/student/edit/{{ $student->id }}" method="POST" enctype="multipart/form-data">
              
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên sinh viên</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name ="name_student" class="form-control col-md-7 col-xs-12" value="{{$student->name_student}}">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nghề nghiệp</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="text" name="career_student" value="{{$student->career_student}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Loại công việc</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="jobtype_student" id="" class="form-control col-md-7 col-xs-12">
                    <option value="FullTime">Full Time</option>
                    <option value="PartTime">Part Time</option>
                    <option value="Freelance">Freelance</option>
                    <option value="Internship">Internship</option>
                    <option value="Temporary">Temporary</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình ảnh</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <img width="300px" src="upload/student/{{$student->image_student}}" alt="">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="file" name="image_student">
                  
                </div>
              </div>
              <h2>Thông tin hồ sơ</h2>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Chuyên ngành</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name ="technique_student" class="form-control col-md-7 col-xs-12" value="{{$filestudent->technique_student}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Địa chỉ</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name ="address_student" class="form-control col-md-7 col-xs-12" value="{{$filestudent->address_student}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ngày sinh</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="date" id="last-name" name="birthday" class="form-control col-md-7 col-xs-12" value="{{$filestudent->birthday}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mục tiêu</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="text" name="taget_student" value="{{$filestudent->taget_student}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Trình độ</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="text" name="education_student" value="{{$filestudent->education_student}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Kinh nghiệm</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="text" name="experience_student" value="{{$filestudent->experience_student}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kĩ năng</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="skill_student" class="form-control col-md-7 col-xs-12" value="{{$filestudent->skill_student}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="email_student" class="form-control col-md-7 col-xs-12" value="{{$filestudent->email_student}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Số điện thoại</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="phone_student" class="form-control col-md-7 col-xs-12" value="{{$filestudent->phone_student}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">CV</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <a href="upload/filestudent/{{$filestudent->pdf_student}}">Xem</a>
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="file" name="pdf_student" value="{{$filestudent->pdf_student}}">
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