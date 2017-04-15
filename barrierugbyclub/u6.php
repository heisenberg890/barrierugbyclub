 <?php require_once("header.php"); ?>
 
<div class="row pageHeaderRow">
 	<div class="large-10 medium-10 small-10 columns">
 		<p class="pageHeaderColumn">U-6 Co-Ed</p>
 	</div>
 	<div class="large-2 medium-2 small-2 columns" style="background: white; padding-left: 0px;">
 		<img class="splashImage" src="img/splatter_right.png"/>
 	</div>
 </div>    
     
    
    
    
        <div class="row">
    	<div class="large-12 medium-12 small-12 columns">
    		<ul class="teamSliders" data-orbit data-options="bullets: false;">
    		<?php 
    		
    		$dirname = "img/u6co/";
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
    		<p class="teamPageContent">Under 6 practices are Mondays 6-8 Field 6 Barrie Community Sports Complex.<br />
    			Under 6 games are Inter-squad matches held Monday evenings at the Barrie Sports Complex - Jim Hamilton Memorial Field. <br />U6 is non-contact.</p>
    		<p class="contactPageContent">Contact: <a href="mailto:u6coach@barrierugbyclub.com"><?php include("partials/coaches/u6.php"); ?> | u6coach@barrierugbyclub.com</a></p>
    	</div>
    </div>
    

    
    <div class="row pricingSpacing">
    	<p class="registerHeader">U6 Co-Ed Team</p>
    	
    	
    	
    	<div class="large-2 medium-2 small-12 columns pricingColumn pricingBlueColumn">
    		<p class="pricingDollar">185</p>
    		<p class="pricingSeason">/season</p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<p class="pricingHeader1">Under 6 Co-Ed</p>
    		<p class="pricingContent">Players Born in <?php echo date("Y")-6; ?> and after</p>
    	</div>
    	<div class="large-4 medium-4 small-12 columns pricingColumn">
    		<p class="pricingHeader">Includes</p>
    		<p class="pricingContent">All Players Entering Age Group Recieve Jersey, Rugby Shorts, Socks</p>
    	</div>
    	<div class="large-2 medium-2 small-12 columns pricingColumn">
    		<p class="pricingHeader">Contact</p>
    		<p class="pricingContent"><a href="mailto:u6coach@barrierugbyclub.com"><?php include("partials/coaches/u6.php"); ?></a></p>
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
		    		
		    		* Monday and Wednesday, 6:00pm – 8:00pm at the Barrie Sports Complex field 1<br />
		    		
		    		
		    		</p>
		    </div>
		  </li>
		  <li class="accordion-navigation middleAccordions">
		    <a href="#panel2b">+ When are the games?</a>
		    <div id="panel2b" class="content">
		    	<p class="accordionFaqContent">
                    Saturday Festivals<br />
Home Festivals May 27 and June 24<br />
			    		Teams compete in rugby ‘festivals’ throughout the summer on select weekends.  Unlike typical sport tournaments, rugby festivals:
	
						•	Have 3 games maximum; no playoffs or championship games on top of this
						•	Take place in the morning and end in early afternoon (typically 8am – 9am start; 12pm – 1pm finish)
						•	7 on 7 format
					Games are 30 minutes in length (15 minute halves, 5 minute halftime)
					
						    		
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