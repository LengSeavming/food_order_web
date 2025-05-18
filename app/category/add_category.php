<?php include("../order/menu.php"); 
        include("../connetion.php");
?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Add Category</h1>
        <br><br>
        <form action="" method="post" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title</td>
                    <td>
                        <input type="text" name="title" placeholder="Enter title">
            
                    </td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td>Featured:</td>
                    <td>
                        <input type="radio" name="featured" value="Yes">Yes
             
                        <input type="radio" name="featured" value="No">No
                       
                    </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td>
                        <input type="radio" name="active" value=" Yes" class="input">Yes
                        <input type="radio" name="active" value=" No"  class="input">No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
       
    </div>
</div>
<?php 
    if(isset($_POST['submit']))
    {
        $title = $_POST['title'];
       if(isset($_POST['featured']))
       {
            $featured = $_POST['featured'];
       }
       else
       {
            $featured ="No";
       }
      
       if(isset($_POST['active']))
       {
            $active = $_POST['active'];
       }
       else
       {
            $active = "No";
       }

    
        if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "")
        {
           
                $image_name = $_FILES['image']['name'];
                //select image
                if($image_name !="")
                {
                   /* 
                    $ext=end(explode('.', $image_name));
                    //rename image
                    $image_name="Food_Category_".rand(000,999).'.'.$ext; */
                    $source_path = $_FILES['image']['tmp_name']; //new file name
                    $target_directory = 'image\Category'.$image_name; //save data into
                    $upload=move_uploaded_file($source_path,$target_directory);
                    if( $upload==false )
                    {
                        header('location:add_Category.php');
                        die();
                    }  
                }
          
        }
        else
        {
            $image_name="";
        }

        $sql="insert into tbl_category(title,image_name,featured,active) values('$title','$image_name','$featured','$active')";
        $res=mysqli_query($conn,$sql);
        if($res==true)
        {
            header("location:manag_category.php");
        }
       
    }
?>
<?php include("../footer_page/footer_menu.php");?>