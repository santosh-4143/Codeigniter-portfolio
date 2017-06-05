        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>Admin Panel</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url();?>assets/admin/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Admin');?>">Dashboard</a></li>
                      <li><a href="<?php echo base_url('Admin/ChangeAdminSettingsAction');?>">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Add Images <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('Admin/InsertImageAction');?>">Add New Image</a></li>
                    </ul>
                  </li>


                  <li><a><i class="fa fa-desktop"></i>View Images <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Admin/ViewImageAction');?>">View All Images</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-windows  "></i>Inbox<span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Admin/ViewAllMessagesAction');?>">View All Messages</a></li>
                    </ul>
                  </li>

               </ul>
              </div>
              
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
