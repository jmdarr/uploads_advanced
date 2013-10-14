<?php

### PSEUDOCODE ###
# start session
# if not logged in, show header with login link
# if logged in, show header with username/relative links
# show public page
# show footer

session_start();

require_once("includes/config.php");
require_once("includes/user.php)";
require_once("includes/page.php");
require_once("includes/mysql_handler.php)";

$config = new config();
$mysql_handler = new mysql_handler($config);
$user = new user();
$page = new page();

/* page.display_header */
if($session->isLoggedIn()) { /* page.display_user_infos */ }
else { /* page.display_registration_link */ }
/* page.display_public_images */
/* page.display_footer */

?>
