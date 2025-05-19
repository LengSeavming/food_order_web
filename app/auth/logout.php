<?php 
include(__DIR__ . '/../connection.php');
session_destroy();
header("location:from_login.php");

?>