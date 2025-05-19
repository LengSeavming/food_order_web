<?php 
    include(__DIR__ . '/../connection.php');
    include("../order/menu.php"); 
?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br>

        <?php 
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
            }
        ?>
        <form action="" method="post">
            <table class="tbl-30">
                <tr>
                    <td>Old Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Old password">
                    </td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td>
                        <input type="text" name="new_password" placeholder="New password">
                    </td>
                </tr>

                <tr>
                    <td>Confirm Password</td>
                    <td>
                        <input type="text" name="com_password" placeholder="Comfirm Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <!-- <input type="hidden" name="id" value="<?php echo $id; ?>"> -->
                        <input type="submit" name="submit" value="Change password" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>
<?php 
if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $curent_password=$_POST['password'];
    $new_password = $_POST['new_password'];
    $com_password = $_POST['com_password'];

    $sql="select *from tbl_admin where id='$id' and password='$curent_password'";
    $result=mysqli_query($conn,$sql);
    if($result==true)
    {
        $count=mysqli_num_rows($result);
        if($count==1)
        {
            
            if($new_password==$com_password)
            {
                $sql= "update tbl_admin set password='$new_password' where id='$id'";
                $result1=mysqli_query($conn,$sql);
                if($result1==true)
                {
                    header("location:manage_admin.php");
                }
                else
                {
                    header("location:manage_admin.php");
                }
            }
            else
            {
                header("location:manage_admin.php");
            }
        }
        else
        {
            header("location:manage_admin.php");
        }
    }
}


?>


<?php include("../footer_page/Footer_menu.php");?>