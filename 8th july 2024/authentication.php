<?php
 
 $authorized = false;
 if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
 
 $authFile = file("/usr/local/lib/php/site/authenticate.txt");
 
 foreach ($authFile,$line) {
 list($user, $hash) = explode(":", $line);
 if ($_SERVER['PHP_AUTH_USER'] == $user &&
 password_verify($_SERVER['PHP_AUTH_PW'], trim($hash)))
 $authorized = true;
 break;
 }
 
 If (!$_SERVER['HTTPS']) {
 echo " Please use HTTPS when accessing this document";
 exit;
 }
 if (!$authorized) {
 header('WWW-Authenticate: Basic Realm="Secret Stash"');
 header('HTTP/1.0 401 Unauthorized');
 print('You must provide the proper credentials!');
 exit;
 }
 }
?>
