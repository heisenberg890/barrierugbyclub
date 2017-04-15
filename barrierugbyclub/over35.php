 <?php require_once("header.php"); ?>
 
<div class="row pageHeaderRow">
 	<div class="large-10 medium-10 small-10 columns">
 		<p class="pageHeaderColumn">Over-35 Mens</p>
 	</div>
 	<div class="large-2 medium-2 small-2 columns" style="background: white; padding-left: 0px;">
 		<img class="splashImage" src="img/splatter_right.png"/>
 	</div>
 </div>    
    
    
    
        <div class="row">
    	<div class="large-12 medium-12 small-12 columns">
    		<ul class="teamSliders" data-orbit data-options="bullets: false;">
    		<?php 
    		
    		$dirname = "img/u18b/";
			$images = glob($dirname."*.png");
			foreach($images as $image) {
				
				
			echo '
    			<li>
    				<img class="teamImageSliders" src="'.$image.'" />
    				<div class="orbit-caption" style="background-color: rgba(137, 213, 245, 0.59) !important; text-align: center; font-size: 35px; font-family: papyrus;">
    					Coming Summer 2017
    				</div>
    			</li>
    		';
				
			}
?>
    		</ul>
    	</div>
    </div>
    
    <div class="row">
    	<div class="small-12 medium-12 large-12 columns">
    		<p class="eventsHeader" style="padding-top: 50px;">Contact <a style="color:red" href="mailto:over35@barrierugbyclub.com">Doug Wilkey</a> For Information</p>
    	</div>
    </div>
    
        <div class="row">
    	<div class="small-12 medium-12 large-12 columns">
    		<p class="teamPageContent">Over 35 practices are Undetermined however wil be at the Barrie Sports Complex - Jim Hamilton Memorial Field.<br />
    			Over 35 games are Sundays (Sometimes Saturdays) at the Barrie Sports Complex - Jim Hamilton Memorial Field (travel required for away games).<br />The Over 35 Mens season runs from May to October</p>
    		<p class="contactPageContent">Contact: <a href="mailto:over35@barrierugbyclub.com">Doug Wilkey</a></p>
    	</div>
    </div>
    
    <div class="row pricingSpacing">
    	
    	<div class="large-2 medium-2 small-12 columns pricingColumn pricingBlueColumn">
    		<p class="pricingDollar">$215</p>
    		<p class="pricingSeason">/season</p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<p class="pricingHeader1">Over 35</p>
    		<p class="pricingContent">Players Over 35</p>
    	</div>
    	<div class="large-4 medium-4 small-12 columns pricingColumn">
    		<p class="pricingHeader">Includes</p>
    		<p class="pricingContent">TBD</p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<p class="pricingHeader">Contact</p>
    		<p class="pricingContent"><a href="mailto:over35@barrierugbyclub.com">Doug Wilkey</a></p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<a href="https://rcmembers.sportngin.com/register/form/935086959" class="button pricingButton">Be Sky Blue</a>
    	</div>
    	
    </div>

    	
<div class="row accordionRowClass">
	<div class="large-6 medium-6 small-12 columns">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#panel1c">+ When are the practices?</a>
		    <div id="panel1c" class="content">
		    	<p class="accordionFaqContent">There are no regularly scheduled practices for the Over 35 Mens team</p>
		    </div>
		  </li>
		  <li class="accordion-navigation middleAccordions">
		    <a href="#panel2c">+ When are the games?</a>
		    <div id="panel2c" class="content">
		    	<p class="accordionFaqContent">Barrie Over 35 team games are Sunday afternoons (May be Saturday sometimes) at the Barrie Sports Complex (travel required for away games). Season will finish with a tournament.</p>
		    </div>
		  </li>
		  <li class="accordion-navigation smallBottomAccordion">
		    <a href="#panel3c">+ Is there a discount for university/college students?</a>
		    <div id="panel3c" class="content">
		    	<p class="accordionFaqContent">Does not apply.</p>
		    </div>
		  </li>
		</ul>
	</div>

	<div class="large-6 medium-6 small-12 columns">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#panel4c">+ How long is the season?</a>
		    <div id="panel4c" class="content">
<p class="accordionFaqContent">The Over-35 season runs from May to October.</p>
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
<p class="accordionFaqContent">Refunds are issued under the following conditions: A player has not participated in any activity on the field, practices/training, exhibition games or league games. Rugby Canada will issue full refund back to the original method of payment. Refunds are NOT issued under the following condition: A player has participated in activities on the field, practices/training, exhibition games or league games. Rugby Canada and Rugby Ontario insurance fees are non-refundable under any circumstance. Club portion of fees may be refunded on a prorated basis up to June 30 and will also include a $50.00 processing fee Contact the Registrar. Full refund is issued to the Over 35 team if there is no team made as long as there are no games played and no practices participated in officially.</p>
		    </div>
		  </li>
		</ul>
	</div>		
</div>
    



    <?php require_once("footer.php"); ?>