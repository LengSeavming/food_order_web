<?php
    include("../../connetion.php");
    $id=$_GET["id"];
    $sql="delete from tbl_admin WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result==true)
    {
    //    echo "successfully";
        header("location:manage_admin.php");
    }
    else{
        echo "fail";
        /* header("location:manage_admin.php"); */
    }
    mysqli_close($conn);
?>