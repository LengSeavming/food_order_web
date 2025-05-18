<?php
include("../order/menu.php");
include("../connetion.php");
if (isset($_GET['id'])) 
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_order WHERE id=$id";
    $res = mysqli_query($conn, $sql);

    if ($res && mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_assoc($res);
        $food = $row['food'];
        $price = $row['price'];
        $qty = $row['qty'];
        $status = $row['status'];
        $customer_name = $row['customer_name'];
        $customer_contact = $row['customer_contact'];
        $customer_email = $row['customer_email'];
        $customer_address = $row['customer_address'];
    } 
    else 
    {
        header("Location: manage_order.php");
        exit;
    }
} 
else 
{
    header("Location: manage_order.php");
    exit;
}

if (isset($_POST['submit'])) 
{
    $qty = $_POST['qty'];
    $status = $_POST['status'];
    $customer_name = $_POST['customer_name'];
    $customer_contact = $_POST['customer_contact'];
    $customer_email = $_POST['customer_email'];
    $customer_address = $_POST['customer_address'];

    $total = $price * $qty;

    $sql2 = "UPDATE tbl_order SET
                qty = $qty,
                total = $total,
                status = '$status',
                customer_name = '$customer_name',
                customer_contact = '$customer_contact',
                customer_email = '$customer_email',
                customer_address = '$customer_address'
             WHERE id = $id";

    $res2 = mysqli_query($conn, $sql2);

    if ($res2) 
    {
        header("Location: manage_order.php");
    } else 
    {
        echo "<div style='color:red;'>Failed to update order.</div>";
    }
}
?>
<style>
  .form-wrapper 
  {
    max-width: 600px;
    margin: 30px auto;
    padding: 30px;
    background: white;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    border-radius: 10px;
  }

  .form-wrapper h2 
  {
    margin-bottom: 20px;
    text-align: center;
  }

  .form-wrapper table 
  {
    width: 100%;
  }

  .form-wrapper td 
  {
    padding: 10px;
  }

  .form-wrapper input[type="text"],
  .form-wrapper input[type="number"],
  .form-wrapper textarea,
  .form-wrapper select 
  {
    width: 100%;
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
  }

  .form-wrapper input[type="submit"] 
  {
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    display: block;
    margin: 20px auto 0;
  }

  .form-wrapper input[type="submit"]:hover 
  {
    background-color:rgb(35, 54, 39);
  }
</style>

<div class="main-content">
  <div class="wrapper">
    <div class="form-wrapper">
      <h2>Update Order</h2>
      <form method="POST">
        <table>
          <tr>
            <td>Food Name:</td>
            <td><strong><?php echo $food; ?></strong></td>
          </tr>
          <tr>
            <td>Price:</td>
            <td><strong>$<?php echo $price; ?></strong></td>
          </tr>
          <tr>
            <td>Quantity:</td>
            <td><input type="number" name="qty" value="<?php echo $qty; ?>" required></td>
          </tr>
          <tr>
            <td>Status:</td>
            <td>
              <select name="status">
                <option value="Ordered" <?php if ($status == "Ordered") echo "selected"; ?>>Ordered</option>
                <option value="On Delivery" <?php if ($status == "On Delivery") echo "selected"; ?>>On Delivery</option>
                <option value="Delivered" <?php if ($status == "Delivered") echo "selected"; ?>>Delivered</option>
                <option value="Cancelled" <?php if ($status == "Cancelled") echo "selected"; ?>>Cancelled</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Customer Name:</td>
            <td><input type="text" name="customer_name" value="<?php echo $customer_name; ?>"></td>
          </tr>
          <tr>
            <td>Contact:</td>
            <td><input type="text" name="customer_contact" value="<?php echo $customer_contact; ?>"></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><input type="text" name="customer_email" value="<?php echo $customer_email; ?>"></td>
          </tr>
          <tr>
            <td>Address:</td>
            <td><textarea name="customer_address"><?php echo $customer_address; ?></textarea></td>
          </tr>
          <tr>
            <td colspan="2" style="text-align:center;">
              <input type="submit" name="submit" value="Update Order">
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>

<?php include("../footer_page/footer_menu.php"); ?>
