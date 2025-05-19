<?php include( "../../order/menu.php"); ?>
<link rel="stylesheet" href="../../food/food.css">
<link rel="stylesheet" href="admin.css">
<div class="main-contant">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>
        <form action="" method="post">
            <table class="tbl-30">
                <tr>
                    <td>Full name</td>
                    <td><input type="text" name="full_name" placeholder="Enter Your name"></td>
    
                </tr>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="user_name" placeholder="Enter Your name"></td>
    
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" placeholder="Enter password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add admin" class="btn-secondary">
                    </td>

                </tr>
            </table>
        </form>


    </div>
</div>


<?php 
 ///process data value from from and save in database
 //check wheather 
 if(isset($_POST['submit'])) 
 {
    //button click
    //get data
    include(__DIR__ . '/../../connection.php');
    $fullname=$_POST['full_name'];
    $username=$_POST['user_name'];
    $password=$_POST['password']; 

    //sql Query to save data
    $sql="INSERT INTO `tbl_admin`( `full_name`, `user_name`, `password`) VALUES ('$fullname','$username','$password')";

    $result = mysqli_query($conn,$sql);
    if($result==true)
    {
        // echo "Data Insert";
        // $_SESSION['add']="Add successfully";
        echo $result."Add successs";
        header("location:manage_admin.php");
    }
    else
    {
        // $_SESSION['add']=" faild for Add admin";
        header("location:manage_admin.php");
    }
    
    


 }
 
 ?>