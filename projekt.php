<!DOCTYPE html>
<html>
<!-- KOKA -->
<head >
<!-- Te gjitha-->
<meta charset="unicode">
<script src="jquery.min.js"></script>
<script src='jquery.velocity.min.js'></script>
<link rel="stylesheet" href="css/log.css">
<!-- STILI CSS -->
<link rel="stylesheet" type="text/css" href="style.css">
<!-- JQUERY per menu -->
<script src="jquery.sticky.js"></script>
<script>
  $(document).ready(function(){
    $("#menu").sticky({topSpacing:0});
  });
</script>
<!-- per butonin ON TOP -->
<script src="top.js"></script>

<!-- TITULLI -->
<title>PENS</title>
</head>
<!-- TRUPI -->
<body>
<!-- LOGO IMG -->
<header style="width:100%;height:100px;"> 
   <center>
   <a href="index.html" class="logo">
  <span class="m1 big">ALB</span><span class="m2 big">sector</span>
</a>


        <script src="js/index.js"></script>

    </center>
</header>
<body>

 
<center>
<main>

<!-- MENU LIST  -->
<nav id="menu">

  <ul id="menu-closed"  >
	<li  ><a href="index.php"><img src='images/logo1.png' width='150px'  height='44px'>  </a> </li>
    
    <li><a href="profil.html">Profili</a></li>
    <li><a href="skedar.html">Skedaret</a></li>
    <li><a href="tutoriale.html">Tutoriale</a></li>
    <li><a href="video.html">Video</a></li>
    <li><a href="projekt.php">Projekte</a></li>
    <li><a href="kontakt.html">Kontakt</a></li>
    <li><a href="about.html">Rreth nesh</a></li>
 
     
	<li><a href="#menu-closed">&#215; Close menu</a></li>
		<li><a href="#menu">&#9776; Menu</a></li>
  </ul>
</nav>

<div id="ab">

</div>
<div>
<?php include "pens.php" ?>
</div>
<a href="#" class="top">&uarr;</a>

</body>

</html>