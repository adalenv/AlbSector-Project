<!DOCTYPE htm
l>
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
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" type="text/css" href="css/pout.css">
<link rel="stylesheet" type="text/css" href="http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- JQUERY per menu -->
<script src="jquery.sticky.js"></script>
<script>
  $(document).ready(function(){
    $("#menu").sticky({topSpacing:0});
  });
</script>
<script>
$(window).bind("load", function() { 
       
       var footerHeight = 0,
           footerTop = 0,
           $footer = $("#footer");
           
       positionFooter();
       
       function positionFooter() {
       
                footerHeight = $footer.height();
                footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";
       
               if ( ($(document.body).height()+footerHeight) < $(window).height()) {
                   $footer.css({
                        position: "absolute"
                   }).animate({
                        top: footerTop
                   })
               } else {
                   $footer.css({
                        position: "static"
                   })
               }
               
       }

       $(window)
               .scroll(positionFooter)
               .resize(positionFooter)
               
});</script>
<!-- per butonin ON TOP -->
<script src="top.js"></script>

<!--SKRIPT PER IMG QE NDERROHEN dhe SLIDERI NE FUND  -->
<script src="img.js"></script>
<link rel="stylesheet" type="text/css" href="css/slider.css">


<!-- TITULLI -->
<title>Kryefaqja</title>
</head>
<!-- TRUPI -->
<body  onload='wi()'onresize='wi()'>
<div class='page-wrap'style=' margin: 0 auto; position: relative;'>
<div id="dvLoading"></div>
<script>
$(window).load(function(){
  $('#dvLoading').fadeOut(2000);
});
</script>
<script>
function wi(){
	
		var w=window.innerWidth;
		if (w<=500){
		document.getElementById("lll").style.display="none";
	
		
		}
		if(w>=500){
		document.getElementById("lll").style.display="block";
		
	
		}
		
	
	
	}
</script>
<!-- LOGO IMG -->

<header style="width:100%;height:100px;" >
  <div class="modal-container">
  <input id="modal-toggle" type="checkbox">
  <button>Login</button>
  <div class="modal-backdrop">
   <div class="modal-content">
      <label class="modal-close" for="modal-toggle">x</label>


<form id="lform" action="admin.php?action=login" method="post" style="/* width: 50%; */">
	           <input type="hidden" name="login" value="true">
 
 


            <input type="text" name="username" id="username" placeholder="Username" required="" autofocus="" maxlength="20">


            <input type="password" name="password" id="password" placeholder="Password" required="" maxlength="20">

        <div class="buttons">
          <input type="submit" name="login" value="Login">
        </div>
           <a href="admin.php">Admin</a>
      </form>
    </div>
  </div>

</div>
   <center id="lll">
   <a href="index.html" class="logo">
  <span class="m1 big">ALB</span><span class="m2 big">sector</span>
</a>


        <script src="js/index.js"></script>

    </center>
</header>

<body>

<center>
<main >

<!-- MENU LIST  -->
<nav id="menu" >

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


