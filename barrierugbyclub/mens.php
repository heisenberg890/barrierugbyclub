 <?php require_once("header.php"); ?>
 
 <div class="row pageHeaderRow">
 	<div class="large-10 medium-10 small-10 columns">
 		<p class="pageHeaderColumn">Mens</p>
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
	      	<img class="squadImage" src="img/mens/squad/mugs1.png"> <p class="mugShotsContent">Kyle Giffin<br />Lock</p>
	      	<img class="squadImage" src="img/mens/squad/mugs55.png"> <p class="mugShotsContent">Chad McLeaming<br />Flanker</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs3.png"> <p class="mugShotsContent">TJ Armstrong<br />Centre</p>
	      	<img class="squadImage" src="img/mens/squad/mugs4.png"> <p class="mugShotsContent">Mike Alcombrack<br />Hooker</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs5.png"> <p class="mugShotsContent">Duane Farrell<br />Centre</p>
	      	<img class="squadImage" src="img/mens/squad/mugs6.png"> <p class="mugShotsContent">Bill Dozer<br />Flanker/8-man</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs7.png"> <p class="mugShotsContent">Tom Yurkiw<br />Lock</p>
	      	<img class="squadImage" src="img/mens/squad/mugs8.png"> <p class="mugShotsContent">Tory Turner<br />Lock</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs9.png"> <p class="mugShotsContent">Evan McDonald<br />Fly Half</p>
	      	<img class="squadImage" src="img/mens/squad/mugs10.png"> <p class="mugShotsContent">Zac Day<br />Scrum Half</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs11.png"> <p class="mugShotsContent">Derek Spence<br />Prop</p>
	      	<img class="squadImage" src="img/mens/squad/mugs12.png"> <p class="mugShotsContent">Matt Beavis<br />Prop</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs13.png"> <p class="mugShotsContent">Alex Titterington<br />Lock</p>
	      	<img class="squadImage" src="img/mens/squad/mugs14.png"> <p class="mugShotsContent">Chris Hyde<br />Flanker</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs15.png"> <p class="mugShotsContent">Ryan Orr<br />Hooker/Prop</p>
	      	<img class="squadImage" src="img/mens/squad/mugs16.png"> <p class="mugShotsContent">Austin Warner<br />Flanker</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs17.png"> <p class="mugShotsContent">Ryan Irvine<br />Wing</p>
	      	<img class="squadImage" src="img/mens/squad/mugs18.png"> <p class="mugShotsContent">Rick Doran<br />Wing</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs19.png"> <p class="mugShotsContent">Jake Boulding<br />Flanker</p>
	      	<img class="squadImage" src="img/mens/squad/mugs20.png"> <p class="mugShotsContent">Robin Calamatta<br />Flanker/8-man</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs21.png"> <p class="mugShotsContent">Greg Page<br />Centre</p>
	      	<img class="squadImage" src="img/mens/squad/mugs22.png"> <p class="mugShotsContent">Travis MacIver<br />Hooker/Prop</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs23.png"> <p class="mugShotsContent">Albert Calamatta<br />Flanker</p>
	      	<img class="squadImage" src="img/mens/squad/mugs24.png"> <p class="mugShotsContent">Mack Fraser<br />Hooker</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs25.png"> <p class="mugShotsContent">Robert Duck<br />Prop</p>
	      	<img class="squadImage" src="img/mens/squad/mugs26.png"> <p class="mugShotsContent">Mike Sabourin<br />Prop</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs27.png"> <p class="mugShotsContent">Spencer Karn<br />Centre</p>
	      	<img class="squadImage" src="img/mens/squad/mugs28.png"> <p class="mugShotsContent">Conor McHale<br />Flanker</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs29.png"> <p class="mugShotsContent">Justin Munshaw<br />Flanker</p>
	      	<img class="squadImage" src="img/mens/squad/mugs30.png"> <p class="mugShotsContent">Len Day<br />Prop</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs31.png"> <p class="mugShotsContent">Jordan Carrier<br />Wing</p>
	      	<img class="squadImage" src="img/mens/squad/mugs32.png"> <p class="mugShotsContent">Tyler Gordon<br />Wing</p>
	      </div>
	      
	      
	      
	      
	      
	      
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs33.png"> <p class="mugShotsContent">Evan Stacey<br />Prop</p>
	      	<img class="squadImage" src="img/mens/squad/mugs34.png"> <p class="mugShotsContent">Richard Bethel<br />Full Back</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs35.png"> <p class="mugShotsContent">Mike Tepera<br />8-man/Flanker</p>
	      	<img class="squadImage" src="img/mens/squad/mugs36.png"> <p class="mugShotsContent">Andrew Noble<br />Flanker</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs37.png"> <p class="mugShotsContent">Chris Tepera<br />Prop</p>
	      	<img class="squadImage" src="img/mens/squad/mugs38.png"> <p class="mugShotsContent">Scott Schremph<br />Centre</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs39.png"> <p class="mugShotsContent">Jordan Henstra<br />Wing</p>
	      	<img class="squadImage" src="img/mens/squad/mugs40.png"> <p class="mugShotsContent">Andy Foster<br />Prop</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs41.png"> <p class="mugShotsContent">Harain Mclaren<br />Centre</p>
	      	<img class="squadImage" src="img/mens/squad/mugs42.png"> <p class="mugShotsContent">Be Sky Blue<br />Flanker</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs43.png"> <p class="mugShotsContent">Dave Hyde<br />Centre</p>
	      	<img class="squadImage" src="img/mens/squad/mugs44.png"> <p class="mugShotsContent">John Mitchell<br />Hooker</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs54.png"> <p class="mugShotsContent">Tom Exton<br />8-man/Flanker</p>
	      	<img class="squadImage" src="img/mens/squad/mugs46.png"> <p class="mugShotsContent">Ryan Olejnik<br />Flanker</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs47.png"> <p class="mugShotsContent">Dave Arnold<br />Centre</p>
	      	<img class="squadImage" src="img/mens/squad/mugs48.png"> <p class="mugShotsContent">Corey Finch<br />Flanker</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs49.png"> <p class="mugShotsContent">Cody Symes<br />Scrum Half</p>
	      	<img class="squadImage" src="img/mens/squad/mugs50.png"> <p class="mugShotsContent">Tyrel Fitzpatrick<br />Prop</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs51.png"> <p class="mugShotsContent">Gary Smith<br />Centre</p>
	      	<img class="squadImage" src="img/mens/squad/mugs52.png"> <p class="mugShotsContent">Jesse Twigg<br />Prop</p>
	      </div>
	      <div class="squadImageDiv">
	      	<img class="squadImage" src="img/mens/squad/mugs53.png"> <p class="mugShotsContent">Jesse Leadbetter<br />Scrum Half</p>
	      	<!--<img class="squadImage" src="img/mens/squad/mugs54.png"> <p class="mugShotsContent">Be Sky Blue<br />Flanker</p>-->
	      </div>
	     
	      
	      
	      
	    </div>

	    
	</div>
	<p class="eventsHeader">Click and drag photos to scroll</p>
