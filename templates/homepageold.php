<?php include "templates/include/header.php" ?>
 
      <ul id="headlines">
 
<?php foreach ( $results['articles'] as $article ) { ?>
	<li id="post">
      
		  <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" >
		  <div id="hide"><br><br><br><h1 align="center" color="red">Shiko me shume...</h1></div>
		  
		  <div id="image">
		  <iframe id="ifr"  scrolling='no'  frameborder="0" src=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"></iframe>
		  </div>
		  <p class="summary"><?php echo htmlspecialchars( $article->summary )?></p>
		  </div>
		  
            <span color="white" class="pubDate"><?php echo date('j F', $article->publicationDate)?></span>
				<div id="tit">
					<p  href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?>
					</p>
				</div>
          
			</a>
        </li>
	
<?php } ?>
 
      </ul>
 
      <p><a href="./?action=archive">Article Archive</a></p>
 
<?php include "templates/include/footer.php" ?>