 <?php 

	  $name = $_POST["name"];
	  $email = $_POST["email"];
	  $subject = $_POST["subject"];
	  $message= $_POST["message"];
	  $phone = $_POST["phone"];
	  //send me an email
	  if(!empty($email)){
		  mail('info@barrierugbyclub.com', $subject, $message, "Email Address: \n" . $email . "\n" . "Phone Number: \n" .  $phone);
		  mail($email, 'Thanks for Visiting Barrie Rugby Club', 
		  "We appreciate your time, Your Message has been sent and will be redirected to the person most suited to help you, if you have any more questions regarding our club's services, please do not hesitate to call, email, facebook, or twitter us. \n\n Sincerely, \n Barrie RFC", $email);
		  if(isset($_POST["submit"])){
		  echo "<div class='text-center'><p style='color:red;'>Thank you, your message has been sent.</p></div>";
		  }//end of the email
	  }
  ?>
 
 <?php require_once("header.php"); ?>
 
<div class="row pageHeaderRow">
 	<div class="large-10 medium-10 small-10 columns">
 		<p class="pageHeaderColumn">Contact Us</p>
 	</div>
 	<div class="large-2 medium-2 small-2 columns" style="background: white; padding-left: 0px;">
 		<img class="splashImage" src="img/splatter_right.png"/>
 	</div>
 </div>    
     
    
    
 <div class="row">
 	<p class="contactPageHeader">Barrie Rugby Executive Team</p>
 	<div class="large-4 medium-4 small-12 columns">
 		
 		<p class="contactPageContent"><strong>Len Day - President</strong><br />Email: <a href="mailto:President@barrierugbyclub.com?subject=feedback">President@barrierugbyclub.com</a></p>
 		<p class="contactPageContent"><strong>Kent McDonald - Treasurer</strong><br />Email: <a href="mailto:Treasurer@barrierugbyclub.com?subject=feedback">Treasurer@barrierugbyclub.com</a></p>
 		<p class="contactPageContent"><strong>Mike Sabourin - Director of Marketing</strong><br />Email: <a href="mailto:Marketing@barrierugbyclub.com?subject=feedback">Marketing@barrierugbyclub.com</a></p>
 		<p class="contactPageContent"><strong>Mike Sabourin - Director of Sponsorship</strong><br />Email: <a href="mailto:Sponsorship@barrierugbyclub.com?subject=feedback">Sponsorship@barrierugbyclub.com</a></p>
 		<p class="contactPageContent"><strong>Matt Beavis - Child Protection Officer</strong><br />Email: <a href="mailto:CPO@barrierugbyclub.com?subject=feedback">CPO@barrierugbyclub.com</a></p>
 		

 	</div>
 <div class="large-4 medium-4 small-12 columns">
		 <p class="contactPageContent"><strong>Brandon Kirkwood - Director of Player Development</strong><br />Email: <a href="mailto:PlayerDevelopment@barrierugbyclub.com?subject=feedback">PlayerDevelopment@barrierugbyclub.com</a></p>
		 <p class="contactPageContent"><strong>Andrew Davies - Youth Director</strong><br />Email: <a href="mailto:youthdirector@barrierugbyclub.com?subject=feedback">youthdirector@barrierugbyclub.com</a></p>
 		<p class="contactPageContent"><strong>Michelle G - Social Media</strong><br />Email: <a href="mailto:Media@barrierugbyclub.com?subject=feedback">Media@barrierugbyclub.com</a></p>
 		<p class="contactPageContent"><strong>Jessica Day - Womens Director</strong><br />Email: <a href="mailto:WomensDirector@barrierugbyclub.com?subject=feedback">WomensDirector@barrierugbyclub.com</a></p>
 		<p class="contactPageContent"><strong>Jessica Day - Risk and Safety Manager</strong><br />Email: <a href="mailto:RSM@barrierugbyclub.com?subject=feedback">RSM@barrierugbyclub.com</a></p>
 		

 	</div>
 	
 <div class="large-4 medium-4 small-12 columns">
 		<p class="contactPageContent"><strong>Duane Farrell - Mens Director</strong><br />Email: <a href="mailto:MensDirector@barrierugbyclub.com?subject=feedback">MensDirector@barrierugbyclub.com</a></p>
 		<p class="contactPageContent"><strong>Mike Alcombrack - Social Director</strong><br />Email: <a href="mailto:Social@barrierugbyclub.com?subject=feedback">Social@barrierugbyclub.com</a></p>
 	<p class="contactPageContent"><strong>Doug Wilkey - Over 35 Manager</strong><br />Email: <a href="mailto:Over35@barrierugbyclub.com?subject=feedback">Over35@barrierugbyclub.com</a></p>
     <p class="contactPageContent"><strong>Kyle Giffen - Fixtures &amp; Field Manager</strong><br />Email: <a href="mailto:Fixtures@barrierugbyclub.com?subject=feedback">Fixtures@barrierugbyclub.com</a></p>
     <p class="contactPageContent"><strong>Travis Maciver - Club Equipment Manager</strong><br />Email: <a href="mailto:equipment@barrierugbyclub.com?subject=feedback">equipment@barrierugbyclub.com</a></p>

 	</div>
 </div>
 
 <div class="row contactFormRow1">
    <div class="large-12 medium-12 small-12 columns">
		<p class="eventsHeader">Contact Us</p>
	</div>
    		 <div class="small-12 medium-6 large-6 xlarge-6 columns">
		            <div class="small-12 medium-12 large-12 xlarge-12 columns">
		                	<form action="contact.php" method="POST">
		                    	<label for="name">Your Name <span class="star">*</span></label>
		                    	<input type="text" name="name" placeholder="Your Name" required="required" />
		                        <label for="email">Your Email <span class="star">*</span></label>
		                    	<input type="email" name="email" placeholder="Your Email" required="required" />
		                    	<label for="phone">Phone Number (Optional)</label>
		                    	<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" />
		                        <label for="Subject">Subject <span class="star">*</span></label>
		                    	<input type="text" name="subject" placeholder="Subject: " required="required" />
		                        <label for="message">Your Message <span class="star">*</span></label>
		                    	<textarea id="message" required="required" name="message" cols="40" rows="10" aria-invalid="false" placeholder="Type your message here."></textarea>
		                        
		                        <input  type="submit" name="submit" class="button contactSendButton1" value="Send" />
		                    </form>
		            </div>
		       </div>
		    <div class="small-12 medium-6 large-6 xlarge-6 columns">
		    	<p class="contactPageHeaders">Get In Touch</p>
		    	<p class="contactPageContents">Send us a message and we will get back to you fast. Ask a question, make a suggestion, or just say Hi. <br />See you on the Pitch!</p>
		    	
		    	<p class="contactPageHeaders">The Field</p>
		    	<p class="contactPageContents">2100 Nursery Rd, Minesing, ON  | Jim Hamilton Field</p>
		    	
		    	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5696.071524738593!2d-79.76589549472047!3d44.45293790300033!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc0e94b2e7e4dff58!2sBarrie+Community+Sports+Complex!5e0!3m2!1sen!2sca!4v1454402107084" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		    	
		    </div>
</div>
    
  <?php require_once("footer.php"); ?>