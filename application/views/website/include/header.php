
<!DOCTYPE HTML>
<html>
<head>
<title>Portfolio</title>
<link href="<?php echo base_url();?>assets/site/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/site/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/site/css/bootstrap-social.css">
<link href="<?php echo base_url();?>assets/site/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php echo base_url();?>assets/site/js/jquery-1.9.1.min.js"></script>
<!--hover-effect-->
<script src="<?php echo base_url();?>assets/site/js/hover_pack.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/site/js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>
</head>
<body>
	<!--start header-->
	
	<div class="header">
	<div class="sliding group">
	  <div class="header-top">
		<div class="container">
			<div class="logo">
			  <a href="<?php echo base_url('HomeController');?>"><img src="<?php echo base_url();?>assets/site/images/logo.png" alt="" style="height: 80px;" /></a>
			</div>
			<div class="menu">
			  <a class="toggleMenu" href="#"><img src="<?php echo base_url();?>assets/site/images/nav_icon.png" alt="" /></a>
				<ul class="nav" id="nav">
				   <li><a href="<?php echo base_url('HomeController');?>" >Home</a></li>
				   	<li><a href="<?php echo base_url('HomeController/AboutAction');?>" >About</a></li> 
				   <li><a href="<?php echo base_url('HomeController/ContactAction');?>">Contact</a></li>								
				   <div class="clear"></div>
			    </ul>
			</div>			

	        <div class="clear"></div>
	      </div>
		 </div>
	</div>
	</div>
	</div>
	

