<?php $this->load->view('admin/include/header'); ?>

<div class="right_col" role="main">
    <div class="">
     <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Service Holder <small>Details</small></h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Image Title</th>
                        <th>Image Category</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    
                    <tbody>
                      <?php 
                            $i=1;
                            foreach($view as $value){ ?> 
                        <tr>
                            <td><?php echo $i; $i++;?></td>
                            <td><?php echo $value['img_title']?></td>
                            <td><?php echo $value['img_category']; ?></td>
                             <td>
                                 <?php if($value['is_deleted']==1){ ?>
                                    <span class="label label-danger">Deleted</span>
                                <?php } ?>
                                <?php if($value['is_deleted']==0){ ?>
                                    <span class="label label-success">Active</span>
                                <?php } ?>
                                 
                            </td>
                            <td><?php echo $value['created_at']; ?></td>
                            <td>
                                 <a href="<?php echo base_url('Admin/ViewImageDetailsByID').'/'.$value['id']; ?>"><img src="<?php echo base_url(); ?>assets/admin/images/view.png" title="View"></a>
                                 <a href="<?php echo base_url('Admin/UpdateImageDetailsByID').'/'.$value['id']; ?>"><img src="<?php echo base_url(); ?>assets/admin/images/edit.png" title="Edit"></a>
                                 <a href="<?php echo base_url('Admin/DeleteImageDetailsByID').'/'.$value['id']; ?>"><img src="<?php echo base_url(); ?>assets/admin/images/delete.png" title="Delete"></a>
                            </td>
                        </tr>
                        

                         <?php } ?>

                    </tbody>
                    
                  </table>
                   
                </div>
              </div>
            </div>
           </div>
          </div>
   
    
    

<?php $this->load->view('admin/include/footer'); ?>
