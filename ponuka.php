<?php include('server.php') ?>
<!DOCTYPE html>
<head>
  <title>BAR PONUKA</title>
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
      <a class="navbar-brand" href="index.php">BAR</a><a class="navbar-brand">PONUKA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#pivo">PIVO</a></li>
        <li><a href="#vino">VÍNO</a></li>
        <li><a href="#alkohol">ALKOHOL</a></li>
        <li><a href="#nanuky">NANUKY</a></li>
        <li><a href="#nealko">NEALKO</a></li>
        <li><a href="#kavacaj">KÁVA/ČAJ</a></li>
        <li><a href="#drobnytovar">DROBNÝ TOVAR</a></li>
        <li class="dropdown">        
      </ul>
    </div>
  </div>
</nav>

<!-- PIVO -->
<div id="pivo" class="container text-center">
  <div class="container text-center">
    <br><h2 class="text-center">Vítajte <?php echo $_SESSION['username'] ?>! Nech sa páči, naša ponuka:</h2><br>
    <h3 class="text-center">PIVO</h3>
    <p class="text-center"><br> </p>             
      <ul class="list-group">
          <li class="list-group-item">Pivo Martiner 12% čapované 0,5l  <span class="label label-danger">1€</span></li>
          <li class="list-group-item">Steiger 11% tmavý 0,5l <span class="label label-danger">1€</span><span class="badge"></span></li>
          <li class="list-group-item">Kelt 10% 0,5l fľaša <span class="label label-danger">0,75€</span></li>
          <li class="list-group-item">Kelt 10% 0,5l plech  <span class="label label-danger">0,80€</span></li> 
          <li class="list-group-item">Corgoň 10% 0,5l plech <span class="label label-danger">0,80€</span></li>  
          <li class="list-group-item">Zlatý Bažant Nealko fľaša 0,5l <span class="label label-danger">1,10€</span></li>  
          <li class="list-group-item">Zlatý Bažant Radler 0,5l <span class="label label-danger">1,10€</span></li>  
      </ul>  
      </br></br>    
  </div>
</div>

<!-- VÍNO -->
<div id="vino" class="bg-1">
  <div class="container text-center">
    <h3 class="text-center">VÍNO</h3>
    <p class="text-center"><br> </p>
    <ul class="list-group">
      <li class="list-group-item">Víno biele suché 0,1l  <span class="label label-danger">0,4€</span></li>
      <li class="list-group-item">Víno červené suché 0,1l <span class="label label-danger">0,45€</span><span class="badge"></span></li>
    </ul>
    </br></br>
  </div>
</div>
  
<!-- ALKOHOL -->
<div id="alkohol" class="container text-center">
  <div class="container">
    <h3 class="text-center">ALKOHOL</h3>
    <p class="text-center"><br> </p>
    <ul class="list-group">
      <li class="list-group-item">Slov. Borovička Klasik (40%) 0,04l   <span class="label label-danger">0,65€</span></li>
      <li class="list-group-item">Vodka Jemná Klasik (40%) 0,04l  <span class="label label-danger">0,65€</span><span class="badge"></span></li>
      <li class="list-group-item">Slivka Kopaničiarska (40%) 0,04l  <span class="label label-danger">0,65€</span></li>
      <li class="list-group-item">Slivovica Bošácka (52%) 0,04l  <span class="label label-danger">1,30€</span></li> 
      <li class="list-group-item">Hruška Spiš Originál (40%) 0,04l  <span class="label label-danger">1€</span></li>  
      <li class="list-group-item">Borovička Koniferum(37,5%) 0,04l   <span class="label label-danger">0,80€</span></li>  
      <li class="list-group-item">Vodka Extra Jemná (38%) 0,04l   <span class="label label-danger">0,75€</span></li>  
      <li class="list-group-item">Tuzemský UM (38%) 0,04l  <span class="label label-danger">0,65€</span></li>  
      <li class="list-group-item">Brandy 501 (36%)  0,04l   <span class="label label-danger">1€</span></li>  
      <li class="list-group-item">Martignac (40%) 0,04l   <span class="label label-danger">0,65€</span></li>  
      <li class="list-group-item">Pepermintový Likér (25%) 0,04l    <span class="label label-danger">0,65€</span></li>  
      <li class="list-group-item">GIN  (40%) 0,04l    <span class="label label-danger">€</span></li>  
      <li class="list-group-item">Fernet Bitter Klasik (40%) 0,04l <span class="label label-danger">0,85€</span></li>  
      <li class="list-group-item">Karpatská Horká (25%) 0,04l   <span class="label label-danger">0,65€</span></li>  
      <li class="list-group-item">Demänovka Horká (38%) 0,04l   <span class="label label-danger">1€</span></li>  
      <li class="list-group-item">Tatratea Karloff (52%) 0,04l   <span class="label label-danger">1,20€</span></li>  
      <li class="list-group-item">Becherovka (38%) 0,04l   <span class="label label-danger">1€</span></li>  
    </ul>
    </br></br>    
  </div>
</div>

