		<!-- footer start -->
		<!-- ================ -->
		</div>

		<div class="space"></div>
		<footer id="footer">
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div>
								<h4 style="color: #fff; font-size: 26px;">Contact Us</h4>
								<p class="pfooter">Amman - Um Al Basatein - Airport Road<br> 
										P.O. Box 35076 Amman 11180 Jordan<br>
										Tel.: +962 6 4290868<br>
										Fax: + 962 6 4290862</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer end -->
		<?php wp_footer(); ?>
	<script type="text/javascript">
(function(window){

	// // get vars
	// var searchEl = document.querySelector("#input");
	// var labelEl = document.querySelector("#label");

	// // register clicks and toggle classes
	// labelEl.addEventListener("click",function(){
	// 	if (classie.has(searchEl,"focus")) {
	// 		classie.remove(searchEl,"focus");
	// 		classie.remove(labelEl,"active");
	// 	} else {
	// 		classie.add(searchEl,"focus");
	// 		classie.add(labelEl,"active");
	// 	}
	// });

	// // register clicks outisde search box, and toggle correct classes
	// document.addEventListener("click",function(e){
	// 	var clickedID = e.target.id;
	// 	if (clickedID != "search-terms" && clickedID != "search-label") {
	// 		if (classie.has(searchEl,"focus")) {
	// 			classie.remove(searchEl,"focus");
	// 			classie.remove(labelEl,"active");
	// 		}
	// 	}
	// });
  var $searchlink = $('#searchtoggl i');
  var $searchbar  = $('#searchbar');
  
  $('#searchtoggl').on('click', function(e){
    e.preventDefault();
    
    if($(this).attr('id') == 'searchtoggl') {
      if(!$searchbar.is(":visible")) { 
        // if invisible we switch the icon to appear collapsable
        $searchlink.removeClass('fa-search').addClass('fa-search-minus');
      } else {
        // if visible we switch the icon to appear as a toggle
        $searchlink.removeClass('fa-search-minus').addClass('fa-search');
      }
      
      $searchbar.slideToggle(300, function(){
        // callback after search bar animation
      });
    }
  });
}(window));
</script>

	
	</body>
</html>

