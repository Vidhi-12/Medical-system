<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>ONLINEMEDICINE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
	  color:#ffffff;
  }
  .nav-tabs li a {
      color: #;
  }
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #02b7c2;
      border: 0;
      font-size: 14px !important;
	  font-weight: bolder;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #ffffff !important;
	  
  }
  .navbar-nav li a:hover {
      color: #fff !important;
	  background-color: #06ccd9 !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #06ccd9 !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
 </style>
</head>
    
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand gap" href="#myPage"><img src="image/logos.png"class="img-responsive"width="35" height="35"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="index.php">Home</a></li>
		<li><a href="Product.php">Product</a></li>
		<li><a href="ProductFeedback.php">Product Feedback</a></li>
		<li><a href="Contact.php">Contact</a></li>
	  </ul>
	  
	   <ul class="nav navbar-nav navbar-right">
		  <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
       </ul>
	  
    </div>
  </div>
</nav>

<div class="container-fluid padding text-center padding">
  <h1>ONLINEMEDICINE</h1> 
  <p>Medicines and Health Products</p> 
  <form class="form-inline">
    <input type="text" placeholder="Search for Medicines and Health Products">
  </form>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
          <img src="image/banner1.jpg" alt="New York" >
      </div>

      <div class="item">
         <img src="image/banner2.jpg" alt="New York" >    
      </div>
    
      <div class="item">
          <img src="image/banner3.jpg" alt="New York" >
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
		
<div class="container-fluid">
  <div class="row">
		<div class="col-sm-3 text-center"  style=" background-color: #06ccd9; padding-top:2%;" >
			<div class="col-sm-12">
				  <div class="thumbnail">
					<img src="image\home\1.jpg">
					<p><strong>AYUSH</strong></p>
					<p>MRP 300</p>
					<button class="btn">Buy Tickets</button>
				  </div>
			 </div>
			 
			 <div class="col-sm-12">
				  <div class="thumbnail">
					<img src="image\home\2.jpg">
					<p><strong>HEALTH FOOD AND DRINKS</strong></p>
					<p>MRP 300</p>
					<button class="btn">Buy Tickets</button>
				  </div>
			 </div>
			 
            <div class="col-sm-12">
				  <div class="thumbnail">
					<img src="image\home\3.jpg">
					<p><strong>PERSONAL CARE</strong></p>
					<p>MRP 300</p>
					<button class="btn">Buy Tickets</button>
				  </div>
			 </div>
			 
			 <div class="col-sm-12">
				  <div class="thumbnail">
					<img src="image\home\4.jpg">
					<p><strong>LIFESTYLE</strong></p>
					<p>MRP 300</p>
					<button class="btn">Buy Tickets</button>
				  </div>
			 </div>
		</div>
    
		<div class="col-sm-9" style=" background-color: #06ccd9; padding-top:10px;">
			<h1>Home</h1>
		    <h1>Buying and selling medicines online</h1>
			<div class="bodytext">
			<p>Every year, Danes spend billions on medicines. More and more medicines are purchased over the internet.</p>
			<hr>
			</div>
			<h1>India’s Trusted Pharmacy: Purchase Medicines & Drugs Online in India</h1>
			<p>No more running from one chemist store to another when in need of medicines!
			1mg.com brings to you an online medicine store, which can be accessed for all 
			health needs. With 1mg.com, you don’t just buy medicine online, but can also book
			appointment with the best doctors nearby. We are focused towards making healthcare
			accessible and affordable, and so give you plenty of options in terms of medicine 
			substitutes.<br><br>
			With us, you can know about the composition of medicines prescribed to 
			you by your doctor and search for its cheaper but equally effective substitute. With
			online medicine delivery, we believe in taking stress off your shoulders and 
			helping you focus only on your recovery.<br><br>
			We cater to the demands of prescription medicine orders in Delhi – NCR, Indore, Bhopal, Ahmedabad 
			and all major cities in Karnataka, Rajasthan, Tamil Nadu, Telangana, Uttar Pradesh and West Bengal. 
			Non-prescription / Health products are delivered Pan India.<br>
			</p>
			<h1>Reach us for online pharmacy store in India</h1>
			<p>On our website, you will get detailed information about 100K medicines vetted by certified pharmacists.
			You can also attach your prescription online whenever you need to do so.Ayurvedic and homeopathic categories
			are also our forte, and a wide range of medicine is available under these streams. Adding new wings to E-Pharmacy,
			we ensure complete health care for all. The popular Health Products at our website are diabetes devices, Ayurveda 
			and mother & child.<br><br>
			At 1mg.com you can explore various online prescription medicines as well as Health Products. Buying prescription
			drugs online is very simple on 1mg, you just need to search for the medicine, add to cart and if the medicine 
			requires a prescription – you can upload a copy of the prescription from your desktop right there and proceed to
			checkout.You can also buy other health care products online that don’t require a prescription. So shop for online
			health care medicines for your personal and family wellness.<br>
			</p>
			<h1>Book appointment with doctors online</h1>
			<p>If you are looking for the best specialized doctors or hospitals in your locality, then explore our website.
			Booking appointment with doctors is much easy now with our services along with purchasing medicines online. From
			Child Specialist to Gynecologist, Orthopaedician, Dietician, Neurologist, all can be found and accessed easily 
			on our website.<br>
			</p>
			<h1>Diagnostic tests simplified</h1>
			<p>Now, for prescribed tests, you don’t need to wait for hours in physical laboratories and testing centers. 
			This online medicine store India also helps in getting free home sample pickup. You just need to search for 
			prescribed tests and book your request. Various recognized diagnostic labs are registered with us to ensure 
			safe and hassle free tests.
			</p>
		</div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid  well-sm text-center">
  <p> <a href="#">Copyright &copy 2018 VIDHI DHAMA</a></p> 
</footer>
<!-- Footer -->

</body>
<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Feb 2016 01:53:27 GMT -->
</html>