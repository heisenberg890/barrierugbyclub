<?php 

	 
	  $email = $_POST["email"];
	 
	  if(!empty($email)){
		  mail('newsletter@barrierugbyclub.com', "Email Address to join newsletter: \n" . $email . "\n" );
		  mail($email, 'Thanks for Visiting Barrie Rugby Club', 
		  "We welcome you to our online newsletter. Email, facebook, or twitter us for more information about how to Be Sky Blue. \n\n Sincerely, \n Barrie RFC", $email);
		  if(isset($_POST["submit"])){
		  echo "<div class='text-center'><p style='color:red;padding-top: 15px;'>Thank you, you have been added to the newsletter.</p></div>";
		  }//end of the email
	  }
  ?>
  
  
<?php 
if(basename($_SERVER['REQUEST_URI']) == 'index.php'){



}else{
	echo '
<div class="mainPageSplash show-for-large-up" id="viewport">
	
	<a href="#top" class="button splashOverlay">Get Started</a>
	<p class="splashOverlayWelcome">Welcome to Barrie RFC</p>
</div>';
}

?>


<?php require_once("header.php"); ?>




<div class="row pageHeaderRow">
 	<div class="large-10 medium-10 small-10 columns">
 		<p class="pageHeaderColumn">Home</p>
 	</div>
 	<div class="large-2 medium-2 small-2 columns" style="background: white; padding-left: 0px;">
 		<img class="splashImage" src="img/splatter_right.png"/>
 	</div>
 </div>    
    

<!-- This will show for pc (large screens)-->
    <div class="row show-for-large-up" style="margin-top:5%;">
    	<div class="large-8 medium-12 small-12 columns noPad" style="padding-right:5px !important">
    		<ul data-orbit data-options="bullets: false;">
    			
    			<li>
    				<a target="_blank" class="drivingDirections" href="http://members.rugbycanada.ca/page/show/2224867-on-club-page"><img class="mainSliderMainPage" style="height: 372px;" src="img/announcements/registration2017.png" /></a>
                    <div class="orbit-caption secondaryCaption1" style="margin-bottom:0px !important;">
			    					News
			    				</div>
    			
    			</li>
                <li>
    				<img class="mainSliderMainPage" style="height: 372px;" src="img/announcements/coachAnnouncement.png" />
                    
    			
    			</li>
                <li>
    				<img class="mainSliderMainPage" style="height: 372px;" src="img/announcements/leavingAnnouncement.png" />
                    
    			
    			</li>
                
    			
    			
    			
    			
    		</ul>
    	</div>
    	
    	
    	
    	<a href="apparel.php">
    		
    		<div class="large-4 medium-4 small-4 columns pad">
    		
    		<ul class="topRightPhoto" data-orbit data-options="bullets: false;">
    			
    			
    			<?php   		
				$dirname = "img/apparel/";
				$images = glob($dirname."*.png");
				foreach($images as $image) {
						
					
				echo '
				<li>
			    				<img class="topRightPhoto" src="'.$image.'" />
			    				
			    				<div class="orbit-caption secondaryCaption1 apparelAnnouncements">
			    					Apparel
			    				</div>
			    			</li>
			    			';
					
					
				}    ?>	
    			
    		
    		</ul>
    		
    		<div class="row bottomRightPhoto">
    			<div class="large-12 medium-12 small-12 columns">
    				<a href="gallery.php">
    					<ul class="topRightPhoto" data-orbit data-options="bullets: false;"> 
							
    					
    		<?php   		
				$dirname = "img/galleryImages/";
				$images = glob($dirname."*.png");
				foreach($images as $image) {
						
					
				echo '
				            <li>
			    				<img class="topRightPhoto" src="'.$image.'" />
			    				<div class="orbit-caption secondaryCaption1 apparelAnnouncements">
			    					Gallery
			    				</div>
			    			</li>
			    			';
					
					
				}    ?>	
				
				
    					</ul>
    					
    				
    		
    		
    		
    					</a>
    			</div>
    		</div>
    		
    		
    		<!-- <img class="mainPageTopRightPhoto" src="img/photos/rugbyphoto0.jpg">-->
    		<!--<img class="mainPageBottomRightPhoto" src="img/photos/rugbyphoto3.jpg">-->
    	</div>
    </a>
    </div>
    
    
    <!-- This will show for iPad and mobile -->
    <div class="row hide-for-large-up">
    <div class="large-12 medium-12 small-12 columns">
    		<ul data-orbit data-options="bullets: false; variable_height: true">
    			
    			
    			<li>
    				<a target="_blank" class="drivingDirections" href="http://members.rugbycanada.ca/page/show/2224867-on-club-page"><img class="mainSliderMainPage" src="img/announcements/registration2017.png" /></a>
    			<div class="orbit-caption secondaryCaption1" style="margin-bottom:0px !important;">
			    					News
			    				</div>
    			</li>
                
                <li>
    				<img class="mainSliderMainPage" src="img/announcements/coachAnnouncement.png" />
    			
    			</li>
                
                <li>
    				<img class="mainSliderMainPage" src="img/announcements/leavingAnnouncement.png" />
    			
    			</li>
    			
    			
    			
    		</ul>
    	</div>
    </div>
    
    
    <div class="row hide-for-large-up" style="margin-top: 10px;">
    <div class="large-6 medium-6 small-6 columns bottomLeftPadding">
    	
    	<a href="apparel.php">
    		<ul data-orbit data-options="bullets: false;">
    			<?php   		
				$dirname = "img/apparel/";
				$images = glob($dirname."*.png");
				foreach($images as $image) {
						
					
				echo '
				<li>
			    				<img class="topRightPhoto" src="'.$image.'" />
			    				
			    				<div class="orbit-caption secondaryCaption1 apparelAnnouncements">
			    					Apparel
			    				</div>
			    			</li>
			    			';
					
					
				}    ?>	
    		</ul>
    		</a>
    	</div>
    	
    				
    				
    <!--<a href="gallery.php"><img class="galleryMainPage" style="width:100%; max-height:180.5px;" src="img/apparel/barrieRugbyGallery.png" /></a>-->

