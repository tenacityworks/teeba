<?php /* Template Name: Template - Brand Index */ ?>

<?php get_header(); ?>
		<!-- section start -->
		<!-- ================ -->
		<div class="spacetop-pages"></div>
<div class="container">
	<h2 id="about"><?php the_title(); ?></h2>
	<div  class="col-sm-12">
		<div style="margin-left: -15px;">
		<h4>About <?php the_title(); ?></h4>
		<?php  while ( have_posts() ) : the_post(); ?>
			<div class="col-sm-9">
				<?php the_content(); ?>
			</div>
			<div class="col-sm-3">
				<div class="brand-main">
					<?php the_post_thumbnail(); ?>
				</div>
			</div>
		<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>

	<?php

		$brand_product_category = @get_field("brand_category");

		$_args = array(
	    'post_status'       => 'publish',
	    'post_type'         => 'products',
	    'offset'            => 0,
	    'orderby'           => 'date',
	    'posts_per_page'    => 8,
	    'tax_query'         => array(
	    array(
	        'taxonomy'      => 'category',
	        'field'         => 'slug',
	        'terms'         => $brand_product_category
	    )),
	); 

	$products             = new WP_Query($_args);?>

	<h4>Products</h4>
	<?php while ($products->have_posts()) : $products->the_post(); ?>	
	<div class="col-sm-12">
		<div class="brands-tabs">
		<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3>
			<div class="col-sm-9 brands-tabs-text">
				<?php the_content(); ?>
				<div class="brands-more-dets"><button name="cv" type="submit">View Products</button></div>
			</div>
			<div class="col-sm-3 brands-tabs-image">
				<div class="brand-desc">
					<?php the_post_thumbnail(); ?>
				</div>
			</div></a>
		</div>
	</div>
	<?php endwhile; wp_reset_query(); ?></div>
		
		<!-- section end -->	

<?php get_footer(); ?>