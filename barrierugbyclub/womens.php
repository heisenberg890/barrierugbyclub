 <?php require_once("header.php"); ?>
 
<div class="row pageHeaderRow">
 	<div class="large-10 medium-10 small-10 columns">
 		<p class="pageHeaderColumn">Womens</p>
 	</div>
 	<div class="large-2 medium-2 small-2 columns" style="background: white; padding-left: 0px;">
 		<img class="splashImage" src="img/splatter_right.png"/>
 	</div>
 </div>    




    
    
    <!-- Use Here -->
    
    <!--
    <div class="row">
    	<div class="large-12 medium-12 small-12 columns">
    		<ul class="teamSliders" data-orbit data-options="bullets: false;">
    		<?php 
    		
    		$dirname = "img/mens/";
			$images = glob($dirname."*.png");
			foreach($images as $image) {
				
				
			echo '
    			<li>
    				<img class="teamImageSliders" src="'.$image.'" />
    				<div class="orbit-caption mainCaption">
    					Caption One.
    				</div>
    			</li>
    		';
				
			}

?>
    		</ul>
    	</div>
    </div>
    

 -->
    
    <!-- to here -->
    
 <div class="row eventsCarousel">
<div class="large-12 medium-12 small-12 columns">
	<p class="eventsHeader">Our Squad</p>
		
</div>
	<div class="large-12 medium-12 small-12 columns backgroundLogo">
	    <div id="owlimgslider" class="owl-carousel">
	    
	      <div class="squadImageDiv">
<img class="squadImage" src="img/womens/squad/wmugs1.png"> <p class="mugShotsContent">Bailee Yasher<br /></p>
<img class="squadImage" src="img/womens/squad/wmugs2.png"> <p class="mugShotsContent">Jessica Day<br /></p>
	      </div>
	      <div class="squadImageDiv">
<img class="squadImage" src="img/womens/squad/wmugs3.png"> <p class="mugShotsContent">Carrie Grills<br /></p>
<img class="squadImage" src="img/womens/squad/wmugs4.png"> <p class="mugShotsContent">Kendra Bower<br /></p>
	      </div>
	      <div class="squadImageDiv">
<img class="squadImage" src="img/womens/squad/wmugs5.png"> <p class="mugShotsContent">Riley Symes<br /></p>
<img class="squadImage" src="img/womens/squad/wmugs6.png"> <p class="mugShotsContent">Mandy Scott<br /></p>
	      	</div>
	      		      <div class="squadImageDiv">
<img class="squadImage" src="img/womens/squad/wmugs7.png"> <p class="mugShotsContent">Kimmie Noble<br /></p>
<img class="squadImage" src="img/womens/squad/wmugs8.png"> <p class="mugShotsContent">Kiranjit Phagurha<br /></p>
	      	</div>
	      		      <div class="squadImageDiv">
<img class="squadImage" src="img/womens/squad/wmugs9.png"> <p class="mugShotsContent">Michelle Guiot<br /></p>
<img class="squadImage" src="img/womens/squad/wmugs10.png"> <p class="mugShotsContent">Katherine Schlorff<br /></p>
	      	</div>
	      		      <div class="squadImageDiv">
<img class="squadImage" src="img/womens/squad/wmugs11.png"> <p class="mugShotsContent">Amanda Davidson<br /></p>
<img class="squadImage" src="img/womens/squad/wmugs12.png"> <p class="mugShotsContent">Gillian Quinn<br /></p>
	      	</div>
	      		      <div class="squadImageDiv">
<img class="squadImage" src="img/womens/squad/wmugs13.png"> <p class="mugShotsContent">Natasha Bartholomew<br /></p>
<img class="squadImage" src="img/womens/squad/wmugs14.png"> <p class="mugShotsContent">Riley MacDonald<br /></p>
	      	</div>
	      	

	    </div>

	    
	</div>
