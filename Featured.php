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
					<li><a href="Featured.php">Features</a></li>
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
		<h1>Features</h1>
       <div class="col-sm-4">
        <div class="thumbnail text-center">
          <img src="image\featured\1.jpg">
          <p><strong>biotrex-glucowell-glucosamine-msm-chondroitin-500mg</strong></p>
          <p>MRP 222</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	   <div class="col-sm-4">
        <div class="thumbnail text-center">
          <img src="image\featured\2.jpg">
          <p><strong>Biotrex Glucowell Glucosamine, MSM & Chondroitin 500mg Tablet </strong></p>
          <p>MRP 258</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	   <div class="col-sm-4">
        <div class="thumbnail text-center">
         <img src="image\featured\3.jpg">
          <p><strong>Cadbury Bournvita Lil Champs Chocolate Health Drink Chocolate</strong></p>
          <p>MRP 221</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
    
	     <div class="col-sm-4">
        <div class="thumbnail text-center">
          <img src="image\featured\4.jpg">
          <p><strong>Sri Sri Tattva Aloe Vera Triphala Juice</strong></p>
          <p>MRP 120</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	   <div class="col-sm-4">
        <div class="thumbnail text-center">
          <img src="image\featured\5.jpg">
          <p><strong>Kapiva Ayurveda Aloe Vera Juice </strong></p>
          <p>MRP 192</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	   <div class="col-sm-4">
        <div class="thumbnail text-center">
         <img src="image\featured\6.jpg">
          <p><strong>HealthVit Testosterone Booster Capsule</strong></p>
          <p>MRP 650</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	   <div class="col-sm-4">
        <div class="thumbnail text-center">
          <img src="image\featured\7.jpg">
          <p><strong>Sri Sri Tattva Sudanta Toothpaste</strong></p>
          <p>MRP 80</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	   <div class="col-sm-4">
        <div class="thumbnail text-center">
          <img src="image\featured\8.jpg">
          <p><strong>Jiva Pain Calm Oil</strong></p>
          <p>MRP 168</p>
          <button class="btn">Buy Tickets</button>
        </div>
      </div>
	  
	   <div class="col-sm-4">
        <div class="thumbnail text-center">
         <img src="image\featured\9.jpg">
          <p><strong>Sebamed Baby Wash Extra Soft</strong></p>
          <p>MRP 769</p>
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