</div>
    <div class="row mensWomensContent">
    	<div class="small-12 medium-12 large-12 columns">
    		<p class="teamPageContent">Barrie Mens teams 18+ practices are Tuesday and Thursday evenings 6pm - 8pm at the Barrie Sports Complex - Jim Hamilton Memorial Field. Preseason is posted on the calendar and facebook page.<br />
    			Games are Saturday afternoons at the Barrie Sports Complex, 3rds play at 12pm - 1:30pm, 2nds at 1:30pm - 3pm and firsts at 3:00pm - 4:30pm - Jim Hamilton Memorial Field (travel required for away games).<br />The Men's seasons run from May to October.</p>
    		<p class="contactPageContent">Head Coach: <a class="drivingDirections" href="mailto:mens.coach@barrierugbyclub.com"><?php include("partials/coaches/mens.php"); ?> | mens.coach@barrierugbyclub.com</a></p>
    	</div>
    </div>



    <div class="row pricingSpacing">
    	<p class="registerHeader">Senior Mens Team</p>
    	<div class="large-2 medium-2 small-12 columns pricingColumn pricingBlueColumn">
    		<p class="pricingDollar">$415</p>
    		<p class="pricingSeason">/season</p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<p class="pricingHeader1">Mens</p>
    		<p class="pricingContent">Players Born Before <?php echo date("Y")-18; ?></p>
    	</div>
    	<div class="large-4 medium-4 small-12 columns pricingColumn">
    		<p class="pricingHeader">Includes</p>
    		<p class="pricingContent">New Players Recieve Training Shirt, Rugby Shorts, Socks</p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<p class="pricingHeader">Contact</p>
    		<p class="pricingContent"><a href="mailto:mens.coach@barrierugbyclub.com"><?php include("partials/coaches/mens.php"); ?></a></p>
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
		    	<p class="accordionFaqContent">Men's 18+ practices are Tuesday and Thursday evenings at the Barrie Sports Complex - Jim Hamilton Memorial Field.</p>
		    </div>
		  </li>
		  <li class="accordion-navigation middleAccordions">
		    <a href="#panel2c">+ When are the games?</a>
		    <div id="panel2c" class="content">
		    	<p class="accordionFaqContent">Men's 18+ games are Saturday afternoons at the Barrie Sports Complex - Jim Hamilton Memorial Field (travel required for away games).</p>
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
<p class="accordionFaqContent">The Men's seasons run from May to October.</p>
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