<?php $this->load->view('website/include/header'); ?>


	 <!--start portfolio-->
	 <div class="Portfolio1" id="portfolio">
		<div class="container"> 
			    <div class="portfolio_top">
					<div class="portfolio_left">
					</div>
					<ul id="filters" class="clearfix">
						<li id="all"><span class="filter active" data-filter="sketch oil_painting glass_painting others web">All</span></li>
						<li id="sketch"><span class="filter" data-filter="sketch">Sketch</span></li>
						<li id="oil_painting"><span class="filter" data-filter="oil_painting">Oil Piantings</span></li>
						<li id="glass_painting"><span class="filter" data-filter="glass_painting">Glass Paintings</span></li>
						<li id="others"><span class="filter" data-filter="others">Others</span></li>
					</ul>
				    <div class="clear"></div>
			    </div>
				<div id="portfoliolist">

				<?php foreach ($sketch as  $value) { ?>

				<div class="portfolio sketch mix_all" data-cat="sketch" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="<?php echo base_url('HomeController/ViewImageById').'/'.$value['id']; ?>" class="b-link-stripe b-animate-go  thickbox">
						     <img id=".imgcust" src="<?php echo base_url().'/uploads/'.$value['photo']; ?>"/><div class="b-wrapper" ><h2 class="b-animate b-from-left    b-delay03 "><img src="<?php echo base_url()?>assets/site/images/plus.png" alt=""/></h2>
						  	</div></a>
						</div>
					</div>	
					
				<?php	} ?>
								
							
					<?php foreach ($oil_painting as  $value) { ?>

					<div class="portfolio oil_painting mix_all" data-cat="oil_painting" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="<?php echo base_url('HomeController/ViewImageById').'/'.$value['id']; ?>" class="b-link-stripe b-animate-go  thickbox">
						     <img id=".imgcust" src="<?php echo base_url().'/uploads/'.$value['photo']; ?>" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="<?php echo base_url()?>assets/site/images/plus.png" alt=""/></h2>
						  </div></a>
		                </div>
					</div>	

					<?php	} ?>

					<?php foreach ($glass_painting as  $value) { ?>

					<div class="portfolio glass_painting mix_all" data-cat="glass_painting" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="<?php echo base_url('HomeController/ViewImageById').'/'.$value['id']; ?>" class="b-link-stripe b-animate-go  thickbox">
						     <img id=".imgcust" src="<?php echo base_url().'/uploads/'.$value['photo']; ?>" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="<?php echo base_url()?>assets/site/images/plus.png" alt=""/></h2>
						  	 </div></a>
		                </div>
					</div>	

					<?php	} ?>

					<?php foreach ($others as  $value) { ?>

					<div class="portfolio others mix_all" data-cat="others" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="<?php echo base_url('HomeController/ViewImageById').'/'.$value['id']; ?>" class="b-link-stripe b-animate-go  thickbox">
						     <img id=".imgcust" src="<?php echo base_url().'/uploads/'.$value['photo']; ?>" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="<?php echo base_url()?>assets/site/images/plus.png" alt=""/></h2>
						  	 </div></a>
		                </div>
					</div>	

					<?php }  ?>
																																											
				</div>
		  </div><!-- container -->
	   </div>

	  <div class="join">
	  	<div class="container">
	  		<div class="row">
	  			<h3 class="m_3">Follow Us</h3>
				  <div class="m_4"><span class="bottom_line"> </span></div>
	  			<div class="col-md-6 join_left">
	  			  
	  			</div>
	  			<div class="col-md-6">
	  			  
	  			  <ul class="social">	
					  <li class="twt"><a href="#"><span> </span></a></li>
					  <li class="google"><a href="#"><span> </span></a></li>
					  <li class="dribble"><a href="#"><span> </span></a></li>		
					  <li class="coffee"><a href="#"><span> </span></a></li>
				   </ul>
			    </div>
	  		</div>
	  	</div>
	  </div>

		<script type="text/javascript">
		$(document).ready(function(){
			$('#all').click(function(){
				//alert("hiii");
			});
			$('#sketch').click(function(){
				var category = "sketch";
				$("#change_category").attr("class", "portfolio sketch mix_all");
				$.ajax({
					type: 'POST',
					url : '<?php echo base_url('HomeController');?>',
					data : {category : category},
					// success:function(data) {
					// 	alert(data);
					// }
				});
			});
			$('#oil_painting').click(function(){
				var category = "oil painting";
				$("#change_category").attr("class", "portfolio oil_painting mix_all");
				$.ajax({
					type: 'POST',
					url : '<?php echo base_url('HomeController');?>',
					dataType : 'json',
					data : {category : category},
					 success:function(data) {
					 	alert(data);
						var link = "<?php echo base_url('HomeController/ViewImageById/') ?>";
						for(var i = 0; i < data.length; i++) {
	    					var obj = data[i];
	    					$('#singlelink').attr('href',link+obj.id);
	                    	$('#pic').attr('src',obj.photo);
	    				//console.log(obj.id);
						}
					 }
				});

			});

			$('#glass_painting').click(function(){
				var category = "glass painting";
				$("#change_category").attr("class", "portfolio glass_painting mix_all");
				$.ajax({
					type: 'POST',
					url : '<?php echo base_url('HomeController');?>',
					dataType : 'json',
					data : {category : category},
					success:function(data) {

						var link = "<?php echo base_url('HomeController/ViewImageById/') ?>";
						for(var i = 0; i < data.length; i++) {
	    					var obj = data[i];
	    					$('#singlelink').attr('href',link+obj.id);
	                    	$('#pic').attr('src',obj.photo);
	    				//console.log(obj.id);
						}
					}
				});
			});
			$('#others').click(function(){
				var category = "others";
				$("#change_category").attr("class", "portfolio others mix_all");
				$.ajax({
					type: 'POST',
					url : '<?php echo base_url('HomeController');?>',
					data : {category : category},
					// success:function(data) {
					// 	alert(data);
					// }
				});
			});
			
		});

		</script>


<?php $this->load->view('website/include/footer'); ?>
