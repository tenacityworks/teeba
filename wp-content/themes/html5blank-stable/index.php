<?php get_header(); ?>
<style type="text/css">

h3 {
	background-color: #003366; 
	color: #FFFFFF; 
	margin-bottom: 0px;
	font-size: 20px; 
	height: 52px; 
	text-align: left;
  	display: flex;
  	justify-content: left;
  	align-items: center;
  	padding-left: 5px;
}
	
</style>


<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>Your Health is the World</h1>
            <p>Our mission is providing high quality and nutritious<br>
            foods and beverages to consumers.</p>
            <button type="button" class="btn btn-lg btn-primary" disabled>Discover more</button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-7">
        <h3>Discover Our Trademarks</h3>
            <img style="height: 300px; width: 100%" src="<?php echo get_template_directory_uri(); ?>/img/front_/discover.png" class="img-responsive" alt="Cabin">
        </div>
        <div class="col-sm-5">
        <h3>Visit Us</h3>
            <img style="height: 300px; width: 100%" src="<?php echo get_template_directory_uri(); ?>/img/front_/visitus.png" class="img-responsive" alt="Slice of cake">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
        <h3>Teeba on Facebook</h3>
            <img style="height: 300px; width: 100%" src="<?php echo get_template_directory_uri(); ?>/img/front_/social.png" class="img-responsive" alt="Cabin">
        </div>
        <div class="col-sm-6">
        <h3>Teeba on Instagram</h3>
            <img style="height: 300px; width: 100%" src="<?php echo get_template_directory_uri(); ?>/img/front_/social.png" class="img-responsive" alt="Slice of cake">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
        <h3>Almarai on Facebook</h3>
            <img style="height: 300px; width: 100%" src="<?php echo get_template_directory_uri(); ?>/img/front_/social.png" class="img-responsive" alt="Cabin">
        </div>
        <div class="col-sm-6">
        <h3>Almarai on Instagram</h3>
            <img style="height: 300px; width: 100%" src="<?php echo get_template_directory_uri(); ?>/img/front_/social.png" class="img-responsive" alt="Slice of cake">
        </div>
    </div>
</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
