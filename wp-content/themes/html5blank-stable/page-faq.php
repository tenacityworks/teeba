<?php get_header(); ?>
		<!-- section start -->
		<!-- ================ -->
		<?php $faqs 					= @get_field("faq"); ?>
		<div class="spacetop-pages"></div>
		<div class="container">
			<h2 id="about">FAQ</h2>	
			<div class="col-sm-12">
			<?php foreach ($faqs as $key => $faq){  ?>
				<div class="faq">
					<h3><?php echo $faq["question"]; ?></h3>
						<?php echo $faq["answer"]; ?>
				</div>
			<?php } ?>
			</div>
		</div>
		
		<!-- section end -->	

<?php get_footer(); ?>