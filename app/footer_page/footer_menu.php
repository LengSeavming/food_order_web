<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Footer Design</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    footer 
    {
      background-color: #2c3e50;
      color: #ecf0f1;
      padding: 40px 0 20px;
    }

    .footer-container {
      max-width: 1200px;
      margin: auto;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      padding: 0 20px;
    }

    .footer-section {
      flex: 1 1 250px;
      margin: 20px 0;
    }

    .footer-section h3 {
      margin-bottom: 15px;
      font-size: 18px;
      border-bottom: 2px solid #e67e22;
      display: inline-block;
      padding-bottom: 5px;
    }

    .footer-section ul {
      list-style: none;
      padding: 0;
    }

    .footer-section ul li {
      margin-bottom: 10px;
    }

    .footer-section ul li a {
      color: #bdc3c7;
      text-decoration: none;
      transition: 0.3s ease;
    }

    .footer-section ul li a:hover {
      color: #e67e22;
    }

    .social-icons a {
      display: inline-block;
      margin-right: 15px;
      font-size: 18px;
      color: #bdc3c7;
      text-decoration: none;
      transition: color 0.3s;
    }

    .social-icons a:hover {
      color: #e67e22;
    }

    .footer-bottom {
      text-align: center;
      margin-top: 20px;
      padding-top: 20px;
      border-top: 1px solid #7f8c8d;
      font-size: 14px;
      color: #bdc3c7;
    }

    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column;
        text-align: center;
      }

      .footer-section {
        margin: 10px 0;
      }

      .social-icons a {
        margin: 0 10px;
        background-color: blue;
      }
      .social-icons i{
        color: blue;
        font-size: 15px;
      }
    }
  </style>
</head>
<body>

  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <div class="footer-section">
        <h3>About Us</h3>
        <p>We serve delicious food with love. Come taste the difference!</p>
      </div>
      <div class="footer-section">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="manage_food.php">Menu</a></li>
          <li><a href="manag_category.php">Category</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Follow Us</h3>
        <div class="social-icons">
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-tiktok"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-invision"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 202 Delicious Recipes. All Rights Reserved.
    </div>
  </footer>

</body>
</html>
