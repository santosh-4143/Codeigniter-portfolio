<?php $this->load->view('admin/include/header'); ?>

<div class="right_col" role="main">
    <div class="">
     <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
          


      <div class="x_panel">
                  
                  <div class="x_content">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2><strong><?php echo $view[0]['img_title'];?></strong></h2>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;  padding-right: 0px;">
                        <img src="<?php echo $view[0]['photo']; ?>" class="img-responsive" alt="">
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <h5><?php echo $view[0]['created_at'];?></h5>
                      
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4><p><?php echo $view[0]['description'];?> </p></h4>
                      </div>
                      <a href="<?php echo base_url('Admin/UpdateImageDetailsByID').'/'.$view[0]['id'];?>" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit</a>
                      
                    </div>
                  </div>
                </div>



            </div>
           </div>
          </div>
<?php $this->load->view('admin/include/footer'); ?>
