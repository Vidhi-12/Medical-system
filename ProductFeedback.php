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

<div class="container-fluid " style=" background-color: #06ccd9; height:100%;padding-top:6%;">
<h1 class="text-center">Customer Feedback</h1>
</div>

<div class="container-fluid " style=" background-color: #06ccd9; height:100%;">
<div class="container">
    <form>
	<div class="form-group">
      <label for="text">Customer ID:</label>
      <input type="text" class="form-control" id="text" name="ID" placeholder="Customer ID">
    </div>
    <div class="form-group">
      <label for="text">Customer Name:</label>
      <input type="text" class="form-control" id="text" name="Name"  placeholder="Customer Name">
    </div>
    <div class="form-group">
      <label for="text">Customer Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email">
    </div>
	<div class="form-group">
      <label for="email">Customer Contact_No:</label>
      <input type="email" class="form-control" name="Contact_No" id="text" placeholder="Contact_No">
    </div>
	<div class="form-group">
      <label for="text">Product Title:</label>
      <input type="text" class="form-control" name="Title"  id="text" placeholder="Product Title">
    </div>
	<div class="form-group">
      <label for="comment">Product Feedback:</label>
      <textarea class="form-control" rows="5" name="Details" id="comment"></textarea>
    </div>
	<div class="form-group">
      <label for="text">Date:</label>
      <input type="date" class="form-control" id="text" name="Date" placeholder="Contact Date">
    </div>
	<button type="submit" class="btn btn-default">Send Feedback</button>
  </form>
</div>
</div>

<!-- Footer -->
<footer class="container-fluid  well-sm text-center">
  <p> <a href="#">Copyright &copy 2018 VIDHI DHAMA</a></p> 
</footer>
<!-- Footer -->

</body>
</html>