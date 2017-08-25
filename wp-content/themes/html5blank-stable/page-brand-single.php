<?php /* Template Name: Template - Brand Single */ ?>

<?php get_header();

	$cat = "7-days-products";

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
        'terms'         => $cat
    )),
); 

$products             = new WP_Query($_args);?>

		<!-- section start -->
		<!-- ================ -->
	<div class="spacetop-pages"></div>
	<div class="container">
	<h3 style="width: 935px;">Swiss Roll</h3>
		<div class="col-sm-12">
			<div class="product-items">
				<div class="col-sm-6 details">
					<div class="col-sm-12">
						<div class="col-sm-6"><!-- Product Details 1 -->
						<h4>Fresh Milk</h4>
						<p>Available sizes<br>
						1l<br>
						180ml
						</p>
							
						</div><!-- /Product Details 1 -->
						<div class="col-sm-6"><!-- Product Image 1 -->
							<div>
								<img style="width: 100%; height: auto;" src="/wp-content/uploads/2017/08/7days_TOFFEE-CROISSANT.png">
							</div>
						</div><!-- /Product Image 1 -->
					</div>
				</div>
				<div class="col-sm-6 details">
					<div class="col-sm-12">
						<div class="col-sm-6"><!-- Product Details 2 -->
						<h4>Strawberry Swiss Roll</h4>
						<p>Available sizes<br>
						2l<br>
						950ml
						</p>							
						</div><!-- /Product Details 2 -->
						<div class="col-sm-6"><!-- Product Image 2 -->
						  <div class="carousel slide" id="product2">
						    <div class="carousel-inner sliderheight">
						      <div class="item  active">
						        <div class="row">
						          <div class="products-carousel">
						            <a href="#"><img style="width: 100%; height: auto;" alt="" src="/wp-content/uploads/2017/08/7Days_CHOCOLATE.png"></a>
						          </div>                     
						        </div>
						      </div>
						      <div class="item">
						        <div class="row">
						          <div class="products-carousel">
						            <a href="#"><img style="width: 100%; height: auto;" alt="" src="/wp-content/uploads/2017/08/7days_TOFFEE-CROISSANT.png"></a>
						          </div>                     
						        </div>
						      </div>
						    </div>
						    <a data-slide="prev" href="#product2" class="aleft-products"><i class="fa fa-angle-left faSize-products" aria-hidden="true"></i></a>
						    <a data-slide="next" href="#product2" class="aright-products"><i class="fa fa-angle-right faSize-products" aria-hidden="true"></i></a>
						  </div>                          
						</div><!-- /Product Image 2 -->
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="product-items">
				<div class="col-sm-6 details">
					<div class="col-sm-12">
						<div class="col-sm-6"><!-- Product Details 1 -->
						<h4>Chocolate Swiss Roll</h4>
						<p>Energy 66 Kcal Protein 1g Carbohydrate 11g of which sugar 8g. Total fat 2g of which saturated fat 0.5g. Cholesterol 0mg, Fibers 0g Sodium 28mg</p>	
						</div><!-- /Product Details 1 -->
						<div class="col-sm-6"><!-- Product Image 1 -->
							<div>
								<img style="width: 100%; height: auto;" src="/wp-content/uploads/2017/08/7days_TOFFEE-CROISSANT.png">
							</div>
						</div><!-- /Product Image 1 -->
					</div>
				</div>
				<div class="col-sm-6 details">
					<div class="col-sm-12">
						<div class="col-sm-6 "><!-- Product Details 2 -->
						<h4>Vanilla Swiss Roll</h4>
						<p>Energy 66 Kcal Protein 1g Carbohydrate 11g of which sugar 8g. Total fat 2g of which saturated fat 0.5g. Cholesterol 0mg, Fibers 0g Sodium 28mg</p>	
						</div><!-- /Product Details 2 -->
						<div class="col-sm-6"><!-- Product Image 2 -->
							<div>
								<img style="width: 100%; height: auto;" src="/wp-content/uploads/2017/08/7Days_CHOCOLATE.png">
							</div>
						</div><!-- /Product Image 2 -->
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="product-items">
				<div class="col-sm-6 details">
					<div class="col-sm-12">
						<div class="col-sm-6"><!-- Product Details 1 -->
						<h4>Cappuccino Swiss Roll</h4>
						<p>Energy 66 Kcal Protein 1g Carbohydrate 11g of which sugar 8g. Total fat 2g of which saturated fat 0.5g. Cholesterol 0mg, Fibers 0g Sodium 28mg</p>	
						</div><!-- /Product Details 1 -->
						<div class="col-sm-6"><!-- Product Image 1 -->
						  <div class="carousel slide" id="product1">
						    <div class="carousel-inner sliderheight">
						      <div class="item  active">
						        <div class="row">
						          <div class="products-carousel">
						            <a href="#"><img style="width: 100%; height: auto;" alt="" src="/wp-content/uploads/2017/08/7Days_CHOCOLATE.png"></a>
						          </div>                     
						        </div>
						      </div>
						      <div class="item">
						        <div class="row">
						          <div class="products-carousel">
						            <a href="#"><img style="width: 100%; height: auto;" alt="" src="/wp-content/uploads/2017/08/7days_TOFFEE-CROISSANT.png"></a>
						          </div>                     
						        </div>
						      </div>
						    </div>
						    <a data-slide="prev" href="#product1" class="aleft-products"><i class="fa fa-angle-left faSize-products" aria-hidden="true"></i></a>
						    <a data-slide="next" href="#product1" class="aright-products"><i class="fa fa-angle-right faSize-products" aria-hidden="true"></i></a>
						  </div>                          
						</div><!-- /Product Image 1 -->
					</div>
				</div>
				<div class="col-sm-6 details">
					<div class="col-sm-12">
						<div class="col-sm-6 "><!-- Product Details 2 -->
						<h4>Flavored Long Life Milk (NIjoom)</h4>
						<p>Energy 66 Kcal Protein 1g Carbohydrate 11g of which sugar 8g. Total fat 2g of which saturated fat 0.5g. Cholesterol 0mg, Fibers 0g Sodium 28mg</p>	
						</div><!-- /Product Details 2 -->
						<div class="col-sm-6"><!-- Product Image 2 -->
							<div>
								<img style="width: 100%; height: auto;" src="/wp-content/uploads/2017/08/7days_TOFFEE-CROISSANT.png">
							</div>
						</div><!-- /Product Image 2 -->
					</div>
				</div>
			</div>
		</div>
	</div>
		
		<!-- section end -->	

<?php get_footer(); ?>