<div class="large-6 medium-6 small-6 columns bottomLeftPadding">
    	
    	<a target="_blank" href="gallery.php">
    		<!--<ul data-orbit data-options="bullets: false;">
    			<li>
    				<img class="topRightPhoto" src="img/womens/barrieRFC.png" />
    				<div class="orbit-caption secondaryCaption apparelAnnouncements1">
    					Gallery
    				</div>
    			</li>
    			
    		</ul>
    		
    	-->
    		
    		<ul class="topRightPhoto" data-orbit data-options="bullets: false;"> 
							
    					
    		<?php   		
				$dirname = "img/galleryImages/";
				$images = glob($dirname."*.png");
                
				foreach($images as $image) {
						
					
				echo '
				<li>
			    				<img class="topRightPhoto" src="'.$image.'" />
			    				<div class="orbit-caption secondaryCaption1 apparelAnnouncements">
			    					Gallery
			    				</div>
			    			</li>
			    			';
					
					
				}    ?>	
				
				
    					</ul>
    					
    					
    		</a>
    	</div>



    </div>









    
<div class="window show-for-medium-up">
    <div class="innerPane">
    
    </div>
</div>









 
 <div class="row eventsCarousel">
<div class="large-12 medium-12 small-12 columns">
	<p class="eventsHeader" style="padding-top: 50px;">Upcoming Events<br /> Click any image to see full calendar of events and get details</p>
		
</div>
	<div class="large-12 medium-12 small-12 columns">
	    <div id="owlimgslider" class="owl-carousel">
	     <div class="owl-item">
	     	<div class="item" data-hash="zero">
		     	<a target="_blank" class="drivingDirections" href="calendar.php">
		     		<img class="eventsImages" src="img/announcements/nashbash.jpg"> 
		     	</a> 
		     	<a href="calendar.php">
		     		<img class="eventCalendarIcon" src="img/calendar-icons/March_25.png">
		     	</a>
		     	<p class="eventContent">
		     		Barrie Travels down to Nashville to participate in NashBash 2016, a massive tournament with All-American Rugby squads ready to challenge Barrie RFC
		     	</p> 
		     </div>
	     </div>



            
	     
	      
	      <!-- Start of New Events -->
	      
	    
	      
	    </div>
	    
	    
	    
	    
	</div>
</div>
 
<div class="window2 show-for-medium-up">
    <div class="innerPane2">
    
    </div>
