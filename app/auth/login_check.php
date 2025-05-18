<?php 
    if(!isset($_SESSION['user']))
    {
        $_SESSION['not-login']="<div class='success text-center'>Login not Successfully </div>";
        header("location:from_login.php");
    }
    else 
    {
        $_SESSION['not-login']="<div class='Error text-center'>Login not Successfully </div>";
        header("location:from_login.php");
    }
?>