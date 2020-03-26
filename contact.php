	<?php 
		$contact = "active";
		include "public/header.php";
	?>
	<!-- banner-slider -->
	<div class="w3ls_banner_section second">
	  
     </div>
	<!-- banner-slider -->
	<!-- breadcrumbs -->
	<div class="w3l_agileits_breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="index.html">Home</a><span>«</span></li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

			<!--/story-->
				<div class="w3l_inner_section">
					<div class="container">
						   <div class="wthree_title_agile">
						        <h3>Contact <span>Us</span></h3>
								<p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
								
							</div>
						 <p class="sub_para">FIND OUR LOCATION</p>
						 <div class="inner_w3l_agile_grids">
						       <div class="w3ls_footer_grid">
									<div class="col-md-4 w3ls_footer_grid_left">
										<div class="w3ls_footer_grid_leftl">
											<i class="fa fa-map-marker" aria-hidden="true"></i>
										</div>
										<div class="w3ls_footer_grid_leftr">
											<h4>Location</h4>
											<p>3030 New York, NY, USA</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="col-md-4 w3ls_footer_grid_left">
										<div class="w3ls_footer_grid_leftl">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
										<div class="w3ls_footer_grid_leftr">
											<h4>Email</h4>
											<a href="mailto:info@example.com">info@example.com</a>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="col-md-4 w3ls_footer_grid_left">
										<div class="w3ls_footer_grid_leftl">
											<i class="fa fa-phone" aria-hidden="true"></i>
										</div>
										<div class="w3ls_footer_grid_leftr">
											<h4>Call Us</h4>
											<p>(+000) 003 003 0052</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="clearfix"> </div>
								</div>
                               <div class="w3_mail_grids">
										<form action="#" method="post">
											<div class="col-md-6 w3_agile_mail_grid">
													<input type="text" placeholder="Your Name"  required="">
													<input type="email" placeholder="Your Email" required="">
													<input type="text" placeholder="Your Phone Number" required="">

												
											</div>
											<div class="col-md-6 w3_agile_mail_grid">
												<textarea name="Message" placeholder="Your Message" required=""></textarea>
												<input type="submit" value="Submit">
											</div>
											<div class="clearfix"> </div>
										</form>
							</div>
					   </div>
							<div class=" map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12947831.742778081!2d-95.665!3d37.599999999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1422444552833"></iframe>
							</div>
						</div>
					</div>
					

			<!--//story-->


<!-- footer -->
<?php include './public/footer.php';?>
<!-- footer -->

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script><!-- Required-js -->
	<script src="js/bootstrap.min.js"></script><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
	<!-- //here ends scrolling icon -->	
</body>
</html>