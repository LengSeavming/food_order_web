<?php 
    include("../connetion.php");
    if(isset($_GET["id"]) AND isset($_GET['image_name']))
    {
        echo'Get value to Delete';
        $id=$_GET['id'];
        $image_name=$_GET['image_name'];
        if($image_name=="")
        {
            $path="...ASSIGMNENT_APP\image/category".$image_name;
            $remove=unlink($path);
            if($remove==true)
            {
                header("location:manag_category.php");
                die();
            }
        }

        $sql="Delete from tbl_category where id='$id'";
        $res=mysqli_query($conn,$sql);
        if($res==true)
        {
           header("location:manag_category.php");
        }
        
    }
   
?>