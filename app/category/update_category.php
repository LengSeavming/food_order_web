<?php 
    include("../order/menu.php");
    include(__DIR__ . '/../connection.php');
?>
<?php 
            if(isset($_POST["submit"]))
            {
                $id = $_POST['id'];
                $title=$_POST['title'];
                $curent_image=$_POST['curent_image'];
                $featured=$_POST['featured'];
                $active=$_POST['active'];
                if(isset($_FILES['image']['name']))
                {
                    $image_name=$_FILES['image']['name'];
                    if($image_name !="")
                    {
                        $source_path = $_FILES['image']['tmp_name']; //new file name
                        $target_directory = 'Image\Category'.$image_name; //save data into
                        $upload=move_uploaded_file($source_path,$target_directory);
                        if( $upload==false )
                        {
                            header('location:manag_category.php');
                            die();
                        }  
                        if($curent_image!="")
                        {
                            $source_path="Image\Category".$curent_image;
                            $remove=unlink($source_path);
                            if($remove==false)
                            {
                                header("location:manag_category.php");
                                die();
                            }
                        }
                       
                    }
                    else
                    {
                         $image_name=$curent_iamge;
                    }
                }
                else
                {
                    $image_name=$curent_iamge;
                }
                $sql2="update  tbl_category set title='$title',image_name='$image_name',featured='$featured',active='$active' where id='$id'";
                $res2=mysqli_query($conn,$sql2);
                // $coun=mysqli_num_rows($res1);
                if($res2==true)
                {
                    //update
                    header("location:manag_category.php");
                }
                else
                {
                    $image_name=$curent_iamge;
                }
            }
        ?>
<div class="main-contant">
    <div class="wrapper">
        <h1>Update Category</h1>
        <?php 
        if(isset($_GET["id"]))
        {
            $id = $_GET["id"];
            $sql = "select * from tbl_category where id='$id'";
            $res=mysqli_query($conn,$sql);
            $coun=mysqli_num_rows($res);
            if($coun>0)
            {
                $row=mysqli_fetch_assoc($res);
                $title=$row['title'];
                $curent_image=$row['image_name'];
                $featured=$row['featured'];
                $active=$row['active'];
               
            }
            else
            {
                header('location:manag_category.php');
            }
        }
        else
        {
            header("location:manag_category.php");
        }
        ?>
        <br><br>
        <form action="#" method="post" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title</td>
                    <td>
                        <input type="text" name="title" value="<?php echo $title?>">
                    </td>
                </tr>
                <tr>
                    <td>Curent_image</td>
                    <td>
                        <?php 
                            if($curent_image != "")
                            {
                                ?>
                                    <img src="Image\Category<?php echo $curent_image;?>" width="100px" style="border-radius: 5px;">
                                <?php
                            }
                            else
                            {
                                echo'Select Image';
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
                    <td>Featured</td>
                    <td>
                        <input <?php if($featured=="Yes"){echo "Checked";}?> type="radio" name="featured" value="Yes">Yes
                        <input <?php if($featured=="No"){echo "Checked";}?> type="radio" name="featured" value="No">No
                    </td>
                </tr>
                <tr>
                    <td>Action</td>
                    <td>
                        <input <?php if($active=="Yes") {echo "checked";}?> type="radio" name="active" value="Yes">Yes
                        <input <?php if($active=="No")  {echo "checked";}?> type="radio" name="active" value="No">No
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="curent_image" value="<?php echo $curent_image;?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="update category" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
        
       
    </div>
</div>


<?php include("../footer_page/footer_menu.php"); ?>