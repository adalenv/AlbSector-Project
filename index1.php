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
<link rel="stylesheet" type="text/css" href="css/pout.css">
<!-- JQUERY per menu -->
<script src="jquery.sticky.js"></script>
<script>
  $(document).ready(function(){
    $("#menu").sticky({topSpacing:0});
  });
</script>
<!-- per butonin ON TOP -->
<script src="top.js"></script>

<!--SKRIPT PER IMG QE NDERROHEN dhe SLIDERI NE FUND  -->
<script src="img.js"></script>
<link rel="stylesheet" type="text/css" href="css/slider.css">


<!-- TITULLI -->
<title>Kryefaqja</title>
</head>
<!-- TRUPI -->
<body>
<!-- LOGO IMG -->
<header style="width:100%;height:100px;"> 
  <div class="modal-container">
  <input id="modal-toggle" type="checkbox">
  <button>Login</button> 
  <div class="modal-backdrop">
    <div class="modal-content">
      <label class="modal-close" for="modal-toggle">x</label>     
       <form action="admin.php?action=login" method="post" style="width: 50%;">
        <input type="hidden" name="login" value="true" />
 
<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>
 
        <ul>
 
          <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20" />
          </li>
 
          <li>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20" />
          </li>
 
        </ul>
 
        <div class="buttons">
          <input type="submit" name="login" value="Login" />
        </div>
 
      </form>
    </div>          
  </div>
</div>
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
    
    <li><a href="profil.php">Profili</a></li>
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




<br>
<!-- MAIN IMG -->
<div id="img1"> <a id="link" href="http://www.w3schools.com/js/"

onmouseover="this.style.opacity=0.7";
onmouseout="this.style.opacity=1"
> <img id="image1" alt="FOTO" src="images/1.jpg"> </img> </a> </div>
<br>
<!-- DIV poshte fotos -->
<div id="main" width="100%">
  <p align="center" style="background-color:rgba(34, 17, 17,0.6);font-size:25px;font-family:Comic Sans MS, cursive, sans-serif">
  <font size="44">"</font>WORK until your IDOLS become your RIVALS<font size="44">"</font> - Drake</p>
  <p align="center" style="background-color:rgba(34, 17, 17,0.6);font-size:25px;font-family:Comic Sans MS, cursive, sans-serif">
  <font size="44">"</font>WORK until your IDOLS become your RIVALS<font size="44">"</font> - Drake</p>
  <p align="center" style="background-color:rgba(34, 17, 17,0.6);font-size:25px;font-family:Comic Sans MS, cursive, sans-serif">
  <font size="44">"</font>WORK until your IDOLS become your RIVALS<font size="44">"</font> - Drake</p>
</div>
<br>
<!-- FOOTERI -->
<div id="foot"> 
  <!-- MAJTAS -->
  <div id="footm"> </div>
  <!-- DJATHTAS -->
  <div id="footd"> <br>
    <form action="aksion.php">
      <fieldset>
        <legend>Abonohu per njoftmie:</legend>
        Emri:<br>
        <input type="text" name="emri" value="">
        <br>
        Email:<br>
        <input type="text" name="emaili" value="">
        <br>
        <br>
        <input type="submit" value="Dergo">
      </fieldset>
    </form>
  </div>
</div>
<br/>


</div>
<!-- ON TOP -->
 <br>

  <ul class="bxslider" >
  <li><img src="images/l1.png" /></li>
  <li><img src="images/l2.jpg" /></li>
  <li><img src="images/l3.png" /></li>
  <li><img src="images/l4.png" /></li>

</ul>
   
<script src='jquery.bxslider.min.js'></script>
        <script src="js/slider.js"></script>
<a href="#" class="top">&uarr;</a>

</body>
</main>
</center>
</html>