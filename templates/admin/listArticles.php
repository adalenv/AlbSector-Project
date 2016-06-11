<?php include "templates/include/header.php" ?>

      <div id="adminHeader">
        <h2>Admin Panel</h2>
        <p>You are logged in as <b style="text-transform: uppercase;"><?php echo htmlspecialchars( $_SESSION['username']) ?></b></p>
        <a href="admin.php?action=logout"?>Log out</a>
      <script src="js/clipboard.min.js"></script>
      <script>
    var clipboard = new Clipboard('.btn');
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
     <div class="input-group">
<input id="foo" type="text" style="text-align:center" value="<?php echo"<iframe src='demo/"?><?php echo $results['totalRows']+1?><?php echo "/' width='400px' height='100%'scrolling='no'frameborder='0' id='ifrall' onload='resizeIframe(this)' >"?>">
<span class="input-group-button">
<button class="btn" type="button" data-clipboard-demo="" data-clipboard-target="#foo">
<img class="clippy" src="images/clippy.svg" width="13" alt="Copy to clipboard">
</button>
</span>
</div>
      </div>

 
      <h1>All Articles</h1>
 
<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>
 
 
<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>
 
      <table>
        <tr>
          <th>Publication Date</th>
          <th>Article</th>
        </tr>
 
<?php foreach ( $results['articles'] as $article ) { ?>
 
        <tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
          <td><?php echo date('j M Y', $article->publicationDate)?></td>
          <td>
            <?php echo $article->title?>
          </td>
        </tr>
 
<?php } ?>

      </table>

      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>

      <p><a href="admin.php?action=newArticle">Add a New Article</a></p>

<?php include "templates/include/footer.php" ?>