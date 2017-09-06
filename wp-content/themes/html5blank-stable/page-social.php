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
					<div class="col-sm-6 _socialright">
					<h3 class="h3social">Teeba on Instagram</h3><i class="fa fa-instagram fasocialpos"></i>
						<iframe src="http://instaembedder.com/gallery-v2.php?width=440&cols=1&rows=5&margin=8&color=gray&likes=1&share_buttons=1&comments=1&date=1&link=1&frame=1&image_border=8&frame_color=white&cid=5677&" style="margin-top:34px;" scrolling='yes' frameborder="0" width="100%" height="365" ></iframe>
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
				<div class="col-sm-6 _socialright">
					<h3 class="h3social">Teeba on Instagram</h3><i class="fa fa-instagram fasocialpos"></i>
						<iframe src="http://instaembedder.com/gallery-v2.php?width=440&cols=1&rows=5&margin=8&color=gray&likes=1&share_buttons=1&comments=1&date=1&link=1&frame=1&image_border=8&frame_color=white&cid=5677&" style="margin-top:34px;" scrolling='yes' frameborder="0" width="100%" height="365" ></iframe>
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
				<div class="col-sm-6 _socialright">
					<h3 class="h3social">Almarai on Instagram</h3><i class="fa fa-instagram fasocialpos"></i>
						<iframe src="http://instaembedder.com/gallery-v2.php?width=440&cols=1&rows=5&margin=8&color=gray&likes=1&share_buttons=1&comments=1&date=1&link=1&frame=1&image_border=8&frame_color=white&cid=5677&" style="margin-top:34px;" scrolling='yes' frameborder="0" width="100%" height="365" ></iframe>
					</div>
				</div>
				<!-- 	</div> -->
				<!-- </div> -->
		
		<!-- section end -->	

<?php get_footer(); ?>
