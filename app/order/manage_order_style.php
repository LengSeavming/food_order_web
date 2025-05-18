<?php 
  include("../order/menu.php");
  include("../connetion.php");
?>

<style>
  .main-content {
    padding: 20px;
    background-color: #f8f9fa;
    min-height: 100vh;
  }

  .wrapper {
    width: 100%;
    overflow-x: auto;
  }

  h1 {
    text-align: left;
    font-size: 28px;
    margin-bottom: 20px;
    color: #343a40;
  }

  .tbl-full {
    width: 100%;
    border-collapse: collapse;
    background-color: #ffffff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  }

  .tbl-full th,
  .tbl-full td {
    padding: 12px 15px;
    text-align: center;
    border: 1px solid #dee2e6;
  }

  .tbl-full th {
    background-color: #343a40;
    color: white;
    font-size: 16px;
    letter-spacing: 0.5px;
  }

  .tbl-full tr:nth-child(even) {
    background-color: #f1f3f5;
  }

  .tbl-full tr:hover {
    background-color: #e9ecef;
  }

  .btn-danger {
    background-color: #007bff;
    color: white;
    padding: 6px 12px;
    text-decoration: none;
    border-radius: 5px;
    transition: 0.3s ease;
  }

  .btn-danger:hover {
    background-color: #dc3545;
  }

  @media (max-width: 768px) {
    .tbl-full th, .tbl-full td {
      padding: 10px;
      font-size: 14px;
    }

    h1 {
      font-size: 22px;
    }
  }
</style>

<div class="main-content">
  <div class="wrapper">
    <h1>Manage Orders</h1>

    <table class="tbl-full">
      <thead>
        <tr>
          <th>S.N.</th>
          <th>Food</th>
          <th>Price</th>
          <th>Qty</th>
          <th>Total</th>
          <th>Order Date</th>
          <th>Status</th>
          <th>Customer Name</th>
          <th>Contact</th>
          <th>Email</th>
          <th>Address</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM tbl_order ORDER BY id DESC";
          $res = mysqli_query($conn, $sql);
          $sn = 1;

          if ($res && mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
              ?>
              <tr>
                <td><?= $sn++; ?></td>
                <td><?= htmlspecialchars($row['food']); ?></td>
                <td>$<?= number_format($row['price'], 2); ?></td>
                <td><?= (int)$row['qty']; ?></td>
                <td>$<?= number_format($row['total'], 2); ?></td>
                <td><?= htmlspecialchars($row['order_date']); ?></td>
                <td><?= htmlspecialchars($row['status']); ?></td>
                <td><?= htmlspecialchars($row['customer_name']); ?></td>
                <td><?= htmlspecialchars($row['customer_contact']); ?></td>
                <td><?= htmlspecialchars($row['customer_email']); ?></td>
                <td><?= nl2br(htmlspecialchars($row['customer_address'])); ?></td>
                <td>
                  <a href="Update_order.php?id=<?= $row['id']; ?>" class="btn-danger">Update</a>
                </td>
              </tr>
              <?php
            }
          } else {
            echo "<tr><td colspan='12'>No orders found.</td></tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</div>

<?php include("../footer_page/footer_menu.php"); ?>
