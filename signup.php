<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up Form</title>

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style1.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/hideShowPassword.min.js"></script>
</head>
<body>
    
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
    
<div class="main">
<section class="signup">

<div class="container">
<div class="signup-content">
<form method="POST" id="signup-form" class="signup-form">
<h2 class="form-title">SIGN UP</h2>
<div class="form-group">
<input type="text" class="form-input" name="name" id="name" placeholder="Your Name" />
</div>
<div class="form-group">
<input type="email" class="form-input" name="email" id="email" placeholder="Your Email" />
</div>
<div class="form-group">
<input type="password" class="form-input" name="password" id="password" placeholder="Password" />
<span toggle="#password" class="glyphicon glyphicon-eye-open field-icon toggle-password"></span>
</div>
<div class="form-group">
<input type="password" class="form-input" name="re_password" id="re_password" placeholder="Confirm your password" />
</div>
<div class="form-group">
<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
</div>
<div class="form-group">
<input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
</div>
</form>
<p class="loginhere">
Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
</p>
</div>
</div>
</section>
</div>

<script>
$('#password + .glyphicon').on('click', function() {
$(this).toggleClass('glyphicon-eye-close').toggleClass('glyphicon-eye-open'); // toggle our classes for the eye icon
$('#password').togglePassword(); // activate the hideShowPassword plugin
});
    
</script>
    
</body>
</html>