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
		$_SESSION["order"]="pic60";
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
				<img src="images/pic60.jpeg" class="img-responsive" alt=""/>
				<br><p class="text-center"><strong>Adidas Neo (Gray)</strong></p>
			 </div>
			 <div class="col-sm-7 col_6">
					<h4><b>Description</b></h5><br>
					<p>Adidas presents these neo shoes for men that are especially designed for athletes.navy blue in colour, these lace-ups exhibit breathable nylon mesh upper and mesh lining that ensure better breathability to your feet. Furthermore, the Ultra Boost outsole ensures ultimate comfort and provides better traction on different surfaces.<br>
<br><b>Features & details</b><br>
<br>Material: Mesh
<br>Closure Type: Lace-Up
<br>Lifestyle: sport
<br>Purpose: Running</p>
 <br>
				<p class="movie_option"><strong>MRP: ₹ </strong><strike style="color:red">7,000</strike></p>
				<p class="movie_option"><strong>Our Price: ₹ </strong>2,800</p>
				<form method="post"><input type="submit" class="btn_3" value="order" name="order"></form>
			</div>
			<div class="clearfix"> </div>
		  </div>
		  
			<div class="tags">
	    	<h4 class="tag_head">Similar Products</h4>
	         <ul class="tags_images">
				<li><a href="pic2.php"><img src="images/pic2.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="pic3.php"><img src="images/pic3.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="pic5.php"><img src="images/pic5.jpg" class="img-responsive" alt=""/></a></li>
				<li><a href="pic4.php"><img src="images/pic4.jpg" class="img-responsive" alt=""/></a></li>
				<li class="last"><a href="pic6.php"><img src="images/pic6.jpg" class="img-responsive" alt=""/></a></li>
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