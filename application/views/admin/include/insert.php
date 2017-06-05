<?php $this->load->view('admin/include/header'); ?>

<div class="right_col" role="main">
	 <div class="page-title">
              <div class="title_left">
                <h3>Add New Image</h3>
              </div>

              <div class="title_right"></div>

               <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>Form Design <small>different form elements</small></h2> -->
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <?php echo form_open_multipart('Admin/InsertImageAction',['class'=>'form-horizontal form-label-left','id'=>'demo-form2']);?>
              

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="image_title" class="form-control col-md-7 col-xs-12" value="<?php echo set_value('image_title');?>">
                          <span style="color:red"><?php echo form_error('image_title'); ?></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Category <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="img_category" class="form-control">
                            <option value="none">Choose option</option>
                            <option value="Sketch">Sketch</option>
                            <option value="Painting">Painting</option>
                            <option value="Oil Painting">Oil Painting</option>
                            <option value="Glass Painting">Glass Painting</option>
                            <option value="Others">Others</option>
                          </select>
                          <span style="color:red"><?php echo form_error('img_category'); ?></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="description" rows="5" cols="50" class="form-control col-md-7 col-xs-12"><?php echo set_value('description'); ?></textarea>
                          <span style="color:red"><?php echo form_error('description'); ?></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photoupload">Upload Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="userfile">
                          <span style="color:red"><?php echo $error;?></span>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                  
                    <?php echo form_close();?>
                  </div>
                </div>
              </div>
            </div>
            </div>


<?php $this->load->view('admin/include/footer'); ?>