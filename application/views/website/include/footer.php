
	  <div class="footer-bottom">
	  	<div class="container">
	  		<ul class="footer-nav">
	  			<li><a href="<?php echo base_url('HomeController');?>">Home</a></li> |
	  			<li><a href="<?php echo base_url('HomeController/AboutAction');?>">About</a></li> |
	  			<li><a href="<?php echo base_url('HomeController/ContactAction');?>">Contact</a></li> 
	  		</ul>
	  		<div class="copy">
			    <!-- <p>© 2017 Template by <a href="#" target="_blank">wsdbusiness</a></p> -->
		    </div>
		    <div class="clear"></div>
	  	</div>
	  </div>
	  <!--end contact-->
	  <script type="text/javascript" src="<?php echo base_url();?>assets/site/js/responsive-nav.js"></script>
			<script type="text/javascript" src="<?php echo base_url();?>assets/site/js/move-top.js"></script>
			<script type="text/javascript" src="<?php echo base_url();?>assets/site/js/easing.js"></script>
			   <script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
						});
					});
				</script>

      <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>



<!-- 		<script type="text/javascript">
			$( document ).ready(function() {
				var info = 'all';
				//alert(info);
  				$.ajax({
  						type: 'POST',
  						url: '<?php //echo base_url("HomeController/ImageGallaryAction"); ?>',
  						data: {photo : info},
  						
  						success:function(data)
  						{
  							alert(data);
  						}
  				});
			});
		</script> -->



        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>
