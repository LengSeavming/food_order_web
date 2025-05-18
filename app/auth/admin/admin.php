<?php 
    include("../../order/menu.php");
    include("../../connetion.php");
?>

     <!-- Main Contanc section -->
    <div class="main-contant">
        <div class="wrapper">
            
            <h1>DASHBOARD</h1>
            <br>
            <div class="col-4 text-center">
                <?php 
                    $sql="select * from tbl_category";
                    $res=mysqli_query($conn,$sql);
                    $count=mysqli_num_rows($res);
                ?>
                <h1><?php echo $count; ?></h1>
                <br>
                <h3 style="color:green;">Catetory</h3>
            </div>
            <div class="col-4 text-center">
                <?php 
                    $sql1="select * from tbl_food";
                    $res1=mysqli_query($conn,$sql1);
                    $count1=mysqli_num_rows($res1);
                ?>
                <h1><?php echo $count1; ?></h1>
                <br>
                <h3 style="color:green;">Foods</h3>
            </div>
            <div class="col-4 text-center">
                <?php
                $sql2="select *from tbl_order";
                $res2=mysqli_query($conn,$sql2);
                $count2=mysqli_num_rows($res2); 
                ?>
                <h1><?php echo $count2; ?></h1>
                <br>
                <h3 style="color:green;">Total Order</h3>
            </div>
            <div class="col-4 text-center">
                <?php
                $sql3="select sum(total) as total from tbl_order";
                $res3=mysqli_query($conn,$sql3);
                $row3=mysqli_fetch_assoc($res3);
                $total=$row3['total'];
                ?>

                <h1>$ <?php echo $total; ?></h1>
                <br>
                <h3 style="color:green;">Remenue Generated</h3>
            </div>
            <div class="clear-flex"></div>
        </div>
       
    </div>






<?php include("Footer_menu.php"); ?>
       <!-- foodr Edite -->
</body>
</html>