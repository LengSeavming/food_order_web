<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Food Order</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .food-card {
      background: white;
      border-radius: 16px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 320px;
      padding: 16px;
      text-align: center;
    }

    .food-card img {
      width: 70%;
      height: 150px;
      object-fit: cover;
      border-radius: 12px;
    }

    .food-name {
      font-size: 1.5rem;
      margin: 10px 0;
    }

    .food-price {
      font-size: 1.2rem;
      color: #28a745;
      margin-bottom: 12px;
    }

    .order-form {
      margin-top: 20px;
      text-align: left;
    }

    .order-form input, .order-form textarea {
      width: 100%;
      padding: 8px;
      margin: 8px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    .order-form button {
      background-color: #28a745;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
    }
  </style>
</head>
<?php include("../connetion.php"); ?>
<body>

<?php
if (isset($_GET['food_id'])) {
  $food_id = $_GET['food_id'];
  $sql = "SELECT * FROM tbl_food WHERE id = $food_id";
  $res = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($res);

  if ($count == 1) {
    $row = mysqli_fetch_assoc($res);
    $title = $row['title'];
    $price = $row['price'];
    $image_name = $row['image_name'];
  } else {
    echo "Food not found.";
    exit;
  }
} else {
  echo "No food selected.";
  exit;
}
?>

<form action="#" method="post">
  <div class="food-card">
    <?php if ($image_name != "") { ?>
      <img src="../ASSIGMNENT_APP/image/Foods/<?php echo $image_name; ?>" alt="<?php echo $title; ?>">
    <?php } else { ?>
      <p>No image available</p>
    <?php } ?>

    <div class="food-name"><?php echo $title; ?></div>
    <input type="hidden" name="food" value="<?php echo $title; ?>">
    <div class="food-price">$<?php echo $price; ?></div>
    <input type="hidden" name="price" value="<?php echo $price; ?>">

    <label>Quantity:</label>
    <input type="number" name="qty" value="1" min="1" required>

    <div class="order-form">
      <label>Your Name:</label>
      <input type="text" name="customer_name" placeholder="Enter your name" required>

      <label>Email:</label>
      <input type="email" name="customer_email" placeholder="Enter your email" required>

      <label>Phone Number:</label>
      <input type="tel" name="customer_contact" placeholder="Enter phone number" required>

      <label>Address:</label>
      <textarea name="customer_address" placeholder="Enter your address" required></textarea>

      <button type="submit" name="submit">Place Order</button>
    </div>
  </div>
</form>

<?php
if (isset($_POST['submit'])) 
{
    $food = $_POST['food'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $total = $price * $qty;
    $order_date = date("Y-m-d H:i:s");
    $status = 'ordered';
    $customer_name = $_POST['customer_name'];
    $customer_contact = $_POST['customer_contact'];
    $customer_email = $_POST['customer_email'];
    $customer_address = $_POST['customer_address'];

    $sql1 = "INSERT INTO tbl_order 
    (
        food, price, qty, total, order_date, status,
        customer_name, customer_contact, customer_email, customer_address
      ) 
      VALUES (
        '$food', '$price', '$qty', '$total', '$order_date', '$status',
        '$customer_name', '$customer_contact', '$customer_email', '$customer_address'
      )";

    $res1 = mysqli_query($conn, $sql1);
    if ($res1 == true) 
    {
      echo "<script>alert('Order placed successfully!'); window.location.href='Oder_Foods.php';</script>";
      header("location:menu_oder.php");
    } 
    else 
    {
      echo "<script>alert('Failed to place order.');</script>";
    }
}
?>

</body>
</html>
