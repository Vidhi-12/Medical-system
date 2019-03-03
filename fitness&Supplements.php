<!DOCTYPE html>
<html lang="en">
<head>

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

<div class="container-fluid">
  <div class="row">
      <div class="col-sm-3"  style=" background-color: #06ccd9;" >
			<div class="left">
				<ul id="myMenu">
					<li><a href="Featured.php">Featured</a></li>
					<li><a href="fitness&Supplements.php">Fitness & Supplements</a></li>
					<li><a href="Diabetes.php">Diabetes</a></li>
					<li><a href="HealthcareDevices.php">Healthcare Devices</a></li>
					<li><a href="PersonalCare.php">Personal Care</a></li>
					<li><a href="HealthConditions.php">Health Conditions</a></li>
					<li><a href="Ayurveda.php">Ayurveda</a></li>
					<li><a href="Homeopathy.php">Homeopathy</a></li>
				</ul>
			</div>
	  </div>
    
    <div class="col-sm-9" style=" background-color: #06ccd9; padding-top:10px;">
		<h1>fitness & Supplements</h1>
       <div class="col-sm-4">
        <div class="thumbnail text-center">
          <img src="image\featured\11.jpg">
          <p><strong>Himalaya Wellness AyurSlim Weight Management Capsule</strong></p>
          <p>MRP 225</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	    <div class="col-sm-4">
        <div class="thumbnail text-center">
          <img src="image\featured\18.jpg">
          <p><strong>Vissco Tonomatic Exerciser 1001 Universal</strong></p>
          <p>MRP 638</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	   <div class="col-sm-4">
        <div class="thumbnail text-center">
         <img src="image\featured\13.jpg">
          <p><strong>Herbalife Afresh Energy Drink Mix Lemon</strong></p>
          <p>MRP 573</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
    
	   <div class="col-sm-4">
        <div class="thumbnail text-center">
          <img src="image\featured\14.jpg">
          <p><strong>Protinex Powder Vanilla delight</strong></p>
          <p>MRP 468</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	   <div class="col-sm-4">
        <div class="thumbnail text-center">
          <img src="image\featured\15.jpg">
          <p><strong>Axiom Aloevera Diabetes Cod-32 Juice</strong></p>
          <p>MRP 338</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	   <div class="col-sm-4">
        <div class="thumbnail text-center">
         <img src="image\featured\16.jpg">
          <p><strong>MuscleBlaze Mass Gainer XXL <!---Chocolate---></strong></p>
          <p>MRP 2587</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	  
	   <div class="col-sm-4">
        <div class="thumbnail text-center">
          <img src="image\featured\17.jpg">
          <p><strong>Omron HN-286 Digital Weighing Scale</strong></p>
          <p>MRP 1806</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	  <div class="col-sm-4">
        <div class="thumbnail text-center">
          <img src="image\featured\12.jpg">
          <p><strong>HealthKart Protein Powder Chocolate</strong></p>
          <p>MRP 881</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	  <div class="col-sm-4">
        <div class="thumbnail text-center">
         <img src="image\featured\10.jpg">
          <p><stron>HealthViva Calcium with Vitamin D3 Tablet</strong></p>
          <p>MRP 299</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	</div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid  well-sm text-center">
  <p> <a href="#">Copyright &copy 2018 VIDHI DHAMA</a></p> 
</footer>
<!-- Footer -->

</body>
</html>