<?php $this->load->view('website/include/header'); ?>


<div class="single">
	  <div class="container">
	  	<h3><?php echo $view[0]['img_title'];?></h3>
	  	 <div class="extra">
		   <time pubdate=""><?php  $dates = $view[0]['created_at']; 
		   	
			$newDate = date("jS/F/Y", strtotime($dates));
			echo $newDate;
		   ?>
		   </time>
		 </div>
		<img src="<?php echo base_url().'/uploads/'.$view[0]['photo']; ?>" class="img-responsive" alt=""/>
		<p><?php  echo $view[0]['description'];?></p>
		 
		</div>
	</div>

<?php $this->load->view('website/include/footer'); ?>
