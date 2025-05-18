
<?php 
    include("../order/menu.php");
   include("../connetion.php");
?>
 <?php 
                if(isset($_POST['submit']))
                {
                    // echo"buton click";
                    $id=$_POST['id'];
                    $title=$_POST['title'];
                    $description=$_POST['description'];
                    $price=$_POST['price'];
                    $curent_image=$_POST['curent_image'];
                    $category=$_POST['category'];
                    $featured=$_POST['featured'];
                    $active=$_POST['active'];
                    //upload image if select

                    if (isset($_FILES['image']['name']))
                    {
                        $image_name = $_FILES['image']['name']; // New image name
                        if ($image_name != "") 
                        {
                            // Sanitize filename
                            $image_name = basename($image_name);
                            $src_path1 = $_FILES["image"]["tmp_name"];// Source path
                            // Destination folder (add trailing slash)
                            $dest_folder = "Image/Foods/";
                            $dest_path1 = $dest_folder . $image_name;
                            $upload = move_uploaded_file($src_path1, $dest_path1);// Upload the image
                            if ($upload == false) 
                            {
                                echo "Upload failed for image";
                                header("location:manage_food.php");
                                die(); // Stop process
                            }
                    
                            // Remove current image if exists
                            if ($curent_image != "") 
                            {
                                $remove_path = $dest_folder . $curent_image;
                                if (file_exists($remove_path)) 
                                {
                                    $remove = unlink($remove_path);
                                    if ($remove == false) 
                                    {
                                        echo "Failed to remove current image";
                                        header("location:manage_food.php");
                                        die();
                                    }
                                }
                            }
                        } 
                        else 
                        {
                            // No new image uploaded
                            $image_name = $curent_image;
                        }
                    } 
                    else 
                    {
                        $image_name = $curent_image;
                    }
                    
                    $sql3="update tbl_food set title='$title',description='$description',price='$price',
                                                image_name='$image_name',category_id='$category',
                                                featured='$featured',active='$active' where id='$id'";
                    $result3=mysqli_query($conn,$sql3);
                    if($result3==true)
                    {
                        header('location:manage_food.php');
                        exit;
                    }
                    else
                    {
                       $image_name=$curent_image;
                        
                    }
                }
                
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update_food.css">
    <title>Document</title>
    <style>
        .main-contain1 {
            background-image: url(https://t3.ftcdn.net/jpg/02/52/12/40/360_F_252124067_aCtp9ZD934RboKmjJzkXiwYDL7XkNjpn.jpg); /* ផ្លូវទៅរករូបភាព */
            background-size: cover;
            background-repeat: no-repeat;
            /* background-position: center; */
            min-height: 100vh;
            padding: 50px;
        }
        .wrapper1 {
            background-color: rgba(255, 255, 255, 0.9); /* បន្ថែម transparency */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
</style>
<?php
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $sql2 = "select * from tbl_food where id='$id'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        //get data
        $title=$row2['title'];
        $description=$row2['description'];
        $price=$row2['price'];
        $curent_image=$row2['image_name'];
        $curent_category=$row2['category_id'];
        $featured=$row2['featured'];
        $active=$row2['active'];
    }
    else
    {
        header("location:manage_food.php");
    }

?>
</head>
<body>
<div class="main-contain1">
    <div class="wrapper1">
        <h1>Update Food</h1>
        <br><br>
        <form action="#" method="post" enctype="multipart/form-data">
            <table class="tbl-31">
                <tr>
                    <td>Title</td>
                    <td>
                        <input type="text" name="title" value="<?php echo $title ?>">
                    </td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>
                        <textarea name="description" cols="30" rows="5"><?php echo $description;?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>
                        <input type="number" name="price" value="<?php echo $price;?>">
                    </td>
                </tr>
                <tr>
                    <td>Current Image</td>
                    <td>
                       <?php 
                            if($curent_image!="")
                            {
                                ?>
                                    <img src="Image/Foods/<?php echo $curent_image;?>" width="120px" style="border-radius: 4px;">
                                <?php
                            }
                            else
                            {
                                echo"Select Image...";
                            }
                       ?>
                    </td>
                </tr>
                <tr>
                    <td>New Image</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="category">
                            <?php
                                $sql="select * from tbl_category where active='Yes'";
                                $result=mysqli_query($conn,$sql);
                                $count=mysqli_num_rows($result);
                                if($count> 0)
                                {
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $category_title=$row['title'];
                                        $category_id=$row['id'];
                                        ?>
                                            <option <?php if($category_id==$category_title){echo "selected";} ?> value="<?php echo $category_id;?>"><?php echo $category_title;?></option>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo"Not Variable";
                                }

                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Featured</td>
                    <td>
                        <input <?php if($featured=='Yes'){echo "checked";}?> type="radio" name="featured" value="Yes"style="cursor: pointer;">Yes
                        <input <?php if($featured=='No'){echo "checked";}?> type="radio" name="featured" value="No"style="cursor: pointer;">No
                    </td>
                </tr>
                <tr>
                    <td>Active</td>
                    <td>
                        <input <?php if($active=="Yes"){echo "checked";}?> type="radio" name="active" value="Yes"style="cursor: pointer;">Yes
                        <input <?php if($active=="No"){echo "checked";}?> type="radio" name="active" value="No"style="cursor: pointer;">No
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="curent_image" value="<?php echo $curent_image;?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" value="Update" name="submit"  class="btn-secondary1">
                    </td>
                </tr>
            </table>
        </form>
           
    </div>
</div>
</body>
</html>
<?php include("../footer_page/footer_menu.php"); ?>