</div>
 
    
<div class="row fancyRow">
	<div class="large-6 medium-6 small-6 columns show-for-medium-up">	
		<div class="large-3 medium-3 small-3 columns show-for-large-up">
			<img class="fancyText" src="img/swirl_left.png" />
			</div>
		<div class="large-6 medium-12 small-12 columns">
			<p class="mottoClass">Bleed the Blue, Barrie the True<br />Donning the Sky Blue is an Honour</p>
			
		</div>
		<div class="large-3 medium-3 small-3 columns show-for-large-up">
			<img class="fancyText" src="img/swirl_right.png" />
			</div>
	</div>
	
	<div class="large-6 medium-6 small-12 columns">
		
		    <div class="large-12 medium-12 small-12 columns">
				<p class="eventsHeader2">Join Our Newsletter</p>
			</div>
			<div class="small-12 medium-12 large-12 columns">
								<form action="index.php" method="POST">
									<div class="small-9 medium-9 large-9 columns" style="padding-right:0%;">
				                    	<input class="contactSendForm" type="email" name="email" placeholder="Your Email" required="required" />
				                    </div>   
				                    <div class="small-3 medium-3 large-3 columns" style="padding-left:0%;">
				                        <input  type="submit" name="submit" class="button contactSendButton" value="Send" />
				                    </div>
				                    </form>
			</div>
	</div>

</div>

<!--
<div class="row">
    <div class="large-12 medium-12 small-12 columns">
		<p class="eventsHeader2">Join Our Newsletter</p>
	</div>
	<div class="small-12 medium-12 large-12 columns">
						<form action="index.php" method="POST">
		                    	<input type="email" name="email" placeholder="Your Email" required="required" />
		                        
		                        <input  type="submit" name="submit" class="button contactSendButton" value="Send" />
		                    </form>
	</div>
</div>    

-->

<div class="row contactFormRow show-for-large-up">

	
			<div class="large-4 medium-12 small-12 columns socialMediaFeeds">
				<div class="fb-page" 
					data-href="https://www.facebook.com/Barrie-Rugby-Football-Club-1550686881844637/?fref=ts" 
					data-tabs="timeline" data-height="550" 
					data-small-header="false" 
					data-adapt-container-width="true" 
					data-hide-cover="false" 
					data-show-facepile="true">
				</div>
			</div>
	
	
    		 <div class="large-4 medium-12 small-12 columns show-for-large-up socialMediaFeeds">
						
<div style="position: relative; height: 16px; overflow: hidden; padding-top:166.66666666666669%;"><iframe src="//widgets-code.websta.me/w/f95a8cc00090?ck=MjAxNi0wNi0wMlQwMjozOTo0OC40NzVa" class="websta-widgets" allowtransparency="true" frameborder="0" scrolling="no" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe> <!-- WEBSTA WIDGETS - widgets.websta.me --></div>	
	
	
</div>		      
		       
		       	<div class="large-4 medium-12 small-12 columns socialMediaFeeds">
		       		
		       			<a class="twitter-timeline" href="https://twitter.com/BarrieRugbyClub" data-widget-id="693744197703176193">Tweets by @BarrieRugbyClub</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				
				</div>
		       
</div>


<div class="row hide-for-large-up" style="text-align:center;">
	<div class="large-4 medium-12 small-12 columns socialMediaFeeds">
		<div class="fb-page" 
			data-href="https://www.facebook.com/Barrie-Rugby-Football-Club-1550686881844637/?fref=ts" 
			data-tabs="timeline" data-height="300" 
			data-small-header="false" 
			data-adapt-container-width="true" 
			data-hide-cover="false" 
			data-show-facepile="true">
		</div>
	</div>
	
		<div class="large-4 medium-12 small-12 columns socialMediaFeeds" style="padding-top: 50px; padding-bottom: 50px;">

			
<div style="position: relative; height: 16px; overflow: hidden; padding-top:166.66666666666669%;"><iframe src="//widgets-code.websta.me/w/f95a8cc00090?ck=MjAxNi0wNi0wMlQwMjozOTo0OC40NzVa" class="websta-widgets" allowtransparency="true" frameborder="0" scrolling="no" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe> <!-- WEBSTA WIDGETS - widgets.websta.me --></div>
		
		</div>
	
	
	<div class="large-4 medium-12 small-12 columns socialMediaFeeds">
		<a class="twitter-timeline" href="https://twitter.com/BarrieRugbyClub" data-widget-id="694040837274103808">Tweets by @BarrieRugbyClub</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
</div>

    

 <!--   
   <script>
  jQuery(document).ready(function($) {
	$(function(){
 $('#owlimgslider').owlCarousel({
		items:4,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: '#three'
 	
 	});
		});
		
			});
</script> 

-->


<script>
	
	$('.owl-carousel').owlCarousel({
        items:5,
        loop:true,
        center:true,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: '#three'
    });
	
</script>
    
<script>
  	$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

</script>    



    
<?php require_once("footer.php"); ?>

