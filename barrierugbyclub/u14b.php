 <?php require_once("header.php"); ?>
 
<div class="row pageHeaderRow">
 	<div class="large-10 medium-10 small-10 columns">
 		<p class="pageHeaderColumn">U-14 Boys</p>
 	</div>
 	<div class="large-2 medium-2 small-2 columns" style="background: white; padding-left: 0px;">
 		<img class="splashImage" src="img/splatter_right.png"/>
 	</div>
 </div>    
    
    
        <div class="row">
    	<div class="large-12 medium-12 small-12 columns">
    		<ul class="teamSliders" data-orbit data-options="bullets: false;">
    		<?php 
    		
    		$dirname = "img/u14b/";
			$images = glob($dirname."*.png");
			foreach($images as $image) {
				
				
			echo '
    			<li>
    				<img class="teamImageSliders" src="'.$image.'" />
    				
    			</li>
    		';
				
			}

?>
    		</ul>
    	</div>
    </div>
    
                <div class="row">
    	<div class="small-12 medium-12 large-12 columns">
    		<p class="teamPageContent">Under 14 practices are Monday and Wednesday evenings at the Barrie Sports Complex - Jim Hamilton Memorial Field.<br />
    			Under 14 games are Saturday mornings at the Barrie Sports Complex - Jim Hamilton Memorial Field (travel required for away games).<br />The Under 14 season runs from May to end of August.</p>
    		<p class="contactPageContent">Contact: <a href="mailto:u14boys@barrierugbyclub.com"><?php include("partials/coaches/u14b.php"); ?> | u14boys@barrierugbyclub.com</a></p>
    	</div>
    </div>
    
        <div class="row pricingSpacing">
        	<p class="registerHeader">U14 Boys Team</p>
    	<div class="large-2 medium-2 small-12 columns pricingColumn pricingBlueColumn">
    		<p class="pricingDollar">$360</p>
    		<p class="pricingSeason">/season</p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<p class="pricingHeader1">Under 14 Boys</p>
    		<p class="pricingContent">Players Born In <?php echo date("Y")-14; ?> and <?php echo date("Y")-13; ?></p>
    	</div>
    	<div class="large-4 medium-4 small-12 columns pricingColumn">
    		<p class="pricingHeader">Includes</p>
    		<p class="pricingContent">All Players Entering Age Group Recieve Training Shirt, Rugby Shorts, Socks</p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<p class="pricingHeader">Contact</p>
    		<p class="pricingContent"><a href="mailto:u14boys@barrierugbyclub.com"><?php include("partials/coaches/u14b.php"); ?></a></p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<?php include_once("partials/registerPartial.php"); ?>
    	</div>
    	
    </div>
    
    
    <?php include_once("./partials/teampagedocumentssectionu14.php"); ?>
    
    
    <div class="row accordionRowClass">
	<div class="large-6 medium-6 small-12 columns">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#panel1a">+ When are the practices?</a>
		    <div id="panel1a" class="content">
		    	<p class="accordionFaqContent">Under 14 practices are Monday and Wednesday evenings at the Barrie Sports Complex - Jim Hamilton Memorial Field.</p>
		    </div>
		  </li>
		  <li class="accordion-navigation middleAccordions">
		    <a href="#panel2a">+ When are the games?</a>
		    <div id="panel2a" class="content">
		    	<p class="accordionFaqContent">Under 14 games are Saturday mornings at the Barrie Sports Complex - Jim Hamilton Memorial Field (travel required for away games).</p>
		    </div>
		  </li>
		  <li class="accordion-navigation smallBottomAccordion">
		    <a href="#panel3a">+ Is there a contact</a>
		    <div id="panel3a" class="content">
		    	<p class="accordionFaqContent"><a href="mailto:u14boys@barrierugbyclub.com"><?php include("partials/coaches/u14b.php"); ?></a></p>
		    </div>
		  </li>
		</ul>
	</div>

	<div class="large-6 medium-6 small-12 columns">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#panel4a">+ How long is the season?</a>
		    <div id="panel4a" class="content">
<p class="accordionFaqContent">The Under 14 season runs from May to end of August.</p>
		    </div>
		  </li>
		  <li class="accordion-navigation middleAccordions">
		    <a href="#panel5a">+ What makes up my fees?</a>
		    <div id="panel5a" class="content">
<p class="accordionFaqContent">Your fees are to cover the player fees set out by our 2 governing bodies Rugby Ontario and Rugby Canada.   These fees are set by the respective organizations and are to cover their administration/operating costs and insurance for all players.  The remainders of the fees are allocated towards the Barrie RFCs operational costs such as field rentals, referees, physiotherapists, uniforms etc.</p>
		    </div>
		  </li>
		  <li class="accordion-navigation">
		    <a href="#panel6a">+ What is the refund policy?</a>
		    <div id="panel6a" class="content">
<p class="accordionFaqContent">Refunds are issued under the following conditions: A player has not participated in any activity on the field, practices/training, exhibition games or league games. Rugby Canada will issue full refund back to the original method of payment. Refunds are NOT issued under the following condition: A player has participated in activities on the field, practices/training, exhibition games or league games. Rugby Canada and Rugby Ontario insurance fees are non-refundable under any circumstance. Club portion of fees may be refunded on a prorated basis up to June 30 and will also include a $50.00 processing fee Contact the Registrar</p>
		    </div>
		  </li>
		</ul>
	</div>		
</div>

    <?php require_once("footer.php"); ?>