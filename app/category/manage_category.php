<?php include("../order/menu.php");
    include("../connetion.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link rel="stylesheet" href="manage_category.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Khmer&family=Moul&family=Noto+Serif+Khmer:wght@100..900&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<div class="main-contant">
    <div class="wrapper">
        <h1>Manage Category</h1>
        <br><br>
            <!-- button to add admin -->
             <a href="add_Category.php" class="btn-primary">Add Category</a>
             <br><br>
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Iamge</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
                <?php 
                    $sql="select *from tbl_category";
                    $result=mysqli_query($conn,$sql);
                    $coun=mysqli_num_rows($result);
                    $n=1;
                    if($coun> 0)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $id=$row['id'];
                            $title=$row['title'];
                            $image_name=$row['image_name'];
                            $featured=$row['featured'];
                            $active=$row['active'];
                            $sn=1;
                            ?> 
                                 <tr>
                                    <td><?php echo $n++;?></td>
                                    <td><?php echo $title ;?></td>
                                    <td>
                                        <?php 
                                            if ($image_name != "") 
                                            {
                                                ?>
                                                    <img src="../ASSIGMNENT_APP\image\category<?php echo $image_name;?>"width="100px" style="border-radius: 5px;">
                                                <?php
                                            } 
                                            else 
                                            {
                                                echo "No Image Available";
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $featured ;?></td>
                                    <td><?php echo $active;?></td>
                                    
                                    <td>
                                        <a href="update_category.php ?id=<?php echo $row['id'];?>&image_name=<?php echo $row['image_name'];?>" class="btn-secondary">
                                        <i class="fa-solid fa-user-pen"></i>Edit</a>
                                      
                                        <a href="delete_category.php ?id=<?php echo $row['id'];?>&image_name=<?php echo $row['image_name'];?>" class="btn-danger">
                                        <i class="fa-solid fa-trash"></i>Delete</a>
                                        
                                
                                    </td>
                                </tr>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <td colspan="6">
                                <div class="error">Not Category Adds</div>
                            </td>
                        <?php
                    }
                ?>                           
            </table>
    </div>
   
</div>

<?php include("Footer_menu.php"); ?>