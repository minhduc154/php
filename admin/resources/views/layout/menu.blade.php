<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="front" class="site_title"><i class="fa fa-paw"></i> <span>UTT</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Xin chào,{{Auth::user()->username}}</span>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Main</h3>
        <ul class="nav side-menu">

          <?php

          if(Auth::user()-> role == 0)
          { 
          ?>
          <li><a href="admin/topic/list"><i class="fa fa-edit"></i> Quản lý hồ sơ đã ứng tuyển</a></li>
           <li><a><i class="fa fa-edit"></i> Quản lý tin tức <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="admin/news/list">Danh sách tin tức</a></li>
              <li><a href="admin/newstype/list">Danh sách loại tin</a></li>
              <li><a href="admin/newstype/add">Thêm loại tin</a></li>
              <li><a href="admin/news/add">Thêm tin tức</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-edit"></i> Quản lý tin tuyển dụng <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="admin/job/list">Danh sách tin tuyển dụng</a></li>
              
            </ul>
          </li>
          <li><a><i class="fa fa-edit"></i> Quản lý nhà tuyển dụng <span class="fa fa-chevron-down" ></span></a>
            <ul class="nav child_menu">
              <li><a href="admin/company/list">Danh sách nhà tuyển dụng</a></li>

            </ul>
          </li>
          <li><a><i class="fa fa-edit"></i> Quản lý sinh viên <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="admin/student/list">Danh sách sinh viên</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-edit"></i> Quản lý người dùng<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="admin/user/list">Danh sách người dùng</a></li>
              <li><a href="admin/user/add">Thêm người dùng</a></li>
            </ul>
          </li>
        
       <?php
        }
        else if(Auth::user()-> role == 1)
          { 
          ?>
          <li><a href="admin/company/edit/{{Auth::user()->id}}><i class="fa fa-edit"></i> Cập nhật hồ sơ <span ></span></a></li>
          <li><a href="admin/topic/listForCompany"><i class="fa fa-edit"></i> Quản lý hồ sơ ứng tuyển<span ></span></a></li>
          <li><a><i class="fa fa-edit"></i> Quản lý tin tuyển dụng <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="admin/job/listForCompany">Danh sách tin tin tuyển dụng</a></li>
              <li><a href="admin/job/add">Thêm tin tuyển dụng</a></li>
            </ul>
          </li>
          
          <?php
           }
           else
           {
          ?>
            <li><a href="admin/student/edit/{{Auth::user()->id}}><i class="fa fa-edit"></i> Cập nhật hồ sơ <span ></span></a></li>
           <li><a href="admin/topic/listForStudent"><i class="fa fa-edit"></i> Quản lý hồ sơ ứng tuyển<span ></span></a></li>
          <?php
           }
          ?>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Đăng xuất" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>