<!-- NANUKY -->
<div id="nanuky" class="bg-1">
  <div class="container text-center">
    <h3 class="text-center">NANUKY (letná sezóna)</h3>
    <p class="text-center"><br> </p>
    <ul class="list-group">
      <li class="list-group-item">Ruská zmrzlina smotanová 220ml  <span class="label label-danger">0,70€</span></li>
      <li class="list-group-item">Tortička mrazený krém 250ml<span class="label label-danger">0,75€</span><span class="badge"></span></li>
      <li class="list-group-item">Tipa Frost Jahůdka 50ml <span class="label label-danger">0,60€</span></li>
      <li class="list-group-item">Tipa Frost Višeň 50ml<span class="label label-danger">0,60€</span></li> 
      <li class="list-group-item">Kornút Pistácie 110ml <span class="label label-danger">0,60€</span></li>  
      <li class="list-group-item">Kornút Karamel 110ml <span class="label label-danger">0,60€</span></li>  
      <li class="list-group-item">Kornút Brus/Granát jablko 110ml <span class="label label-danger">0,60€</span></li>  
      <li class="list-group-item">Pinko Pinkáčik Vanilka 45ml <span class="label label-danger">0,30€</span></li>  
      <li class="list-group-item">Pinko Cartatto Vanilka 120ml<span class="label label-danger">0,55€</span></li>  
      <li class="list-group-item">Vodový krém Jahoda 50ml <span class="label label-danger">0,55€</span></li>  
      <li class="list-group-item">Vodový krém Kola 50ml <span class="label label-danger">0,40€</span></li>  
      <li class="list-group-item">Pinko Cartatto Čokoláda 120ml <span class="label label-danger">0,40€</span></li>  
    </ul>
    </br></br>     
  </div>
</div>

<!-- NEALKO -->
<div id="nealko" class="container text-center">
  <div class="container">
    <h3 class="text-center">NEALKO</h3>
    <p class="text-center"><br> </p>
    <ul class="list-group">
      <li class="list-group-item">Kofola Originál 0,1l<span class="label label-danger">0,15€</span></li>
      <li class="list-group-item">Limonáda 0,33l<span class="label label-danger">0,45€</span><span class="badge"></span></li>
      <li class="list-group-item">Ovocný nápoj Lesná jahoda 250ml<span class="label label-danger">0,20€</span></li>
      <li class="list-group-item">Ovocný nápoj Pomaranč 250ml <span class="label label-danger">0,20€</span></li> 
      <li class="list-group-item">Ovocný nápoj Jablko 250ml<span class="label label-danger">0,20€</span></li>  
      <li class="list-group-item">Pepsi 0,33l plech <span class="label label-danger">0,80€</span></li> 
      <li class="list-group-item">Sprite 0,1l<span class="label label-danger">0,15€</span></li> 
      <li class="list-group-item">Tonic 0,1l <span class="label label-danger">0,15€</span></li> 
      <li class="list-group-item">Coca Cola 0,1l <span class="label label-danger">0,15€</span></li> 
      <li class="list-group-item">Voda minerálna 0,1l <span class="label label-danger">0,10€</span></li> 
    </ul>
    </br></br>
 </div>
</div>

<!-- KÁVA/ČAJ -->
<div id="kavacaj" class="bg-1">
  <div class="container text-center">
    <h3 class="text-center">KÁVA/ČAJ</h3>
    <p class="text-center"><br> </p>
    <ul class="list-group">
      <li class="list-group-item">Káva zalievaná  <span class="label label-danger">0,70€</span></li>
      <li class="list-group-item">Čaj čierny<span class="label label-danger">0,60€</span><span class="badge"></span></li>
      <li class="list-group-item">Čaj ovocný<span class="label label-danger">0,70€</span></li>
      <li class="list-group-item">Cukor porciovaný 5g <span class="label label-danger">0,10€</span></li> 
      <li class="list-group-item">Smotana do kávy 10g <span class="label label-danger">0,10€</span></li>  
    </ul>
    </br></br>
  </div>
</div>

<!-- DROBNY TOVAR -->
<div id="drobnytovar" class="container text-center">
  <div class="container">
    <h3 class="text-center">DROBNÝ TOVAR</h3>
    <p class="text-center"><br> </p>
    <ul class="list-group">
      <li class="list-group-item">Oblátka CBA 40g <span class="label label-danger">0,30€</span></li>
      <li class="list-group-item">SEDITA Mila 50g<span class="label label-danger">0,50€</span><span class="badge"></span></li>
      <li class="list-group-item">JOJO Delfíniky 80g <span class="label label-danger">0,80€</span></li>
      <li class="list-group-item">JOJO Rybičky 80g <span class="label label-danger">0,80€</span></li> 
      <li class="list-group-item">JOJO Medvedíky 80g <span class="label label-danger">0,80€</span></li>  
      <li class="list-group-item">Čokoláda Figaro Vyšne 90g <span class="label label-danger">1,10€</span></li>  
      <li class="list-group-item">Čokoláda Figaro Mliečna 90g<span class="label label-danger">1,10€</span></li>  
      <li class="list-group-item">Čokoláda Figaro Horká 90g <span class="label label-danger">1,10€</span></li>  
      <li class="list-group-item">Čokoláda Figaro Jahody 90g <span class="label label-danger">1,10€</span></li>  
      <li class="list-group-item">Tyčinky DRU 90g<span class="label label-danger">€</span></li>  
      <li class="list-group-item">Tyčinky DRU 45g <span class="label label-danger">0,50€</span></li>  
      <li class="list-group-item">Arašidy solené 100g <span class="label label-danger">0,70€</span></li>  
      <li class="list-group-item">Chrumky Arašidové 60g <span class="label label-danger">0,60€</span></li>  
      <li class="list-group-item">Oravské Chipsy  Solené 75g <span class="label label-danger">0,70€</span></li>  
      <li class="list-group-item">Pelendrek Duplex <span class="label label-danger">0,50€</span></li>  
      <li class="list-group-item">Lízatko <span class="label label-danger">0,15€</span></li>     
    </ul>
    </br></br>
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