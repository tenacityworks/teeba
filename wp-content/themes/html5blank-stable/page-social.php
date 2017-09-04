<?php get_header(); ?>
		<!-- section start -->
		<!-- ================ -->
		<?php 	$fb 	= @get_field("teeba_facebook"); 
		 		$inst 	= @get_field("teeba_twitter"); ?>
		<div class="spacetop-pages"></div>
				<div class="row">
					<h2 id="about" class="title">Social Media</h2>
				</div>
					
			<!--Teeba Social -->
				<div class="row">
					<div class="col-sm-6 _socialleft">
					<h3 class="h3social">Teeba on Facebook</h3><i class="fa fa-facebook-square fasocialpos"></i>
						<?php echo $fb;

						/* do_shortcode('[facebook-pagelike href="facebook" width="500" height="365" tabs="timeline, events, messages" small_header="false" align="left" hide_cover="false" show_facepile="false"]'); */

						?>
					</div>
					<div class="col-sm-6 _socialright" style="padding-top: 40px;">
					<h3 class="h3social" style="margin-top: -40px;">Teeba on Instagram</h3><i class="fa fa-instagram fasocialpos"></i>
						<?php echo $inst;
						// do_shortcode('[twitter-timeline user_name="TwitterDev" min_width="480" height="365" follow_button="true" data_show_count="true" data_show_screen_name="true" data_size="large" data_link_color="#365899"]'); 
						?>
					</div>
				</div>
			<!-- /Teeba Social -->
			<!--Teeba Social -->
				<div class="row">
					<div class="col-sm-6 _socialleft">
					<h3 class="h3social">Teeba on Facebook</h3><i class="fa fa-facebook-square fasocialpos"></i>
					<?php echo $fb; ?>
<!-- 						<div class="overlaysocial">
							<p>Lorem Ipsum adalah text contoh digunakan didalam industri pencetakan dan typesetting.</p> 
						</div>	 -->
					</div>
				<div class="col-sm-6 _socialright" style="padding-top: 40px;">
					<h3 class="h3social" style="margin-top: -40px;">Teeba on Instagram</h3><i class="fa fa-instagram fasocialpos"></i>
					<?php echo $inst; ?>

<!-- 						<div class="overlaysocial">
							<p>sebuah galeri cetak dan merobakanya menjadi satu buku spesimen. Ia telah bertahan bukan hanya selama lima kurun, tetapi</p>
						</div> -->
					</div>
				</div>
			<!-- /Teeba Social -->
				<div class="row">
					<div class="col-sm-6 _socialleft">
					<h3 class="h3social">Almarai on Facebook</h3><i class="fa fa-facebook-square fasocialpos"></i>
					<?php echo $fb; ?>
<!-- 						<div class="overlaysocial">
							<p>Lorem Ipsum adalah text contoh digunakan didalam industri pencetakan dan typesetting.</p> 
						</div>	 -->
					</div>
				<div class="col-sm-6 _socialright" style="padding-top: 40px;">
					<h3 class="h3social" style="margin-top: -40px;">Almarai on Instagram</h3><i class="fa fa-instagram fasocialpos"></i>
					<?php echo $inst; ?>

<!-- 						<div class="overlaysocial">
							<p>sebuah galeri cetak dan merobakanya menjadi satu buku spesimen. Ia telah bertahan bukan hanya selama lima kurun, tetapi</p>
						</div> -->
					</div>
				</div>
				<!-- 	</div> -->
				<!-- </div> -->
		
		<!-- section end -->	

<?php get_footer(); ?>
