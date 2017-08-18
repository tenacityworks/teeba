<?php get_header(); 

	$_args = array(
	    'post_status'       => 'publish',
	    'post_type'         => 'brands',
	    'offset'            => 0,
	    'orderby'           => 'date',
	    'posts_per_page'    => 8,
	    'tax_query'         => array(
	    array(
	        'taxonomy'      => 'category',
	        'field'         => 'slug',
	        'terms'         => 'our-brands'
	    )),
	); 

	$brands             = new WP_Query($_args);

?>
		<!-- section start -->
		<!-- ================ -->
		<div class="spacetop-pages"></div>
		<div class="container">
			<h2 id="about">Our Brands</h2>	
       <?php while ($brands->have_posts()) : $brands->the_post(); ?>	
			<div  class="col-sm-12">
				<div class="brands-tabs">
				<h3><?php the_title(); ?></h3>
					<div class="col-sm-9 brands-tabs-text">
						<?php the_content(); ?>
						<div class="brands-more-dets"><button name="cv" type="submit">More Details</button></div>
					</div>
					<div class="col-sm-3 brands-tabs-image">
						<div class="brands">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
					<!-- <div class="brands-more-dets"><button name="cv" type="submit">More Details</button></div> -->
				</div>
			</div>
		<?php endwhile; 
              wp_reset_query(); ?>

	</div>
		
		<!-- section end -->	

<?php get_footer(); ?>