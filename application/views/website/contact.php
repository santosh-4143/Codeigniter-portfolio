<?php $this->load->view('website/include/header'); ?>

 <!--start contact-->
	  <div class="contact" id="contact">
	  	<div class="container">
	  		<div class="row">
	  			<h3 class="m_3">Contact</h3>
	  			<div class="m_4"><span class="bottom_line"> </span></div>
	  			<?php echo form_open('HomeController/ContactAction'); ?>
				  <!-- <form method="post" action="contact-post.html"> -->
					<div class="col-md-6 commentform">
					  <p class="comment-form-author"><label for="author">Name</label>
						<input id="author" name="inputname" type="text" value="<?php echo set_value('inputname'); ?>" size="30" aria-required="true">
					  </p>
					  <span style="color:red"><?php echo form_error('inputname'); ?></span>

					   <p><label for="author">Email</label>
						<input id="author" name="inputemail" type="text" value="<?php echo set_value('inputemail'); ?>" size="30" aria-required="true">
					  </p>
					  <br>
					  <span style="color:red"><?php echo form_error('inputemail'); ?></span>

					</div>
					<div class="col-md-6 commentform_desc">
						<p class="m_13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea.</p>
	                   <div class="address">
				         <p>500 Lorem Ipsum Dolor Sit,</p>
						 <p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>support[at]snow.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				        </div>
	                 </div>
	                 <div class="clear"></div>
	                 <div class="contactform_bottom">
					   <span><label>Subject</label></span>
					   <span><textarea name="inputsubject"><?php echo set_value('inputsubject'); ?></textarea></span>
					   <br>
					   <span style="color:red"><?php echo form_error('inputsubject'); ?></span>

					   <input name="submit" type="submit" id="submit" value="Message">
				     </div>
				     <div class="col-md-6 commentform_desc1">
						<p class="m_13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea.</p>
	                   <div class="address">
				         <p>500 Lorem Ipsum Dolor Sit,</p>
						 <p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>support[at]snow.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				        </div>
	                 </div>
					<!-- </form> -->
					<?php echo form_close(); ?>
			     </div>
	  	   </div>
	  </div>

<?php $this->load->view('website/include/footer'); ?>