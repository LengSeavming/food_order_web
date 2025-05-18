<?php include("../order/menu.php");
include("../connetion.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Khmer&family=Moul&family=Noto+Serif+Khmer:wght@100..900&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<div class="main-contant">
    <div class="wrapper">
        <h1>Manage Food</h1>
        <br><br>
            <!-- button to add admin -->
             <a href="add_food.php" class="btn-primary">Add Foods</a>
             <br><br>
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
                <?php
                    $sql="select * from tbl_food";
                    $res=mysqli_query($conn,$sql);
                    $count=mysqli_num_rows($res);
                    $ns=1;
                    if($count>0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id=$row['id'];
                            $title=$row['title'];
                            $price=$row['price'];
                            $image_name=$row['image_name'];
                            $featured=$row['featured'];
                            $active=$row['active'];
                           
                            ?>
                            <tr>
                                <td>
                                    <?php echo $ns++; ?>
                                </td>
                                <td>
                                    <?php echo $title; ?>
                                </td>
                                <td>
                                    $<?php echo $price; ?>
                                </td>
                                <td>
                                    <?php  
                                         if($image_name !="")
                                         {
                                            ?>
                                                <img src="Image/Foods/<?php echo $image_name;?>"width="100px" style="border-radius: 4px;">
                                            <?php
                                         }
                                    ?>
                                   
                                </td>
                                <td>
                                    <?php echo $featured; ?>
                                </td>
                                <td>
                                    <?php echo $active; ?>
                                </td>        
                                <td>
                                    <a href="Update_food.php?id=<?php echo $id;?>&image_name=<?php echo $image_name;?>" class="btn-secondary">
                                        <i class="fa-solid fa-user-pen"></i> Edit</a>
                                    
                                    <a href="Delete_food.php ?id=<?php echo $id;?>&image_name=<?php echo $image_name;?>" class="btn-danger">
                                        <i class="fa-solid fa-trash"></i> Delete</a>
                                </td>

                            </tr>
                            <?php
                        }
                    }
                ?>
            </table>
    </div>
   
</div>
<?php include("../footer_page/footer_menu.php"); ?>