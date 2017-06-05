<?php $this->load->view('admin/include/header'); ?>

<div class="right_col" role="main">
    <div class="">
     <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Inbox <small>Details</small></h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
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
                            <td><?php echo $value['name']?></td>
                            <td><?php echo $value['email']; ?></td>
                             <td><?php echo $value['message']; ?></td>
                            <td><?php echo $value['date']; ?></td>
                            <td>
                                 <a href="<?php echo base_url('Admin/ViewMessageByID').'/'.$value['id']; ?>"><img src="<?php echo base_url(); ?>assets/admin/images/view.png" title="View"></a>
                                 <a href="<?php echo base_url('Admin/DeleteInboxMessageByID').'/'.$value['id']; ?>"><img src="<?php echo base_url(); ?>assets/admin/images/delete.png" title="Delete"></a>
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
