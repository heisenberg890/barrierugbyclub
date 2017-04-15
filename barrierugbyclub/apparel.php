

<?php 

	 
	  $date = ' ' . date("Y-m-d");
	  $name = $_POST["name"];
	  $email = $_POST["email"];
	  $message= $_POST["message"];
	  $phone = $_POST["phone"];
	  $barrierugbytshirtAmount = $_POST["barrierugbytshirtAmount"];
	  $barrierugbytshirtTotal = $_POST["barrierugbytshirtAmount"] * 20.00;
	  
	  $anniversarytshirtAmount = $_POST["anniversarytshirtAmount"];
	  $anniversarytshirtTotal = $_POST["anniversarytshirtAmount"] * 20.00;
	  
	  $trainingshirtAmount = $_POST["trainingshirtAmount"];
	  $trainingshirtTotal = $_POST["trainingshirtAmount"] * 40.00;
	  
	  $sleevelesstrainingshirtAmount = $_POST["sleevelesstrainingshirtAmount"];
	  $sleevelesstrainingshirtTotal = $_POST["sleevelesstrainingshirtAmount"] * 35.00;
	  
	  $brfcmeshtankAmount = $_POST["brfcmeshtankAmount"];
	  $brfcmeshtankTotal = $_POST["brfcmeshtankAmount"] * 30.00;
	  
	  $barrierugbyshortsAmount = $_POST["barrierugbyshortsAmount"];
	  $barrierugbyshortsTotal = $_POST["barrierugbyshortsAmount"] * 30.00;
	  
	  $brfcfleecescarfAmount = $_POST["brfcfleecescarfAmount"];
	  $brfcfleecescarfTotal = $_POST["brfcfleecescarfAmount"] * 20.00;
	  
	  $brfctoqueAmount = $_POST["brfctoqueAmount"];
	  $brfctoqueTotal = $_POST["brfctoqueAmount"] * 20.00;
	  
	  $brfcballcapAmount = $_POST["brfcballcapAmount"];
	  $brfcballcapTotal = $_POST["brfcballcapAmount"] * 25.00;
	  
	  $anniversaryballcapAmount = $_POST["anniversaryballcapAmount"];
	  $anniversaryballcapTotal = $_POST["anniversaryballcapAmount"] * 30.00;
	  
	  $bleedbluesnapbacksAmount = $_POST["bleedbluesnapbacksAmount"];
	  $bleedbluesnapbacksTotal = $_POST["bleedbluesnapbacksAmount"] * 30.00;
	  
	  $barriekitbagAmount = $_POST["barriekitbagAmount"];
	  $barriekitbagTotal = $_POST["barriekitbagAmount"] * 45.00;
	  
	  $barrierugbyballAmount = $_POST["barrierugbyballAmount"];
	  $barrierugbyballTotal = $_POST["barrierugbyballAmount"] * 35.00;
	  
	  $blueandwhiterugbysocksAmount = $_POST["blueandwhiterugbysocksAmount"];
	  $blueandwhiterugbysocksTotal = $_POST["blueandwhiterugbysocksAmount"] * 15.00;
	  
	  $golfshirtAmount = $_POST["golfshirtAmount"];
	  $golfshirtTotal = $_POST["golfshirtAmount"] * 45.00;
	  
	  $anniversarywhitegamejerseyAmount = $_POST["anniversarywhitegamejerseyAmount"];
	  $anniversarywhitegamejerseyTotal = $_POST["anniversarywhitegamejerseyAmount"] * 80.00;
	  
	  $anniversarybluegamejerseyAmount = $_POST["anniversarybluegamejerseyAmount"];
	  $anniversarybluegamejerseyTotal = $_POST["anniversarybluegamejerseyAmount"] * 80.00;
	  
	  $barriehoodiesweatshirtAmount = $_POST["barriehoodiesweatshirtAmount"];
	  $barriehoodiesweatshirtTotal = $_POST["barriehoodiesweatshirtAmount"] * 70.00;
	  
	  $grandTotal = $barriehoodiesweatshirtTotal + 
	  $anniversarybluegamejerseyTotal + 
	  $anniversarywhitegamejerseyTotal + 
	  $golfshirtTotal + 
	  $blueandwhiterugbysocksTotal +
	  $barrierugbyballTotal + 
	  $barriekitbagTotal +
	  $bleedbluesnapbacksTotal +
	  $anniversaryballcapTotal +
	  $brfcballcapTotal +
	  $brfctoqueTotal +
	  $brfcfleecescarfTotal +
	  $barrierugbyshortsTotal +
	  $brfcmeshtankTotal +
	  $sleevelesstrainingshirtTotal +
	  $trainingshirtTotal +
	  $anniversarytshirtTotal +
	  $barrierugbytshirtTotal;
	  
	  
	  
	  //send me an email
	  if(!empty($email)){
	  	
		mail('calamatta89@gmail.com', "Apparel Clothing Order. " . $date,  $name  . "\n\n" . $email . "\n\n" . $phone . "\n\n" . $message . "\n\n" .  "Barrie Rugby T-shirt,Anniversary T-shirt,Training Shirt,Sleeveless Training Shirt,BRFC Mesh Tank,Barrie Rugby Shorts,BRFC Fleece Scarf,BRFC Toque,Barrie Ball Cap,Anniversary Ball Cap,Bleed Blue Snapback,Barrie Kit Bag,Barrie Rugby Ball,Blue and White Rugby Socks,Golf Shirt,Anniversary White Jersey,Anniversary Blue Jersey,BRFC Hoodie Sweatshirt\n" . $barrierugbytshirtAmount . "," . $anniversarytshirtAmount . "," . $trainingshirtAmount . "," . $sleevelesstrainingshirtAmount . "," . $brfcmeshtankAmount . "," . $barrierugbyshortsAmount . "," . $brfcfleecescarfAmount . "," . $brfctoqueAmount . "," . $brfcballcapAmount . "," . $anniversaryballcapAmount . "," . $bleedbluesnapbacksAmount . "," . $barriekitbagAmount . "," . $barrierugbyballAmount . "," . $blueandwhiterugbysocksAmount . "," . $golfshirtAmount . ","  . $anniversarywhitegamejerseyAmount . "," . $anniversarybluegamejerseyAmount . "," . $barriehoodiesweatshirtAmount . "\n" . $barrierugbytshirtTotal . "," . $anniversarytshirtTotal . "," . $trainingshirtTotal . "," . $trainingshirtTotal . "," . $brfcmeshtankTotal . "," . $barrierugbyshortsTotal . "," . $brfcfleecescarfTotal . "," . $brfctoqueTotal . "," . $brfcballcapTotal . "," . $anniversaryballcapTotal . "," . $bleedbluesnapbacksTotal . "," . $barriekitbagTotal . "," . $barrierugbyballTotal . "," . $blueandwhiterugbysocksTotal . "," . $golfshirtTotal . ","  . $anniversarywhitegamejerseyTotal . "," . $anniversarybluegamejerseyTotal . "," . $barriehoodiesweatshirtTotal );
		  //mail('calamatta89@gmail.com', "Apparel Clothing Order", $message, "Email Address: \n" . $email . "\n" . "Phone Number: \n" .  $phone);
		 
		  mail($email, 'Barrie Rugby Club Apparel Receipt', 
		  "Thank you for your interest in our club's apparel, orders will be placed upon reaching required minimum order amount.\n\n **Minimum 1 Month wait time for order. All Items MUST be picked up, no delivery available. \n\n Your order is as follows \n\n" . "Barrie Rugby T-Shirts: " . $barrierugbytshirtAmount . "  \nSubtotal - $" . $barrierugbytshirtTotal . "\n Anniversary T-Shirts: " . $anniversarytshirtAmount . "  \nSubtotal - $" . $anniversarytshirtTotal . "\n Training Shirts: " . $trainingshirtAmount . "  \nSubtotal - $" . $trainingshirtTotal . "\n Sleeveless Training Shirts: " . $sleevelesstrainingshirtAmount . "  \nSubtotal - $" . $sleevelesstrainingshirtTotal . "\n BRFC Mesh Tanks " . $brfcmeshtankAmount . "  \nSubtotal - $" . $brfcmeshtankTotal . "\n Barrie Rugby Shorts: " . $barrierugbyshortsAmount . "  \nSubtotal - $" . $barrierugbyshortsTotal . "\n BRFC Fleece Scarf: " . $brfcfleecescarfAmount . "  \nSubtotal - $" . $brfcfleecescarfTotal . "\n BRFC Toque: " . $brfctoqueAmount . "  \nSubtotal - $" . $brfctoqueTotal . "\n BRFC Ball Cap: " . $brfcballcapAmount . "  \nSubtotal - $" . $brfcballcapTotal . "\n Anniversary Ball Cap: " . $anniversaryballcapAmount . "  \nSubtotal - $" . $anniversaryballcapTotal . "\n Bleed Blue Snapback: " . $bleedbluesnapbacksAmount . "  \nSubtotal - $" . $bleedbluesnapbacksTotal . "\n Barrie Kit Bag: " . $barriekitbagAmount . "  \nSubtotal - $" . $barriekitbagTotal . "\n Barrie Rugby Ball: " . $barrierugbyballAmount . "  \nSubtotal - $" . $barrierugbyballTotal . "\n Blue and White Rugby Socks: " . $blueandwhiterugbysocksAmount . "  \nSubtotal - $" . $blueandwhiterugbysocksTotal . "\n Golf Shirt: " . $golfshirtAmount . "  \nSubtotal - $" . $golfshirtTotal . "\n Anniversary White Game Jersey: " . $anniversarywhitegamejerseyAmount . "  \nSubtotal - $" . $anniversarywhitegamejerseyTotal . "\n Anniversary Blue Game Jersey: " . $anniversarybluegamejerseyAmount . "  \nSubtotal - $" . $anniversarybluegamejerseyTotal . "\n Barrie Hoodie Sweatshirt: " . $barriehoodiesweatshirtAmount . "  \nSubtotal - $" . $barriehoodiesweatshirtTotal . "\n\n Grand Total: $" . $grandTotal .  " \n\n Payment methods are as follows\n  ETransfer: Step 1: Send ETransfer to barrierfconlineregistering@gmail.com\n Step 2: Email barrierfconlineregistering@gmail.com with the answer to the security question and full name with order total \n\n Sincerely, \n Barrie RFC", $email);


		  mail('travis.maciver@gmail.com', 'Apparel clothing order. ' . $date, 
		  "Thank you for your interest in our club's apparel, orders will be placed upon reaching required minimum order amount. Your order is as follows \n\n" . "Barrie Rugby T-Shirts: " . $barrierugbytshirtAmount . "  \nSubtotal - $" . $barrierugbytshirtTotal . "\n Anniversary T-Shirts: " . $anniversarytshirtAmount . "  \nSubtotal - $" . $anniversarytshirtTotal . "\n Training Shirts: " . $trainingshirtAmount . "  \nSubtotal - $" . $trainingshirtTotal . "\n Sleeveless Training Shirts: " . $sleevelesstrainingshirtAmount . "  \nSubtotal - $" . $sleevelesstrainingshirtTotal . "\n BRFC Mesh Tanks " . $brfcmeshtankAmount . "  \nSubtotal - $" . $brfcmeshtankTotal . "\n Barrie Rugby Shorts: " . $barrierugbyshortsAmount . "  \nSubtotal - $" . $barrierugbyshortsTotal . "\n BRFC Fleece Scarf: " . $brfcfleecescarfAmount . "  \nSubtotal - $" . $brfcfleecescarfTotal . "\n BRFC Toque: " . $brfctoqueAmount . "  \nSubtotal - $" . $brfctoqueTotal . "\n BRFC Ball Cap: " . $brfcballcapAmount . "  \nSubtotal - $" . $brfcballcapTotal . "\n Anniversary Ball Cap: " . $anniversaryballcapAmount . "  \nSubtotal - $" . $anniversaryballcapTotal . "\n Bleed Blue Snapback: " . $bleedbluesnapbacksAmount . "  \nSubtotal - $" . $bleedbluesnapbacksTotal . "\n Barrie Kit Bag: " . $barriekitbagAmount . "  \nSubtotal - $" . $barriekitbagTotal . "\n Barrie Rugby Ball: " . $barrierugbyballAmount . "  \nSubtotal - $" . $barrierugbyballTotal . "\n Blue and White Rugby Socks: " . $blueandwhiterugbysocksAmount . "  \nSubtotal - $" . $blueandwhiterugbysocksTotal . "\n Golf Shirt: " . $golfshirtAmount . "  \nSubtotal - $" . $golfshirtTotal . "\n Anniversary White Game Jersey: " . $anniversarywhitegamejerseyAmount . "  \nSubtotal - $" . $anniversarywhitegamejerseyTotal . "\n Anniversary Blue Game Jersey: " . $anniversarybluegamejerseyAmount . "  \nSubtotal - $" . $anniversarybluegamejerseyTotal . "\n Barrie Hoodie Sweatshirt: " . $barriehoodiesweatshirtAmount . "  \nSubtotal - $" . $barriehoodiesweatshirtTotal . "\n\n Grand Total: $" . $grandTotal .  " \n\n Payment methods are as follows\n -eTransfer: Please email a REQUEST to eTransfer to equipment.order@barrierugbyclub.com for secure payment reasons. \n\n Sincerely, \n Barrie RFC", $email . "\n" . $name . "\n" . $phone  . "\n" . $message);



		  if(isset($_POST["submit"])){
		  echo "<div class='text-center'><p style='color:#94D3F3; padding-top:20px; background:#0F75BD !important;'>Thank you, your order has been sent, please wait for an email they usually take 1-2 minutes.</br > Do Not Refresh this page or your order will resend.</p></div>";
		  }//end of the email
	  }
	  
	
  ?>
  

 
 
 <?php require_once("header.php"); ?>
 <!--
 <script>
 	$(window).scroll(function(){
    $("#theFixed").css("bottom",Math.min(-20,3000-$(this).scrollTop()));
});
 </script>
 
  <script>
 	$(window).scroll(function(){
    $("#theFixedMobile").css("bottom",Math.min(-20,8500-$(this).scrollTop()));
});
 </script>
 
