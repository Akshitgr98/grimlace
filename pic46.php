<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Shoes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Photo-Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/menu_jquery.js"></script> 
</head>
<body>
<?php
	if(isset($_POST["order"]))
	{	
		session_start();
		$_SESSION["order"]="pic46";
		header("location:orderform.html");
	}
	?>
	<div class="header">	
      <div class="container"> 
  	     <div class="logo">
			<h1><a href="index.html">The Quinn</a></h1>
		 </div>
		 <div class="top_right">
		   <ul>
			<li><a href="index.html">Home</a></li>|
			<li><a href="shoes.php">Shoes</a></li>|
			<li><a href="watches.html">Watches</a></li>
		   </ul>
	     </div>
		 <div class="clearfix"></div>
		</div>
	</div>
	<div class="single">
		<div class="container">
		   <div class="single_box1">
			 <div class="col-sm-5 single_left">
				<img src="images/pic46.jpg" class="img-responsive" alt=""/>
				<br><p class="text-center"><strong>Nike Le Bron 12 <br>(Wheat)</strong></p>
			 </div>
			 <div class="col-sm-7 col_6">
					<h4><b>Description</b></h5>
					<p>Nike LeBron XII (Dunk Force) The three main areas of focus for LeBron James' 12th signature sneaker are cushioning, support, and natural flexibility. Built to enhance James' explosiveness on the court this innovative model features a Megafuse upper that minimizes weight and maximizes breathability, Dynamic Flywire cables that provide lockdown support, Hyperposite wings, and hexagonally-shaped Nike Zoom Air bags in the outsole to enhance natural motion. 
<br><br>
<b>Features & details</b><br><br>
Four visible Nike Zoom units in the forefoot deliver ultra-responsive cushioning, and a maximum-volume Nike Zoom unit in the heel provides excellent impact protection.
New Megafuse technology comfortably locks down your foot while letting it move. Plus, super-strong, ultralight Flywire cables adjust with your foot's natural motion, creating even more lockdown through the midfoot.
Hyperposite wings are fused to the sides of the shoe to provide greater support during sharp cuts. One wing cradles your midfoot while the other cups your heel.
Breathable, one-piece inner sleeve hugs your foot for comfort and support
Full-length Phylon midsole for lightweight cushioning and stability / Translucent rubber outsole for multi-surface traction and durability</p>
				<form method="post"><input type="submit" class="btn_3" value="order" name="order"></form>
				<p class="movie_option"><strong style="color:red">------ Price On Request ------</strong></p>
			</div>
			<div class="clearfix"> </div>
		  </div>
		  
			<div class="tags">
	    	<h4 class="tag_head">Similar Products</h4>
	         <ul class="tags_images">
				<li><a href="pic45.php"><img src="images/pic45.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="pic44.php"><img src="images/pic44.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="pic47.php"><img src="images/pic47.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="pic48.php"><img src="images/pic48.jpg" class="img-responsive" alt=""/></a></li>
				<li class="last"><a href="pic49.php"><img src="images/pic49.jpg" class="img-responsive" alt=""/></a></li>
				<div class="clearfix"> </div>
			 </ul>
			</div>
	    </div>
	</div>
	
	<div class="grid_3">
	  <div class="container">
         <div class="container"><div class="col-md-2"><img src="images/delivery.png" ></div><div class="col-md-10"><ul id="footer-links">
			<li><a href="faq.html">FAQs</a></li>
			<li><a href="contact.html">Contact Us</a></li>
         </ul>
         <p>Copyright © 2016 The Quinn. All Rights Reserved.Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a><br><br>Developed By: Akshit Grover & Akash Sharma</p></div>
	  </div>
	  </div>
	</div>
</body>
</html>		