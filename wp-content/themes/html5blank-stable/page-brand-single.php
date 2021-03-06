<?php /* Template Name: Template - Brand Single */ ?>

<?php get_header();

$title 					= @get_field("page_title");
$cat  					= @get_field("page_category");
$cat_slug 				= @get_field("category_slug");

	$_args = array(
    'post_status'       => 'publish',
    'post_type'         => 'product_items',
    'offset'            => 0,
    'orderby'           => 'date',
    'posts_per_page'    => 8,
    'tax_query'         => array(
    array(
        'taxonomy'      => 'category',
        'field'         => 'slug',
        'terms'         => $cat_slug
    )),
); 

$products             	= new WP_Query($_args);?>

		<!-- section start -->
		<!-- ================ -->
	<div class="spacetop-pages"></div>
	<div class="row"><h2><?php echo $title;?></h2></div>	

	<div style="margin-left: -29px;" class="container">
	<h3 class="h3-single"><?php echo $cat;?></h3>

		<?php while ($products->have_posts()) : $products->the_post(); ?>
			<div class="product-items">
				<div class="details">
					<div class="col-sm-12">
						<div class="col-sm-6"><!-- Product Details 1 -->
						<h4><?php the_title(); ?></h4>
						<p><?php the_content(); ?></p>	
						</div><!-- /Product Details 1 -->
						<div class="col-sm-6"><!-- Product Image 1 -->
						<?php  $id = strtolower(str_replace(' ', '-', get_the_title())); ?>
						  <div class="carousel slide" id="<?php echo $id; ?>">
						    <div class="carousel-inner sliderheight">
						    <?php 	$items = @get_field("product");
						    		$item_count = count($items); 
						    		foreach ($items as $key => $item) {						    		
						    ?>
						      <div class="item <?php if($key == 0){?>active<?php } ?>">
						        <div class="row">
						          <div class="products-carousel">
						            <a href="#"><img style="width: 100%; height: auto;" alt="" src="<?php echo $item['product_image']; ?>"></a>
						          </div> 
						          <div class="image-desc"><?php echo $item['flavour_name']; ?></div>                    
						        </div>
						      </div>
						      <?php } ?>
						    </div>
						    <?php if ($item_count > 1 ) { ?>
						    <a data-slide="prev" href="#<?php echo $id; ?>" class="aleft-products"><i class="fa fa-angle-left faSize-products" aria-hidden="true"></i></a>
						    <a data-slide="next" href="#<?php echo $id; ?>" class="aright-products"><i class="fa fa-angle-right faSize-products" aria-hidden="true"></i></a>
						    <?php } ?>
						  </div>                          
						</div><!-- /Product Image 1 -->
					</div>
				</div>
			</div>
		<?php endwhile; wp_reset_query(); ?>



		</div>


		
		<!-- section end -->	

<?php get_footer(); ?>