<?php
  $page_id = 5;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Head file -->
	<?php include dirname(__file__).'/inc/head.php' ?>
	<!-- End of the Head file -->
</head>
<body>
	
		<!-- Header Start -->
		<?php include dirname(__file__).'/inc/header.php' ?>
		<!-- End of the header -->



		

		<!-- Main Section of Home page -->
		<!-- section 1 -->
		<section class="contact-1">
			<div class="uk-container tm-sec2 uk-container-center">
				<div class="uk-grid">
					<div class="uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1 uk-text-center">
						<h2 class="tmcontact" style="color: rgba(255,255,255,1); text-shadow: 2px 2px 2px #333; background: rgba(232,167,3,1); padding: 10px; border-radius: 5px;">Get In Touch</h2><br/>
						<form class="tmform">
						  <div class="input-group">
						    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						    <input id="name" type="text" class="form-control" name="name" placeholder="Name" required="">
						  </div>
						  <div class="input-group">
						    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <label for="comment">Comment:</label>
						    <textarea class="form-control" rows="5" id="comment"></textarea>
						  </div>
						  <div class="input-group">
						     <button class="btn btn-success">Submit</button>
						   </div>
						</form>
					</div>
				</div>
			</div>
		</section>
		
		<!-- End of the Section1 -->

		<div class="uk-grid">
			<div class="uk-width-large-1-1 uk-width-large-1-1 uk-width-large-1-1 uk-text-center">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.0911643035915!2d78.38003731425206!3d17.40741210681054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90d2cb502293%3A0xdfb4daa3fb349da3!2sIllusionz+Media+India+Private+Limited!5e0!3m2!1sen!2sin!4v1518441158456" width="600" height="450" frameborder="0" style="border:1px solid grey;" allowfullscreen></iframe>
				</div>
			</div>
		</div>


		<!-- End of the Main Section -->



		<!-- Main Footer here -->
		<?php include dirname(__file__).'/inc/mainfooter.php' ?>
		<!-- End of the Footer -->	



		<!-- Footer Link file here -->
		<?php include dirname(__file__).'/inc/footer.php' ?>
		<!-- End of the Footer -->
</body>
</html>