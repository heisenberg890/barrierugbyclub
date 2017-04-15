 <?php require_once("header.php"); ?>
 
<div class="row pageHeaderRow">
 	<div class="large-10 medium-10 small-10 columns">
 		<p class="pageHeaderColumn">U-12 Co-Ed</p>
 	</div>
 	<div class="large-2 medium-2 small-2 columns" style="background: white; padding-left: 0px;">
 		<img class="splashImage" src="img/splatter_right.png"/>
 	</div>
 </div>    
      
    
    
    
        <div class="row">
    	<div class="large-12 medium-12 small-12 columns">
    		<ul class="teamSliders" data-orbit data-options="bullets: false;">
    		<?php 
    		
    		$dirname = "img/u12co/";
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
    		<p class="teamPageContent"> Under 12 practices are Monday and Wednesday evenings at the Barrie Sports Complex - Field 1. <br />
    			Under 12 games are away tournaments held throughout southern Ontario usually the Toronto area.<br />U12 is modified contact.<br />The Under 12 seasons run from May to June, as well as the end of August.</p>
    		<p class="contactPageContent">Contact: <a href="mailto:u12coach@barrierugbyclub.com"><?php include("partials/coaches/u12.php"); ?> | u12coach@barrierugbyclub.com</a></p>
    	</div>
    </div>
    
    
    <div class="row pricingSpacing">
    	<p class="registerHeader">U12 Co-Ed Team</p>
    	<div class="large-2 medium-2 small-12 columns pricingColumn pricingBlueColumn">
    		<p class="pricingDollar">$260</p>
    		<p class="pricingSeason">/season</p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<p class="pricingHeader1">Under 12 Co-Ed</p>
    		<p class="pricingContent">Players Born In <?php echo date("Y")-12;?> and <?php echo date("Y")-11;?></p>
    	</div>
    	<div class="large-4 medium-4 small-12 columns pricingColumn">
    		<p class="pricingHeader">Includes</p>
    		<p class="pricingContent">All Players Entering Age Group Recieve Jersey, Rugby Shorts, Socks</p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<p class="pricingHeader">Contact</p>
    		<p class="pricingContent"><a href="mailto:u12coach@barrierugbyclub.com"><?php include("partials/coaches/u12.php"); ?></a></p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<?php include_once("partials/registerPartial.php"); ?>
    	</div>
    	
    </div>
    
    <?php include_once("./partials/teampagedocumentssectionmini.php"); ?>
    
    
<div class="row accordionRowClass">
	<div class="large-6 medium-6 small-12 columns">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#panel1b">+ When are the practices?</a>
		    <div id="panel1b" class="content">
		    	<p class="accordionFaqContent">
		    		
		    		* Monday and Wednesday, 6:30pm – 8:00pm (1.5 hours per practice) at the Barrie Sports Complex field 1<br />
* Field practices run all through May and June, we break for July 10th and restart practices July 26th through to the final tournament which is Ontario Provincials in Markham.<br />
* The Coaches are hoping to book a school gym for the month of April and run coaching clinics to introduce new players to rugby and get returning players warmed up for the upcoming season. There will be an additional cost for this but it will be nominal and just enough to cover the cost of the gym. We will communicate to parents by email as soon as we know if we have been able to secure the gym.<br />
                    *Practices start May 1st
		    		
		    		
		    		</p>
		    </div>
		  </li>
		  <li class="accordion-navigation middleAccordions">
		    <a href="#panel2b">+ When are the games?</a>
		    <div id="panel2b" class="content">
		    	<p class="accordionFaqContent">
                    Saturday Festivals<br />
Home Festivals May 27 and June 24

						    		
				</p>
		    </div>
		  </li>
		  <li class="accordion-navigation smallBottomAccordion">
		    <a href="#panel3b">+ Is there contact</a>
		    <div id="panel3b" class="content">
		    	<p class="accordionFaqContent">The U6, U8 and U10 teams all play non-contact flag rugby where tackles are made by pulling a flag attached to the player’s waist. The U12 play a semi-contact game.</p>
		    </div>
		  </li>
		</ul>
	</div>

	<div class="large-6 medium-6 small-12 columns">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#panel4b">+ How long is the season?</a>
		    <div id="panel4b" class="content">
<p class="accordionFaqContent">The Under 6 season runs from May to July. The Under 8, 10 & 12 seasons run from May to June, as well as the end of August.</p>
		    </div>
		  </li>
		  <li class="accordion-navigation middleAccordions">
		    <a href="#panel5b">+ What makes up my fees?</a>
		    <div id="panel5b" class="content">
<p class="accordionFaqContent">
	•	Approximately $25 paid to Rugby Ontario membership and player insurance
	•	Approximately $30 paid to Rugby Canada membership and player insurance
	•	Remainder of fees:
	•	Players kit: sublimated jersey, shorts, socks
	•	Field rental and associated costs (City of Barrie)
	•	Team equipment: balls, pinnies, pylons, bags, etc
	•	Referees 
	•	Nominal fee for use of online registration tool
</p>
		    </div>
		  </li>
		  <li class="accordion-navigation">
		    <a href="#panel6b">+ What is the refund policy?</a>
		    <div id="panel6b" class="content">
<p class="accordionFaqContent">
	Refunds are issued under the following conditions: A player has not participated in any activity on the field, practices/training, exhibition games or league games. Rugby Canada will issue full refund back to the original method of payment. Refunds are NOT issued under the following condition: A player has participated in activities on the field, practices/training, exhibition games or league games. Rugby Canada and Rugby Ontario insurance fees are non-refundable under any circumstance. Club portion of fees may be refunded on a prorated basis up to June 30 and will also include a $50.00 processing fee Contact the Registrar

</p>
		    </div>
		  </li>
		</ul>
	</div>		
</div>

    <?php require_once("footer.php"); ?>