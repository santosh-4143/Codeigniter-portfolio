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
                          <h2><strong>Name -  <?php echo $view[0]['name'];?></strong></h2>
                        </div>
                      </div>
                      <br><br>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4><p> Email - <?php echo $view[0]['email'];?> </p></h4>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <h5>Date - <?php echo $view[0]['date'];?></h5>
                      </div>
                      <br><br>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4><p>Message - <?php echo $view[0]['message'];?> </p></h4>
                      </div>
                      <br><br><br><br><br><br>
                      <a href="<?php echo base_url('Admin/ViewAllMessagesAction').'/'.$view[0]['id'];?>" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Previous Page</a>
                    </div>
                  </div>
                </div>



            </div>
           </div>
          </div>
<?php $this->load->view('admin/include/footer'); ?>
