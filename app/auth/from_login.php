<?php 
    include("../connetion.php");
    // include("login_Check.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="Style_fome_login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
    </style>
</head>
<body>
    <div class="background">
        <div class="login-container">
            <button class="close-btn">&times;</button>
            <h2>Login</h2>

            <?php 
                if(isset($_SESSION['not-login']))
                {
                    echo $_SESSION['not-login'];
                    // unset($_SESSION['not-login']);
                }
                
            ?> 

            <form action="#" method="POST">
                <div class="input-group">
                    <label for="user_name">Username</label>
                    <div class="input-field">
                        <input type="text" id="user_name" name="user_name" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <div class="input-field">
                        <input type="password" id="password" name="password" required>
                        <i class="fas fa-lock"></i>
                    </div>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" name="submit" class="login-btn">Login</button>
                <p class="register-link">Don't have an account? <a href="#">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $username=$_POST['user_name'];
    $password=$_POST['password'];
    $sql="select *from tbl_admin where user_name='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['login']="<div class='success'>Login Successfully </div>";
        $_SESSION["user"]=$username;
        header("location:menu_oder.php");
    }
    else
    {
        $_SESSION['login']="<div class='success'>Login not  Successfully </div>";
        // header('location:manage_admin.php');
       
    }
}

?>
