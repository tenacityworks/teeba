<?php get_header(); ?>
		<!-- section start -->
		<!-- ================ -->
		<div class="spacetop-pages"></div>
		<div class="container">
			<div class="col-sm-12">
				<h2 id="about">Contact</h2>		
				<div class="col-sm-5 ">
					<div class="our-vision">
					<h3>Our Vision</h3>
						<p>P.O. Box 35076<br>
							Amman 11180<br>
							Jordan<br> 
							Tel.: +962 6 4290868<br>
							Fax: +962 6 4290862 038
						</p>
					</div>	
				</div>
				<?php $map = @get_field("map_area");?>
				<div class="col-sm-7">
					<div class="contact-map">
						<h3>Visit Us</h3>
						<?php echo $map; ?> 
					</div>
				</div>
			</div>
		</div>
		
		<!-- section end -->	

<?php get_footer(); ?>