<div class="row pageHeaderRow">
 	<div class="large-10 medium-10 small-10 columns">
 		<p class="pageHeaderColumn">Apparel</p>
 	</div>
 	<div class="large-2 medium-2 small-2 columns" style="background: white; padding-left: 0px;">
 		<img class="splashImage" src="img/splatter_right.png"/>
 	</div>
 </div>    
    
<a href="#orderForm"><div id="theFixed" class="button scrollingOrderButton show-for-medium-up">Order Now</div></a>
<a href="#orderForm"><div id="theFixedMobile" class="button scrollingOrderButton hide-for-medium-up">Order Now</div></a>


<div class="row">
	<div class="large-12 medium-12 small-12 columns">
		<p class="eventsHeader">Barrie's Apparel, Fill out your order below and recieve an email copy of your reciept</p>
	</div>
</div>
    
    
  <div class="row apparelRow1">
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_tshirt.png"</li>
		  
		  <li class="description">Barrie Rugby T-Shirt</li>
		  <li class="description">Sizes Available: </br >Youth XS - Youth XL </br >Small - 4XL </li>
		  <li class="price">$20.00</li>
		  
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_50Tshirt.png"</li>
		  
		  <li class="description">50th Anniversary T-Shirt</li>
		  <li class="description">Sizes Available: </br >Youth XS - Youth XL </br >Small - 4XL </li>
		  <li class="price">$20.00</li>
		  
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_trainingshirt.png"</li>
		  
		  <li class="description">Training Shirt</li>
		  <li class="description">Sizes Available: </br >Youth Small - Youth Large </br > Adult XS - Adult 4XL </li>
		  <li class="price">$40.00</li>
		  
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_trainingvest.png"</li>
		  
		  <li class="description">Sleeveless Training Shirt</li>
		  <li class="description">Sizes Available: </br >Small - 4XL </li>
		  <li class="price">$35.00</li>
		  
		</ul>
  	</div>
  	
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_meshtank.png"</li>
		  
		  <li class="description">BRFC Mesh Tank</li>
		  <li class="description">Sizes Available: </br >Youth S - Youth XL </br >XSmall - 4XL </li>
		  <li class="price">$30.00</li>
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_shorts.png"</li>
		  
		  <li class="description">Barrie Rugby Shorts</li>
		  <li class="description">Sizes Available: </br >Adult XSmall - Adult 4XL </li>
		  <li class="price">$30.00</li>
		  
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_scarf.png"</li>
		  
		  <li class="description">BRFC Fleece Scarf</li>
		  <li class="description">Sizes Available: </br >One Size Fits All</li>
		  <li class="price">$20.00</li>
		  
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_toque.png"</li>
		  
		  <li class="description">BRFC Toque</li>
		  <li class="description">Sizes Available: </br >One Size Fits All</li>
		  <li class="price">$20.00</li>
		  
		</ul>
  	</div>
  	
  	
  	
  	
  	
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_ballcap.png"</li>
		  
		  <li class="description">Barrie Ball Cap</li>
		  <li class="description">Sizes Available: </br >Strap Fitted</li>
		  <li class="price">$25.00</li>
		  
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_50Ballcap.png"</li>
		  
		  <li class="description">50th Anniversary Ball Cap</li>
		  <li class="description">Sizes Available: </br >Small/Med (6 1/2 - 7 1/4)</br >Med - Large (7 1/8 - 7 5/8)</br >Large/XL (7 1/2 - 8)</li>
		  <li class="price">$30.00</li>
		  
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_snapback.png"</li>
		  
		  <li class="description">Bleed Blue Snapback</li>
		  <li class="description">Sizes Available: </br >One Size Fits All</li>
		  <li class="price">$30.00</li>
		  
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_bag.png"</li>
		  
		  <li class="description">Barrie Kit Bag</li>
		  <li class="description">Sizes Available: </br >One Size Fits All</li>
		  <li class="price">$45.00</li>
		  
		</ul>
  	</div>
  	
  	
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_ball.png"</li>
		  
		  <li class="description">Barrie Rugby Ball</li>
		  <li class="description">Sizes Available: </br >4 and 5</li>
		  <li class="price">$35.00</li>
		  
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_socks.png"</li>
		  
		  <li class="description">Blue and white Rugby Socks</li>
		  <li class="description">Sizes Available: </br >Small and Large</li>
		  <li class="price">$15.00</li>
		  
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_golfshirt.png"</li>
		  
		  <li class="description">Golf Shirt</li>
		  <li class="description">Sizes Available: </br >Small - 4XL</li>
		  <li class="price">$45.00</li>
		  
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_sweatshirt.png"</li>
		  
		  <li class="description">Barrie RFC Hoodie Sweatshirt</li>
		  <li class="description">Sizes Available: </br >Small - 4XL</li>
		  <li class="price">$70.00</li>
		  
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_whitejersey.png"</li>
		  
		  <li class="description">50th Anniversary White Jersey</li>
		  <li class="description">Sizes Available: </br >Very Tight Fitting </br >Small - 4XL</li>
		  <li class="description">Customized numbers and name for jersey can be written in the Message Box at the bottom of the page</li>
		  <li class="price">$80.00</li>
		  
		</ul>
  	</div>
  	
  	
  	
  	<div class="small-12 medium-3 large-3 columns">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_bluejersey.png"</li>
		  
		  <li class="description">50th Anniversary Blue Jersey</li>
		  <li class="description">Sizes Available: </br >Very Tight Fitting </br >Small - 4XL</li>
		  <li class="description">Customized numbers and name for jersey can be written in the Message Box at the bottom of the page</li>
		  <li class="price">$80.00</li>
		  
		</ul>
  	</div>
  	
  	<div class="small-12 medium-3 large-3 columns" style="display:none;">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_golfshirt.png"</li>
		  <li class="price">$2000.00</li>
		  <li class="description">Something else</li>
		  <li class="description">Sizes Available: </br >Small - 4XL </li>
		  
		</ul>
  	</div>
  	<div class="small-12 medium-3 large-3 columns" style="display:none;">
  		<ul class="pricing-table">
		  <li class="title"><img class="apparelShopImages" src="img/apparel/a_whitejersey.png"</li>
		  <li class="price">$99.99</li>
		  <li class="description">An awesome description</li>
		  <li class="description">Sizes Available: </br >Small - 4XL </li>
		  
		</ul>
  	</div>
  	
  </div>
    
    -->
    
    

