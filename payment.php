<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tadında-Welcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Tadında</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          
	          <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span></a></li>
			</ul>
	      </div>
	    </div>
	  </nav>
	<!-- END nav -->        
	<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
		<div class="container">
		  <div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-0 bread">Tadında</h1>
	            <h2 class="mb-0 bread">Payment Side</h2>
			  
			</div>
		  </div>
		</div>
	  </div>       

      
        
    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          			<div class="col-md-12 heading-section text-center ftco-animate">
          	
            			<h2 class="mb-4">Payment</h2>
            
         			 </div>
       			 </div>   		
    	</div>
    	<div class="container">
			<?php 
				$link = mysqli_connect("localhost","root","","tadinda"); 
				if($link===false){
   				die("ERROR:Could not connect.".mysqli_connect_error());
				}?> 
				
				
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<h3 style="text-align: center;">Table 1</h3>
						<?php 
						$sql="SELECT * from orders WHERE masa='Table1'";
						$result = $link->query($sql); $total=0;
						foreach($result as $row){?>
						<li> <?php print $row['orderers'];print " " ;print $row['total'];  ?></li>
						<?php $new=substr($row['total'],1); $total=$total+intval($new);
						} print "Total:"; print $total;
						?>
                        
						<button style="margin-right:0px;" class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2">Pay</button>
						
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<h3 style="text-align: center;">Table 2</h3>
						<?php 
						$sql="SELECT * from orders WHERE masa='Table2'  ";
						$result = $link->query($sql);$total=0;
						foreach($result as $row){?>
						<li> <?php print $row['orderers'];print " " ;print $row['total'];  ?></li>
						<?php $new=substr($row['total'],1); $total=$total+intval($new);
						} print "Total:";print $total;
						?>
						<button style="margin-right:0px;" class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2">Pay</button>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<h3 style="text-align: center;">Table 3</h3>
						<?php 
						$sql="SELECT * from orders WHERE masa='Table3' ";
						$result = $link->query($sql);$total=0;
						foreach($result as $row){?>
						<li> <?php print $row['orderers'];print " " ;print $row['total'];  ?></li>
						<?php $new=substr($row['total'],1); $total=$total+intval($new);
						} print "Total:";print $total;
						?>
						<button style="margin-right:0px;" class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2">Pay</button>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<h3 style="text-align: center;">Table 4</h3>
						<?php 
						$sql="SELECT * from orders WHERE masa='Table4' ";
						$result = $link->query($sql);$total=0;
						foreach($result as $row){?>
						<li> <?php print $row['orderers'];print " " ;print $row['total'];  ?></li>
						<?php $new=substr($row['total'],1); $total=$total+intval($new);
						}print "Total:";print $total;
						?>
						<button style="margin-right:0px;" class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2">Pay</button>
    				</div>
    			</div>


    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<h3 style="text-align: center;">Table 5</h3>
						<?php 
						$sql="SELECT * from orders WHERE masa='Table5' ";
						$result = $link->query($sql);$total=0;
						foreach($result as $row){?>
						<li> <?php print $row['orderers'];print " " ;print $row['total'];  ?></li>
						<?php $new=substr($row['total'],1); $total=$total+intval($new);
						} print "Total:";print $total;
						?>
						<button style="margin-right:0px;" class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2">Pay</button>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<h3 style="text-align: center;">Table 6</h3>
						<?php 
						$sql="SELECT * from orders WHERE masa='Table6' ";
						$result = $link->query($sql);$total=0;
                        $total=0;
						foreach($result as $row){?>
						<li> <?php print $row['orderers'];print " " ;print $row['total'];  ?></li>
						<?php $new=substr($row['total'],1); $total=$total+intval($new);
						}print "Total:"; print $total;
                        
						?>
						<button style="margin-right:0px;" class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2">Pay</button>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<h3 style="text-align: center;">Table 7</h3>
						<?php 
						$sql="SELECT * from orders WHERE masa='Table7'";
						$result = $link->query($sql);$total=0;
						foreach($result as $row){?>
						<li> <?php print $row['orderers'];print " " ;print $row['total'];  ?></li>
						<?php $new=substr($row['total'],1); $total=$total+intval($new);
						} print "Total:";print $total;
						?>
						<button style="margin-right:0px;" class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2">Pay</button>

    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<h3 style="text-align: center;">Table 8</h3>
						<?php 
						$sql="SELECT * from orders WHERE masa='Table8'";
						$result = $link->query($sql);$total=0;
						foreach($result as $row){?>
						<li> <?php print $row['orderers'];print " " ;print $row['total'];  ?></li>
						<?php $new=substr($row['total'],1); $total=$total+intval($new);
						} print "Total:";print $total;
						?>
						<button style="margin-right:0px;" class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2">Pay</button>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
		




    

	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row">
				<div class="mouse">
						  <a href="#" class="mouse-icon">
							  <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						  </a>
					  </div>
			</div>
		  <div class="row mb-5">
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Tadında</h2>
				<p>Follow us.</p>
				<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
				  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
				</ul>
			  </div>
			</div>
			
			
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4">
				  
				  <div class="block-23 mb-3">
					<ul>
					  <li><span class="icon icon-map-marker"></span><span class="text">Lekkerhoekie 450-Jr, Centurion</span></li>
					  <li><a href="#"></a></li>
					  <li><a href="#"><span class="icon icon-timer"></span><span class="text">9:00 am-9 pm, Monday Closed</span></a></li>
					  <li><a href="#"><span class="icon icon-phone"></span><span class="text">072 426 5452</span></a></li>
					  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@buyukchamlija.com</span></a></li>
					</ul>
				  </div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-12 text-center">
  
			  <p>
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made by <a href="https://buyukchamlija.co.za
							" target="_blank">Buyuk Chamlija Technology Team</a>
							
						  </p>
			</div>
		  </div>
		</div>
	  </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
                  
  </body>
</html>