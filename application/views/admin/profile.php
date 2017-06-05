<?php $this->load->view('admin/include/header'); ?>

<div class="right_col" role="main">
<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Change Admin Settings</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    <!-- <form id="demo-form2" class="form-horizontal form-label-left"> -->
               <?php echo form_open_multipart('Admin/ChangeAdminSettingsAction',['id'=>'demo-form2','class'=>'form-horizontal form-label-left']); ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="mobile" value="<?php echo set_value('mobile'); ?>" class="form-control col-md-7 col-xs-12">
                          <span style="color:red"><?php echo form_error('mobile'); ?></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control col-md-7 col-xs-12">
                          <span style="color:red"><?php echo form_error('email'); ?></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">New Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="pass" value="<?php echo set_value('pass'); ?>" class="form-control col-md-7 col-xs-12">
                          <span style="color:red"><?php echo form_error('pass'); ?></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="conpass" value="<?php echo set_value('conpass'); ?>" class="form-control col-md-7 col-xs-12">
                          <span style="color:red"><?php echo form_error('conpass'); ?></span>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" name="submit" value="Submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      <?php echo form_close(); ?>
                    <!-- form -->
                  </div>
                </div>
              </div>
            </div>

<?php $this->load->view('admin/include/footer'); ?>
