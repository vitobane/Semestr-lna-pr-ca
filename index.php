<!DOCTYPE html>
<head>
  <title>BAR POD LIPAMI</title>
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
      <a class="navbar-brand" href="#myPage">BAR POD LIPAMI</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">FOTO</a></li>
        <li><a href="#otvaraciehodiny">OTVÁRACIE HODINY</a></li>
        <li><a href="#ponuka">PONUKA</a></li>
        <li><a href="#kontakt">KONTAKT</a></li>
        
        <li class="dropdown">
        <li class="dropdown"> 
  <a href="#" class="dropdow" data-toggle="dropdown" data-close-others="true">
    <img src="svk.png" width="35" height="20">
  </a>
  <ul class="dropdown-menu pull-right">
    <li>
      <a href="indexUK.php">
        <img src="uk.png" width="35" height="20" >
        <span>ENGLISH</span>
      </a>
  </ul>
</li>
      </ul>
    </div>
  </div>

</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Foto -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="bar4.jpg" alt="Bar" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Bar pod lipami</h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="bar6.jpg" alt="Bar" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Bar pod lipami</h3>
          <p></p>
        </div>      
      </div>
    
      <div class="item">
        <img src="bar5.jpg" alt="Bar" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Bar pod lipami</h3>
          <p></p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Predchádzajúca</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Dalšia</span>
    </a>
</div>

<!-- Otvaracie hodiny -->
<div id="otvaraciehodiny" class="index text-center">
  <h3>OTVÁRACIE HODINY</h3>
  <p>Pondelok - Piatok  </p> </br>
  <p>17:00 - 21:00</p> </br>
  <p>Sobota - Nedeľa  </p> </br>
  <p>17:00 - 21:00</p> </br>
  <p> 10:00 - 12:00</p> 
  <br>
</div>

<!-- Ponuka -->
<div id="ponuka" class="bg-1">
  <div class="index text-center">
    <h3 class="text-center">VYBRANÁ PONUKA</h3>
    <p class="text-center"><br> </p>
    <ul class="list-group">
      <li class="list-group-item">Pivo Martiner 12% čapované -0,5l -  <span class="label label-danger">1€</span></li>
      <li class="list-group-item">Zlatý Bažant Radler  -0,5l - <span class="label label-danger">1,10€</span><span class="badge"></span></li>
      <li class="list-group-item">Kofola Originál -0,5l - <span class="label label-danger">0,75€</span></li>
      <li class="list-group-item">Vodka Klasik 40% -0,04l - <span class="label label-danger">0,65€</span></li> 
      <li class="list-group-item">Víno biele suché -0,01l - <span class="label label-danger">0,40€</span></li>  
    </ul>
    <h3 class="text-center"><a href="login.php" target="_self">CELÁ PONUKA TU!</a></h3> 
    </div>
  </div>
  
<!-- Kontakt -->
<div id="kontakt" class="index">
  <h3 class="text-center">KONTAKT</h3> 
  <div class="text-center">
    <div class="text-center">
      <p><a href="https://maps.google.com/maps?q=bar%20pod%20lipami&t=&z=13&ie=UTF8&iwloc=&output=embed" target="_blank">
        <span class="glyphicon glyphicon-map-marker"></span>Gôtovany, Fiačice</a></p> 
      <p><span class="glyphicon glyphicon-phone"></span>Tel: +421 44/559 92 73</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: stetkapavol1@gmail.com</p>
    </div>
  </div>
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