</div>

    <div class="row mensWomensContent">
    	<div class="small-12 medium-12 large-12 columns">
    		<p class="teamPageContent">Barrie Womens teams 18+ practices are Tuesday and Thursday evenings 6pm - 8pm at Field #6 at the Barrie Sports Complex <br />
    			Games are Saturday afternoons, 12pm - 1:30pm at the Barrie Sports Complex - Jim Hamilton Memorial Field (travel required for away games).<br />The Women's season runs from May to end of August.</p>
    		<p class="contactPageContent">Contact: <a class="drivingDirections" href="mailto:womens.coach@barrierugbyclub.com"><?php include("partials/coaches/womens.php"); ?> | womens.coach@barrierugbyclub.com</a></p>
    	</div>
    </div>

    <div class="row pricingSpacing">
    	
    	<div class="large-2 medium-2 small-12 columns pricingColumn pricingBlueColumn">
    		<p class="pricingDollar">$415</p>
    		<p class="pricingSeason">/season</p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<p class="pricingHeader1">Womens</p>
    		<p class="pricingContent">Players Born Before <?php echo date("Y")-18; ?></p>
    	</div>
    	<div class="large-4 medium-4 small-12 columns pricingColumn">
    		<p class="pricingHeader">Includes</p>
    		<p class="pricingContent">New Players Recieve Training Shirt, Rugby Shorts, Socks</p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<p class="pricingHeader">Contact</p>
    		<p class="pricingContent"><a href="mailto:womens.coach@barrierugbyclub.com"><?php include("partials/coaches/womens.php"); ?></a></p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<?php include_once("partials/registerPartial.php"); ?>
    	</div>
    	
    </div>
    
    
    <?php include_once("./partials/teampagedocumentssectionadult.php"); ?>
    

<div class="row accordionRowClass">
	<div class="large-6 medium-6 small-12 columns">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#panel1c">+ When are the practices?</a>
		    <div id="panel1c" class="content">
		    	<p class="accordionFaqContent">Women's 18+ practices are Tuesday and Thursday evenings 6pm - 8pm at Field #6 at the Barrie Sports Complex</p>
		    </div>
		  </li>
		  <li class="accordion-navigation middleAccordions">
		    <a href="#panel2c">+ When are the games?</a>
		    <div id="panel2c" class="content">
		    	<p class="accordionFaqContent">Games are Saturday afternoons, 12pm - 1:30pm at the Barrie Sports Complex - Jim Hamilton Memorial Field (travel required for away games).<br />The Women's season runs from May to end of August.</p>
		    </div>
		  </li>
		  <li class="accordion-navigation smallBottomAccordion">
		    <a href="#panel3c">+ Is there a discount for university/college students?</a>
		    <div id="panel3c" class="content">
		    	<p class="accordionFaqContent">Yes, the rate for university/college students to join is $330 for the season.</p>
		    </div>
		  </li>
		</ul>
	</div>

	<div class="large-6 medium-6 small-12 columns">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#panel4c">+ How long is the season?</a>
		    <div id="panel4c" class="content">
<p class="accordionFaqContent">The Women's seasons run from May to August.</p>
		    </div>
		  </li>
		  <li class="accordion-navigation middleAccordions">
		    <a href="#panel5c">+ What makes up my fees?</a>
		    <div id="panel5c" class="content">
<p class="accordionFaqContent">Your fees are to cover the player fees set out by our 2 governing bodies Rugby Ontario and Rugby Canada.   These fees are set by the respective organizations and are to cover their administration/operating costs and insurance for all players.  The remainders of the fees are allocated towards the Barrie RFCs operational costs such as field rentals, referees, physiotherapists, uniforms etc.</p>
		    </div>
		  </li>
		  <li class="accordion-navigation">
		    <a href="#panel6c">+ What is the refund policy?</a>
		    <div id="panel6c" class="content">
<p class="accordionFaqContent">Refunds are issued under the following conditions: A player has not participated in any activity on the field, practices/training, exhibition games or league games. Rugby Canada will issue full refund back to the original method of payment. Refunds are NOT issued under the following condition: A player has participated in activities on the field, practices/training, exhibition games or league games. Rugby Canada and Rugby Ontario insurance fees are non-refundable under any circumstance. Club portion of fees may be refunded on a prorated basis up to June 30 and will also include a $50.00 processing fee Contact the Registrar</p>
		    </div>
		  </li>
		</ul>
	</div>		
</div>



   <script>
  jQuery(document).ready(function($) {
	$(function(){
 $('#owlimgslider').owlCarousel({items:4});
	});
		});
</script> 
   <?php require_once("footer.php"); ?>