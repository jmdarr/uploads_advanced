<?php

### PSEUDOCODE ###
# start session
# if not logged in, show header with login link
# if logged in, show header with username/relative links
# show public page
# show footer

session_start();

require_once("includes/session_handler.php");

$session = new session_handler();
/* page.display_header */
if($session->isLoggedIn()) { /* page.display_user_infos */ }
else { /* page.display_registration_link */ }
/* page.display_public_images */
/* page.display_footer */

?>
