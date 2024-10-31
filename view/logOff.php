<?php

session_start(); 
$_SESSION = array();
session_destroy();
header("Location: http://localhost/projeto_final_dezembro/index.php");

exit();
?>
