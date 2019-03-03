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

<div class="container-fluid " style=" background-color: #06ccd9; padding-top:15%; padding-bottom:10%;">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5 well-lg" >
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Medicines and Health Products</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 9211420</p>
      <p><span class="glyphicon glyphicon-envelope"></span> ONLINEMEDICINE</p>
    </div>
    <div class="col-sm-7 well-lg">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
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