<!-- Start of Form -->
<!--

<div id="orderForm" class="row contactFormRow1">
    <div class="large-12 medium-12 small-12 columns">
		<p class="eventsHeader">Your Order Form</p>
	</div>
    		 <div class="small-12 medium-12 large-12 xlarge-12 columns">
		            <div class="small-12 medium-12 large-12 xlarge-12 columns">
		                	<form action="apparel.php" method="POST">
		                    	<label for="name">Your Name <span class="star">*</span></label>
		                    	<input type="text" name="name" placeholder="Your Name" required="required" />
		                        <label for="email">Your Email <span class="star">*</span></label>
		                    	<input type="email" name="email" placeholder="Your Email" required="required" />
		                    	<label for="phone">Phone Number<span class="star">*</span></label>
		                    	<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" required="required" />
		                    	
		                    	<label>Your Order</label>
		                    	
		                    	<div class="row">
				                    	<div class="small-3 medium-3 large-3 columns">
				                    		<label for="barrierugbytshirt">Barrie Rugby T-Shirt</label>
					                    	<select name="barrierugbytshirtAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
				                    	
				                    	<div class="small-3 medium-3 large-3 columns">
				                    		<label for="anniversarytshirt">50th Anniversary T-Shirt</label>
					                    	<select name="anniversarytshirtAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
										
										
										
										
										
										<div class="small-3 medium-3 large-3 columns">
				                    		<label for="trainingshirt">Training Shirt</label>
					                    	<select name="trainingshirtAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
				                    	
				                    	<div class="small-3 medium-3 large-3 columns">
				                    		<label for="sleevelesstrainingshirt">Sleeveless Training Shirt</label>
					                    	<select name="sleevelesstrainingshirtAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
										
										
										<div class="small-3 medium-3 large-3 columns">
				                    		<label for="brfcmeshtank">BRFC Mesh Tank</label>
					                    	<select name="brfcmeshtankAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
				                    	
				                    	<div class="small-3 medium-3 large-3 columns">
				                    		<label for="barrierugbyshorts">Barrie Rugby Shorts</label>
					                    	<select name="barrierugbyshortsAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
										
										<div class="small-3 medium-3 large-3 columns">
				                    		<label for="brfcfleecescarf">BRFC Fleece Scarf</label>
					                    	<select name="brfcfleecescarfAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
				                    	
				                    	<div class="small-3 medium-3 large-3 columns">
				                    		<label for="brfctoque">BRFC Toque</label>
					                    	<select name="brfctoqueAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
										
										
										
										
										
										
										<div class="small-3 medium-3 large-3 columns">
				                    		<label for="brfcballcap">BRFC Ball Cap</label>
					                    	<select name="brfcballcapAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
				                    	
				                    	<div class="small-3 medium-3 large-3 columns">
				                    		<label for="anniversaryballcap">50th Anniversary Ball Cap</label>
					                    	<select name="anniversaryballcapAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
										
										<div class="small-3 medium-3 large-3 columns">
				                    		<label for="bleedbluesnapbacks">Bleed Blue Snapback</label>
					                    	<select name="bleedbluesnapbacksAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
				                    	
				                    	<div class="small-3 medium-3 large-3 columns">
				                    		<label for="barriekitbag">Barrie Kit Bag</label>
					                    	<select name="barriekitbagAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
										
										
										<div class="small-3 medium-3 large-3 columns">
				                    		<label for="barrierugbyball">Barrie Rugby Ball</label>
					                    	<select name="barrierugbyballAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
				                    	
				                    	<div class="small-3 medium-3 large-3 columns">
				                    		<label for="blueandwhiterugbysocks">Blue and White Rugby Socks</label>
					                    	<select name="blueandwhiterugbysocksAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
										
										<div class="small-3 medium-3 large-3 columns">
				                    		<label for="golfshirt">Golf Shirt</label>
					                    	<select name="golfshirtAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
				                    	
				                    	<div class="small-3 medium-3 large-3 columns">
				                    		<label for="anniversarywhitegamejersey">50th Anniversary White Game Jersey</label>
					                    	<select name="anniversarywhitegamejerseyAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
										
										
										
										
										
										
										
										
										<div class="small-3 medium-3 large-3 columns">
				                    		<label for="anniversarybluegamejersey">50th Anniversary Blue Game Jersey</label>
					                    	<select name="anniversarybluegamejerseyAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
				                    	
				                    	<div class="small-3 medium-3 large-3 columns">
				                    		<label for="barriehoodiesweatshirt">Barrie Hoodie Sweatshirt</label>
					                    	<select name="barriehoodiesweatshirtAmount" id="options">
					                    	  <option value="0">0</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											  <option value="8">8</option>
											</select>
										</div>
										
										<div class="small-3 medium-3 large-3 columns" style="display:none;">
				                    		
										</div>
				                    	
				                    	<div class="small-3 medium-3 large-3 columns" style="display:none;">
				                    		
										</div>
										
										
										
		      					</div>
		                        
		                        <label for="message">Please fill in the sizes for the items ordered according to the "sizing available" Area </br > Please Keep in Mind: If it is your first year playing you will recieve: Shorts, Socks and a Training shirt complimentary<span class="star">*</span></label>
		                    	<textarea id="message" required="required" name="message" cols="40" rows="10" aria-invalid="false" placeholder="Example:                                                                                                                                                                                                                                               Barrie Rugby T-shirt: XL, XL, M, L                                                                                                                                                                                                                             50th Anniversary White Jersey: 2XL, 'Smith', #11"></textarea>
		                        
		                        
		                        
		                        <input  type="submit" name="submit" class="button contactSendButton1" value="Send" />
		                    </form>
		            </div>
		       </div>
		    
</div>


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
-->

<div class="row text-center">
  <div class="small-12 medium-12 large-12 columns">
    <a href="index.php"><img style="padding-top:100px;" src="img/barrielogo.png"></a><p style="padding-top:100px;" class="eventsHeader">Currently Under Costruction<br>We Will Re-Open in April</p>
    </div>
    </div>
    <?php require_once("footer.php"); ?>