<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body
    {
        width: 100%;
        min-height: 100vh;
        background:white;
        font-family:sans-serif;
    }
    header
    {
      position: sticky;
      top: 0;
      z-index: 999;
      background: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 20px 0;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .header-container {
      max-width: 1300px;
      margin: auto;
      padding: 0 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo 
    {
      font-size: 28px;
      font-weight: bold;
      color:rgb(234, 154, 96);
    }

    nav a {
      margin-left: 20px;
      text-decoration: none;
      font-size: 20px;
      color: white;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #e67e22;
    }
    /* -----------recipe section------------- */
    .recips
    {
        padding: 50px 0;
    }
    .recips h1{
        text-align: center;
        margin-bottom: 30px;
        font-size: 28px;
    }
    .recips-section{
        width: 90%;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4,minmax(250px,1fr));  
        column-gap: 10px;
    }
    .recips-card{
        background-color: rgb(255, 255, 255);
        margin: 30px 10px;
        border-radius: 10px;
        border: 1px solid wheat;
        overflow: hidden;
        box-shadow: 5px 0 5px rgba(0, 0, 0, 0.652);
        transition: transform 0.3s ease;
    }
    .recips-card:hover{
        transform: translateY(-5px);
    }
    .recips-card img
    {
       width: 100%;
       height: 250px;
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .recips-card h2{
      font-size: 22px;
      padding: 20px;
    }
    .recips-card p{
      font-size: 18px;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      padding: 20px;
    }
    p .price{
        font-family: sans-serif;
        font-size: 30px;
        font-weight: bold;
    }
    .recips-card a{
        display: block;
        text-align: center;
        text-decoration: none;
        background-color: black;
        color: white;
        padding: 15px 0;
        cursor: pointer;
    }
    footer{
        background-color: black;
        padding: 20px 0;
        color: white;
        text-align: center;
    }
   
    @media  screen and (max-width:600px) 
    {
       
       
        .menu-icon a{
            text-decoration: none;
            color: white;
            display: block;
        }
        nav ul li {
        list-style: none;
        display: inline;
        margin-right: 20px;
        color: white;
        }
        nav ul li a{
            text-decoration: none;
            display: none;
            margin-right: 20px;
            font-size: 20px;
            color: white;
        }
    }

    .menu-icon{
        font-size: 24px;
        padding: 20px;
        text-align: center;
        cursor: pointer;
        display: none;
    }
    .menu-icon a{
        text-decoration: none;
        color: white;
        display: none;
    }
    .nav-list{
        display: inline;
    }
</style>
<?php
include("../connetion.php");
?>
<body>
<header>
    <div class="header-container">
      <div class="logo">Delicious Foods</div>
      <nav>
        <a href="menu_oder.php">Home</a>
        <a href="Category_foods.php">Category</a>
        <a href="Foods_menu.php">Foods</a>
        <a href="#">Contact</a>
      </nav>
    </div>
  </header>

    </header>
    <!-- ----------------Recippe Section------------- -->
    <section class="recips">
        <h1>Menu Category</h1>
        <div class="recips-section">
            
                <?php 
                    $sql="select * from tbl_category ";
                    $res=mysqli_query($conn,$sql);
                    $count=mysqli_num_rows($res);
                    if( $count>0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id=$row['id'];
                            $title=$row['title'];
                            $image_name=$row['image_name'];
                            ?>
                                <div class="recips-card">
                                    <h2><?php echo $title; ?></h2>
                                <?php
                                    if ($image_name == "") 
                                    {
                                        echo "No Image";
                                    } else 
                                    {
                                        ?>
                                            <img src="../ASSIGMNENT_APP\image\category<?php echo $image_name; ?>" alt="">
                                        <?php
                                    }
                                ?>
                                    <!-- <p>Lorem ipsum dolor, sit amet consectetur aipisicing elit. Ullam, eum!.</p>
                                    <p class="price">Price: 120$</p> -->
                                    <a href="#">View recips</a>
                                </div>
                            <?php
                        }
                    }
                    else{
                        echo "Not Category";
                    }

                ?>
        </div>
    </section>
    <?php include("../footer_page/footer_menu.php") ?>
</body>
</html>