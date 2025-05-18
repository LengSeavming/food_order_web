<?php
    include("../connetion.php");

    if (isset($_GET["id"]) && isset($_GET["image_name"]))
    {
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        // Remove image file if exists
        if ($image_name == "") 
        {
            $path = "Image/Foods/" . $image_name;
            $remove = unlink($path);

            if ($remove == false) 
            {
                // Failed to remove image file
                header("location: manage_food.php");
                die();
            }
        }

        // Delete food from database
        $sql = "DELETE FROM tbl_food WHERE id = '$id'";
        $res = mysqli_query($conn, $sql);

        if ($res == true) 
        {
            header("location: manage_food.php");
        } 
        else 
        {
            // Optionally add error handling here
            header("location: manage_food.php");
        }

    }
    else 
    {
        header("location: manage_food.php");
    }
?>
