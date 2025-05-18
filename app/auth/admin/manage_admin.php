<!DOCTYPE html>
<html lang="en">
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
<body>
    <?php include("../../order/menu.php");
            include("../../connetion.php");
    ?>
     <!-- Main Contanc section -->
    <div class="main-contant">
        <div class="wrapper">
            <h1>Manage Admin</h1>
            <br><br>

          

            <!-- button to add admin -->
             <a href="add_admin.php" class="btn-primary">Add Admin</a>
             <br><br>
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>User Name</th>
                    <th>Active</th>
                    </tr>
                <?php 
                $sql="select * from tbl_admin";
                $result=mysqli_query($conn,$sql);
                $n=1;
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $id=$row['id'];
                        $username=$row['user_name'];
                        $fullname=$row['full_name'];
                        ?>
                            
                            <tr>
                                <td><?php echo $n++; ?></td>
                                <td><?php echo $row['full_name'];?></td>
                                <td><?php echo $row['user_name'];?></td>
                                <td>
                                    <a href="update_password.php ?id=<?php echo $row['id']?>" class="btn-danger">
                                    <i class="fa-solid fa-person-booth"></i> Change</a>
                                    <a href="update_admin.php ?id=<?php echo $row['id']?>" class="btn-secondary">
                                        <i class="fa-solid fa-user-pen"></i> Edit</a>
                                    <a href="delete_admin.php ?id=<?php echo $row['id']?>" class="btn-danger">
                                        <i class="fa-solid fa-trash"></i> Delete</a>
                            
                                </td>

                            </tr>
                        <?php
                    }
            
                ?>
                
            </table>
           
            <div class="clear-flex"></div>
        </div>
       
    </div>
    <?php include("Footer_menu.php"); ?>

</body>
</html>