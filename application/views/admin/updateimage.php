<?php $this->load->view('admin/include/header'); ?>

<div class="right_col" role="main">
<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Update Image Details</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
               
               <?php echo form_open_multipart('Admin/UpdateImageDetailsById',['id'=>'demo-form2','class'=>'form-horizontal form-label-left']); ?>
                      <div class="form-group">
                      <input type="hidden" value="<?php echo $view[0]['id'];?>" name="inputid">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="img_title" value="<?php echo $view[0]['img_title']; ?>" class="form-control col-md-7 col-xs-12">
                          
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Category <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="img_category">
                            <option ><?php echo $view[0]['img_category'];?></option>
                            <option value="sketch" <?php echo set_select('img_category', 'Sketch'); ?>>Sketch</option>
                            <option value="Oil Painting" <?php echo set_select('img_category', 'Oil Painting'); ?>>Oil Painting</option>
                            <option value="Glass Painting" <?php echo set_select('img_category', 'Glass Painting'); ?>>Glass Painting</option>
                            <option value="Others" <?php echo set_select('img_category', 'Others'); ?>>Others</option>
                          </select>
                          
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="description" rows="4" class="form-control col-md-7 col-xs-12"><?php echo $view[0]['description']; ?></textarea>
                          
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Image<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="userfile">
                          
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
