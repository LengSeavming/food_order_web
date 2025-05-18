<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Food Menu</title>
  <link rel="stylesheet" href="styles.css" />
  <style>
  body 
  {
    margin: 0;
    padding: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #fffefc;
  }

.menu 
{
  max-width: 1300px;
  margin: auto;
}

.menu-title 
{
  text-align: center;
  font-size: 2rem;
  margin-bottom: 30px;
  color: #2c3e50;
}

.menu-grid 
{
  display: grid;
  grid-template-columns: repeat(4, minmax(250px, 1fr));
  gap: 20px;
  cursor: pointer;
}

.food-card 
{
  background-color: #ffffff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  text-align: center;
  padding: 15px;
  transition: transform 0.3s ease;
}

.food-card:hover 
{
  transform: translateY(-5px);
}

.food-card img 
{
  width: 100%;
  height: 160px;
  object-fit: cover;
  border-radius: 8px;
}

.food-card h3 
{
  margin: 10px 0 5px;
  font-size: 1.2rem;
  color: #34495e;
}

.food-card p 
{
  font-size: 1rem;
  color: #e67e22;
  font-weight: bold;
}
.btn
{
  width: 100px;
  height: 30px;
  background-color: #e67e22;
  color: white;
  border-radius: 5px;
  font-family:'Segoe UI';
  float: left;
  cursor: pointer;
  font-size: 15px;
  font-weight: bold;
  border: none;
  text-decoration: none;
  display: flex;
  justify-content: center;
  align-items: center;
 
}
.btn a{
  text-align: center;
  
}
.btn:hover
{
  background-color:rgb(246, 191, 144);
  color: black;
}
header {
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

    .logo {
      font-size: 28px;
      font-weight: bold;
      color: #e67e22;
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
    .hero h1 
    {
      font-size: 3rem;
      background: rgba(0, 0, 0, 0.5);
      padding: 10px 20px;
      border-radius: 10px;
    }
  </style>
</head>
<?php include("connetion.php");?>
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
  <section class="menu">
    <h2 class="menu-title">Food Menu</h2>
    <div class="menu-grid">
      <?php
        $sql="select *from tbl_food";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res);
        if($count>0)
        {
          while($row=mysqli_fetch_assoc($res))
          {
            $id=$row['id'];
            $title=$row['title'];
            $price=$row['price'];
            $des=$row['description'];
            $image_name=$row['image_name'];
            ?>
                <div class="food-card">
                  <?php
                    if($image_name=="")
                    {
                      echo "Not Image";
                    }
                    else
                    {
                      ?>
                        <img src="../ASSIGMNENT_APP\image\Foods/<?php echo $image_name;?>" alt="Burger" />
                      <?php
                    }
                  ?>
                 
                  <h3><?php echo $title; ?></h3>
                  <h4><?php echo $des;?></h4>
                  <p><?php echo $price;?>$</p></p>
                  <a href="Oder_Foods.php?food_id=<?php echo $id;?>" class="btn">Order Now</a>
              </div>
            <?php
          }
        }
      ?>
      
    </div>
  </section>
  <?php include("../footer_page/footer_menu.php") ?>
</body>
</html>
