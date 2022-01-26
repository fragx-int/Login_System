<?php

session_start();
$_SESSION = array();
session_destroy();
header("location: login.php");
// Login system developed by fragX
?>
