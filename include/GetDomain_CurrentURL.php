<?php
// Get Domain Current URL
 $GetDomain_CurrentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 

 //echo("$GetDomain_CurrentURL");

?>
