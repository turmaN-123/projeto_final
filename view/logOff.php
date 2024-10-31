<?php

session_start(); 
$_SESSION = array();
session_destroy();
header("Location: http://localhost/projeto_final10/projeto_final10/index.php");

exit();
?>
