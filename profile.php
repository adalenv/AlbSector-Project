<?php include "templates/include/header.php" ?>
<div style="display:none">
<?php  

	          $database=mysqli_connect('localhost','root','','cms');
	$user_username=$_SESSION['username'];
    $sql = "SELECT * FROM mst_admin where loginid='$user_username'";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $det = mysqli_fetch_array($result);


 ?>
 </div>

<?php
$dir = opendir('profiles/'.$user_username);
while ($file = readdir($dir)) {
    if ($file == '.' || $file == '..') {
        continue;
    }

    echo '<a href="';
	echo $file;
	echo '">';
	echo $file;
	echo '</a></br>';
	
}
closedir($dir);
?>
<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="/-/bootstrap/css/bootstrap.css" type="text/css"></link>
<link rel="stylesheet" href="/-/style.css" type="text/css"></link>
<title>marmalade-repo - for all your EmacsLisp needs</title>
</head>
<body>
${header}
<div id="blurb" class="profile">
<div class="container">
<div class="row">
    <h1>${username} @ marmalade-repo</h1>
    <p>${username} has provided the following packages to Emacs on marmalade:</p>

    <ul>
        ${package-list}
    </ul>
</div>
</div>
</div>
<footer>
    <div>
         <ul class="inline">
             <li><a href="/terms">terms</a></li>
             <li><a href="/docs">docs</a></li>
             <li><a href="https://github.com/nicferrier/elmarmalade/issues">issues</a></li>
             <li><a href="http://nic.ferrier.me.uk">(C) Nic Ferrier 2013-2014</a></li>
         </ul>
     </div>
</footer>
</body>
</html>