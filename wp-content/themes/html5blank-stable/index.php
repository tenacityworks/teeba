
<?php /* Template Name: Template - Home Page */ 
 get_header(); ?>
		<!-- section start -->
		<!-- ================ -->
		<div class="spacetop"></div>
				<div class="row">
					<div class="col-sm-12">
						<h1 id="about" class="title text-center">Your Health is the World</h1>
						<p class="lead text-center headerhome">Our mission is providing high quality and nutritious<br>
foods and beverages to consumers.</p>
						<div class="space"></div>
						<button type="button" class="btn btn-primary btn-lg fontbarmeno">Discover More</button>
						<div class="spacebottombutton"></div>
					</div>
				</div>
					
						<div class="row">
							<div class="col-sm-7 trademarks">
							<h3 class="h3discover">Discover Our Trademarks</h3>
								<!-- <img src="images/section-image-1.png" alt=""> -->
								<div class="row">
									<div class="col-sm-6">
										<div class="tropicana">
											<h4>Tropicana</h4>
											<p>A range of fresh and long-life juices in<br>
												different flavors.<br>
											<a href="/">Discover more</a></p>
										</div>
									</div>
									<div class="col-sm-6">
										<img class="imgdiscover" src="/wp-content/themes/html5blank-stable/img/discoverus_image.png">
									</div>
								</div>

								<!--slider -->
								<div class='row'>
								<hr class="hrlook">
									<div class='col-sm-12 slider_fp'>
									  <div class="carousel slide media-carousel" id="recommendations">
									    <div class="carousel-inner sliderheight">
									      <div class="item  active">
									        <div class="row">
									          <div class="col-md-3 col-sm-6">
									            <a href="#"><img alt="" src="/wp-content/themes/html5blank-stable/img/front_slider.png"></a>
									          </div>          
									          <div class="col-md-3 col-sm-6">
									            <a href="#"><img alt=""  src="/wp-content/themes/html5blank-stable/img/front_slider.png"></a>
									          </div>
									          <div class="col-md-3 col-sm-6">
									            <a href="#"><img alt=""  src="/wp-content/themes/html5blank-stable/img/front_slider.png"></a>
									          </div>
									          <div class="col-md-3 col-sm-6">
									            <a href="#"><img alt="" src="/wp-content/themes/html5blank-stable/img/front_slider.png"></a>
									          </div>            
									        </div>
									      </div>
									      <div class="item">
									        <div class="row">
									          <div class="col-md-3 col-sm-6">
									            <a href="#"><img alt="" src="/wp-content/themes/html5blank-stable/img/front_slider.png"></a>
									          </div>          
									          <div class="col-md-3 col-sm-6">
									            <a href="#"><img alt=""  src="/wp-content/themes/html5blank-stable/img/front_slider.png"></a>
									          </div>
									          <div class="col-md-3 col-sm-6">
									            <a href="#"><img alt=""  src="/wp-content/themes/html5blank-stable/img/front_slider.png"></a>
									          </div>
									          <div class="col-md-3 col-sm-6">
									            <a href="#"><img alt="" src="/wp-content/themes/html5blank-stable/img/front_slider.png"></a>
									          </div>            
									        </div>
									      </div>
									    </div>
									    <a data-slide="prev" href="#recommendations" class="aleft"><i class="fa fa-angle-left faSize" aria-hidden="true"></i></a>
									    <a data-slide="next" href="#recommendations" class="aright"><i class="fa fa-angle-right faSize" aria-hidden="true"></i></a>
									  </div>                          
									</div>
								</div>
					<!-- /slider -->
							</div>
					<!-- /Discover Us -->

					<!-- Visit Us -->
					<?php $map = @get_field("map_area");?>
							<div class="col-sm-5 visitus">
								<h3 class="h3visit">Visit Us</h3>
									<?php $map; ?> 
							</div>
					<!-- /Visit Us -->
						</div>
					<!--Teeba Social -->
		<?php 	$fb 	= @get_field("teeba_facebook"); 
		 		$inst 	= @get_field("teeba_twitter"); ?>
						<div class="row">
							<div class="col-sm-6 _socialleft">
							<h3 class="h3social">Teeba on Facebook</h3><i class="fa fa-facebook-square fasocialpos"></i>
							<?php echo $fb; ?>
								<!-- <div class="overlaysocial">
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
								<!-- <div class="overlaysocial">
									<p>telah melonjak ke era typesetting elektronik, dengan tiada perubahan ketara. Ia telah dipopularkan pada tahun 1960an dengan penerbitan </p>
								</div> -->
							</div>
							<div class="col-sm-6 _socialright">
							<h3 class="h3social">Almarai on Instagram</h3><i class="fa fa-instagram fasocialpos"></i>
								<iframe src="http://instaembedder.com/gallery-v2.php?width=440&cols=1&rows=5&margin=8&color=gray&likes=1&share_buttons=1&comments=1&date=1&link=1&frame=1&image_border=8&frame_color=white&cid=5677&" style="margin-top:34px;" scrolling='yes' frameborder="0" width="100%" height="365" ></iframe>
							</div>
						</div>
					<!-- </div> -->
				<!-- </div> -->
		
		<!-- section end -->	

	<script type="text/javascript">
		$(document).ready(function() {
		  $('#recommendations').carousel({
		    pause: true,
		    interval: false,
		  });
		});
	</script>

<?php get_footer(); ?>
