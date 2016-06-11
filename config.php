<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Amsterdam" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=sql112.freecluster.eu;dbname=fceu_18217765_cms" );
define( "DB_USERNAME", "fceu_18217765" );
define( "DB_PASSWORD", "Adihacker1" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 8 );
define( "ADMIN_USERNAME", "adaleni" );
define( "ADMIN_PASSWORD", "adihacker" );
require( CLASS_PATH . "/Article.php" );
 
function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}
 
set_exception_handler( 'handleException' );
?>