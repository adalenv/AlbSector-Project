<?php include "templates/include/header.php" ?>
<div id="img1">
<a id="link" href="image.html">
<img id="image1" alt="FOTO" src="images/3.jpg">
</img>
</a>
</div>
 <div style="background:white">
      <center>
 
<?php foreach ( $results['articles'] as $article ) { ?>
	<div id="post">
      
		  <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" >
		  <div id="hide"><br><br><br><h1 align="center" id='shiko'>Shiko me shume...</h1></div>

		  <div id="image">


		  <iframe id="ifr" width='400px'height='700px' scrolling='no'  frameborder="0" src="demo/<?php echo $article->id?>"></iframe>
		  
		  </div>
		  
            
				<div id="tit">
					<p href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?>

					</p>
					
				</div>
          
			</a>
        </div>
	
<?php } ?>
</center>

      <p><a href="./?action=archive">Article Archive</a></p>
 </div>
      <div id='footer' style='background:white'>  
<div>
	  <ul class="bxslider" >
  <li><img src="images/l1.png" /></li>
  <li><img src="images/l2.jpg" /></li>
  <li><img src="images/l3.png" /></li>
  <li><img src="images/l4.png" /></li>

</ul>
   
<script src='jquery.bxslider.min.js'></script>
        <script src="js/slider.js"></script>
		</div>

 
    </div>
<?php include "templates/include/footer.php" ?>