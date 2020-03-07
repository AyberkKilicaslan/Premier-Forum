<?php
 
session_start();
 
ob_start();
 
session_destroy();
 
header("Refresh: 0.1; url=index.php");
 
?>