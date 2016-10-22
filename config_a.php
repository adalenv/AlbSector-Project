<div style="display:none;">
<?php




    $database=mysqli_connect('localhost','root','','cms');


	$user_username=$_SESSION['username'];
    $sql = "SELECT * FROM mst_admin where loginid='$user_username'";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $det = mysqli_fetch_array($result);
   
?>
</div>