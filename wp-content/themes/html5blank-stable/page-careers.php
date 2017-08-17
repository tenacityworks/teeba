<?php get_header(); ?>
		<!-- section start -->
		<!-- ================ -->
		<div class="spacetop-pages"></div>
		<div class="container">
			<h2 id="about">Careers</h2>		
			<div class="col-sm-8 ">
				<div class="why-teeba">
				<h3>Why Teeba</h3>
					<p style="margin-left: -15px;">There are so many reasons you will want to join the Teeba family, since we offer all you look for in a future position by:</p>
					<p style="padding: 10px;">
						1. Providing equal employment opportunities for all members of the society.<br>
						2. Treating all employees fairly and with respect and giving them clear career development opportunities.<br>
						3. Creating a work environment which appreciates hard work and encourages passion.<br>
						4. Exposing our employees to distinctive models of success through our strategic partnership with Almarai and Pepsico.<br>
					</p>
				</div>	
			</div>
			<div class="col-sm-4">
				<div class="join-us">
					<h3>Join Us</h3>
						<p>If you would like to join our Teeba family, upload your CV here.</p>
					<form method="post" enctype="multipart/form-data" action="">
						<div class="join-us-name"><input type="text" name="name" placeholder="Your Name"></div>
						<div class="join-us-email"><input type="text" name="email" placeholder="Your Email"></div>
						<div class="join-us-upload"><span id="filename">UPLOAD YOUR CV</span>
    					<label for="file-upload">BROWSE<input type="file" id="file-upload"></label></div>
						<div class="join-us-send-cv"><button name="cv" type="submit">SEND CV</button></div>
					</form>
				</div>
			</div>

		</div>
		
		<!-- section end -->	

<?php get_footer(); ?>
