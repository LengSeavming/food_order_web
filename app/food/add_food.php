<?php 
    include("../order/menu.php");
    include("../app/connetion.php");
?>
 <?php
            if(isset($_POST['submit']))
            {
                $title=$_POST['title'];
                $description=$_POST['description'];
                $price=$_POST['price'];
                $category=$_POST['category'];
                if(isset($_POST['featured']))
                {
                    $featured=$_POST['featured'];
                }
                else
                {
                    $featured="No";
                }

                if(isset($_POST['active']))
                {
                    $active=$_POST['active'];
                }
                else
                {
                    $active="No";
                }
              
                if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "")
                {
                
                    $image_name = $_FILES['image']['name'];
                    //select image
                    if($image_name !="")
                    {
                       
                        $source_path = $_FILES['image']['tmp_name']; //new file name
                        $target_directory = 'Image/Foods/'.$image_name;
                        //save data into
                        $upload=move_uploaded_file($source_path,$target_directory);
                        if( $upload==false )
                        {
                            header('location:add_food.php');
                            die();
                        }  
                    }
                
                }
                else
                {
                    $image_name="";
                }
                $sql3 = "INSERT INTO tbl_food (title, description, price, image_name, 
                                                category_id, featured, active) 
                VALUES ('$title', '$description', '$price', '$image_name', 
                        '$category', '$featured', '$active')";
       
                $result3 = mysqli_query($conn, $sql3);
                if ($result3 == true) 
                {
                    header('location:manage_food.php');
                    exit;
                } 
                else
                {
                    echo "<div style='color:red;'>Failed to add food.</div>";
                }
            }
        ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="admin.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../category/manage_category.css">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Khmer&family=Moul&family=Noto+Serif+Khmer:wght@100..900&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        .main-container1 {
            background-image: url(https://t3.ftcdn.net/jpg/02/52/12/40/360_F_252124067_aCtp9ZD934RboKmjJzkXiwYDL7XkNjpn.jpg); /* ផ្លូវទៅរករូបភាព */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
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

</head>
<div class="main-container1">
    <div class="wrapper1">
        <h1>Add Food</h1>
        <br><br>
        <form action="" method="post" enctype="multipart/form-data">
            <table class="tbl-30_1">
                <tr>
                    <td>Title</td>
                    <td>
                        <input type="text" name="title" placeholder="enter title">
                    </td>
                </tr>
                <tr>
                    <td>Discription</td>
                    <td>
                        <textarea name="description" rows="4" cols="22"  placeholder="Description of the foods"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>
                        <input type="number" name="price">
                    </td>
                </tr>
                <tr>
                    <td>Select Image</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="category" class="select">
                            <?php 
                                // Fetch active categories
                                $sql5 = "SELECT * FROM tbl_category WHERE active='Yes'";
                                $res5 = mysqli_query($conn, $sql5);

                                if ($res5  && mysqli_num_rows($res5)> 0) 
                                {
                                    while ($row = mysqli_fetch_assoc($res5)) 
                                    {
                                        $id = $row['id'];
                                        $title = $row['title'];
                                        ?>
                                            <option value="<?php echo $id;?>"><?php echo $title;?></option>
                                        <?php
                                        // echo "<option value='$id'>$title</option>";
                                    }
                                } 
                                else 
                                {
                                    // No category found
                                    ?>
                                        <option value="0">No Category Found</option>
                                    <?php
                                }
                            ?>
                        </select>
                    </td>
                <tr>
                    <td>Featured</td>
                    <td>
                        <input type="radio" name="featured" value="yes"style="cursor: pointer;">Yes
                        <input type="radio" name="featured" value="No"style="cursor: pointer;">No
                    </td>
                </tr>
                <tr>
                    <td>
                        Active
                    </td>
                    <td>
                        <input type="radio" name="active" value="yes" style="cursor: pointer;">Yes
                        <input type="radio" name="active" value="No"style="cursor: pointer;">No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add food" class="btn-secondary">
                    </td>
                </tr>
        
            </table>
        </form>
       
    </div>
</div>
<?php include("../footer_page/footer_menu.php")?>