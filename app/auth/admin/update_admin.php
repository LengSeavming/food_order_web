<?php 
    include("../../connetion.php");
    include("../../order/menu.php");
?>
<div class="main-contant">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br>

        <?php 
            $id=$_GET['id'];
            $sql= "select * from tbl_admin where id='$id'";
            $result=mysqli_query($conn,$sql);
            if($result==true)
            {
                $coun=mysqli_num_rows($result);
                if($coun== 1)
                {
                    /* echo"Update Succesfully";
                    header("locatioin:manage_admin.php"); */
                    $row=mysqli_fetch_assoc($result);
                    $fullname=$row['full_name'];
                    $username=$row['user_name'];
                }
                else{
                    echo "not update";
                    header("locatioin:manage_admin.php"); 

                }
            }
        ?>
        <form action="" method="post">
            <table class="tbl-30"> 
                <br>
                <tr>
                    <td>Full Name</td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $fullname?>">
                    </td>
                </tr>
                <tr>
                    <td>UserName</td>
                    <td>
                        <input type="text" name="user_name" value="<?php echo $username?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
 <?php 
    if(isset($_POST["submit"]))
    {
        $id=$_POST['id'];
        $fullname=$_POST['full_name'];
        $username=$_POST['user_name'];

        $sq="update tbl_admin set full_name='$fullname',user_name='$username' where id='$id'";
        $result=mysqli_query($conn,$sq);
        if($result==true)
        {
            header("location:manage_admin.php");
        }
        else{
            echo "fial";
            header("location:manage_admin.php");
        }
    }
 ?>





<?php include("../../footer_page/footer_menu.php"); ?>