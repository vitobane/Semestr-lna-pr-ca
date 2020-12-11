<?php include('serverUK.php') ?>
<!DOCTYPE html>
<head>
  <title>BAR LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="icon" href="favicon.png" type="png" sizes="32x32">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
  
<!-- Navbar -->

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="indexUK.php">BAR POD LIPAMI</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">       
        <li><a href="registerUK.php">REGISTRATION</a></li>       
        <li class="dropdown">        
      </ul>
    </div>
  </div>
</nav>

<!-- PRIHLASENIE -->

<div class="index text-center">
  <h2>To view our entire offer, you need to log in.</h2><br>
  <h3>LOGIN</h3>
  <center>
 <?php include('errors.php'); ?> 
 <form action="loginUK.php" method="post">
    <div class="form-group">
      <label for="pwd">Name:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Name" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <button type="submit" class="btn btn-default"name="login_user">SIGN IN</button>

    <br><br>
    <h2>If you have not created an account yet, you need to <a href="registerUK.php" target="_self">REGISTER</a>!</h2>
 </form>
</center>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="HORE">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>® Bar pod Lipami </br>© 2020 by Pavol Štetka </p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>