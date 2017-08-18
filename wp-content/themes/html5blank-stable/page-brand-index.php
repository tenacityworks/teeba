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
				<div>
					<?php the_post_thumbnail(); ?>
				</div>
			</div>
		<?php endwhile;?>
		</div>
	</div>

	<h4>Products</h4>
	<div class="col-sm-12">
		<div class="brands-tabs">
		<a href="<?php the_permalink(39); ?>"><h3>Dairy Liquids</h3>
			<div class="col-sm-9 brands-tabs-text">
				<p style="padding: 15px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
				dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
				ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
				nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
				anim id est laborum."<div class="brands-more-dets"><button name="cv" type="submit">View Products</button></div></p>

			</div>
			<div class="col-sm-3 brands-tabs-image">
				<div class="brand-desc">
					<img style="width: 100%; height: auto;" src="/wp-content/uploads/2017/08/7days_SWISS-ROLL-VANILLA.png">
				</div>
			</div></a>
		</div>
	</div>


	<div class="col-sm-12">
		<div class="brands-tabs">
			<h3>Food</h3>
				<div class="col-sm-9 brands-tabs-text">
					<p style="padding: 15px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
					dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
					ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
					nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
					anim id est laborum."<div class="brands-more-dets"><button name="cv" type="submit">View Products</button></div></p>

				</div>
				<div class="col-sm-3 brands-tabs-image">
					<div class="brand-desc">
						<img style="width: 100%; height: auto;" src="/wp-content/uploads/2017/08/7days_SWISS-ROLL-VANILLA.png">
					</div>
				</div>
			</div>
		</div>
	</div>
		
		<!-- section end -->	

<?php get_footer(); ?>