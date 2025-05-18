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
    }body{
        width: 100%;
        min-height: 100vh;
        background: bisque;
        font-family:sans-serif;
    }
    header
    {
        height: 70px;
        width: 100%;
        background-color: black;
        color: white;
        display: flex;
        align-items: center;
    }
    .container{
        width: 90%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        
    }
    /* .nav-list{
            display: none;
        } */
    nav ul li {
        list-style: none;
        display: inline;
        margin-right: 20px;
        color: white;
    }
    nav ul li a{
        text-decoration: none;
        display: inline;
        margin-right: 20px;
        font-size: 20px;
        color: white;
    }
    a:hover{
        color: rgb(245, 204, 0);
    }
    .logo{
        font-size: 24px;
        font-weight: bold;
    }
    .hero{
        width: 100%;
        height:auto;
        background-image: url(https://png.pngtree.com/thumb_back/fh260/back_our/20190621/ourmid/pngtree-black-meat-western-food-banner-background-image_194600.jpg);
        background-size: cover;
        background-position: center;
        color: aliceblue;
        text-align: center;
        padding: 140px 0px ;
        margin-bottom: 20px;

    }
    .hero h2{
        font-size: 36px;
        margin-bottom: 10px;
    }
    .hero p{
        font-size: 20px;
        margin-bottom: 10px;
    }
    .search-box{
        max-width: 550px;
        margin:15px auto;
        display: flex;
        align-items: center;
        justify-content: center;
        /* background-color: red; */
    }
    .search-box input
    {
        width: 70%;
        padding: 10px;
        outline: none;
        border: 0;
        border-radius: 5px;
        font-size: 1rem;
        border: 1px  solid red;
    }
    .search-box button
    {
        width:29%;
        margin: 0 4px;
        padding: 10px 20px;
        outline: none;
        border: 0;
        border-radius: 5px;
        font-size: 1rem;
        background-color: red;
        color: white;
        cursor: pointer;
    }
    /* -----------recipe section------------- */
    .recips{
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
        grid-template-columns: repeat(auto-fit,minmax(250px,1fr));  
        column-gap: 10px;
    }
    .recips-card{
        background-color: rgb(255, 255, 255);
        margin: 30px 10px;
        border-radius: 10px;
        border: 1px solid wheat;
        overflow: hidden;
        box-shadow: 5px 0 5px rgba(0, 0, 0, 0.652);
    }
    .recips-card img{
       width: 50%;
       /* height: 200px; */
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
        <div class="container">
            <h1 class="logo">Delicous Recipe</h1>
            <nav>
                <div class="menu-icon"><a href="">&#9776;</a></div>
                <ul class="nav-list">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Recipes</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="login_Check.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="hero">
        <div class="hero-section">
            <h2>Welcome to Recipes Collection</h2>
            <p>Search mounth watering recipes to satifi your craving.</p>
            <form action="" class="search-box">
                <input type="text" placeholder="search Recipe">
                <button type="submit"> Search</button>
            </form>
        </div>
    </section>
    <!-- ----------------Recippe Section------------- -->
    <section class="recips">
        <h1>Featured Recipe</h1>
        <div class="recips-section">
            <div class="recips-card">
                <img src="https://i.pinimg.com/474x/4a/de/37/4ade3729109e48e14e0e3126f49df099.jpg" alt="">
                <h2>Apple</h2>
                <p>Lorem ipsum dolor, sit amet consectetur aipisicing elit. Ullam, eum!.</p>
                <p class="price">Price: 120$</p>
                <a href="#">View recips</a>
            </div>
            <div class="recips-card">
                <img src="https://i.pinimg.com/736x/35/78/b5/3578b5433d9d035e38fb64c5306aa919.jpg" alt="">
                <h2>Banana</h2>
                <p>Lorem ipsum dolor, sit amet consectetur aipisicing elit. Ullam, eum!.</p>
                <p>Price: 120$</p>
                <a href="#">View recips</a>
            </div>
            <div class="recips-card">
                <img src="https://i.pinimg.com/474x/7a/aa/a5/7aaaa545e00e8a434850e80b8910dd94.jpg" alt="">
                <h2>Orange</h2>
                <p>Lorem ipsum dolor, sit amet consectetur aipisicing elit. Ullam, eum!.</p>
                <p>Price: 120$</p>
                <a href="#">View recips</a>
            </div>
            <div class="recips-card">
                <img src="https://i.pinimg.com/474x/7a/aa/a5/7aaaa545e00e8a434850e80b8910dd94.jpg" alt="">
                <h2>Orange</h2>
                <p>Lorem ipsum dolor, sit amet consectetur aipisicing elit. Ullam, eum!.</p>
                <p>Price: 120$</p>
                <a href="#">View recips</a>
            </div>
        </div>
        <div class="recips-section">
            <div class="recips-card">
                <img src="https://i.pinimg.com/474x/4a/de/37/4ade3729109e48e14e0e3126f49df099.jpg" alt="">
                <h2>Apple</h2>
                <p>Lorem ipsum dolor, sit amet consectetur aipisicing elit. Ullam, eum!.</p>
                <p class="price">Price: 120$</p>
                <a href="#">View recips</a>
            </div>
            <div class="recips-card">
                <img src="https://i.pinimg.com/736x/35/78/b5/3578b5433d9d035e38fb64c5306aa919.jpg" alt="">
                <h2>Banana</h2>
                <p>Lorem ipsum dolor, sit amet consectetur aipisicing elit. Ullam, eum!.</p>
                <p>Price: 120$</p>
                <a href="#">View recips</a>
            </div>
            <div class="recips-card">
                <img src="https://i.pinimg.com/474x/7a/aa/a5/7aaaa545e00e8a434850e80b8910dd94.jpg" alt="">
                <h2>Orange</h2>
                <p>Lorem ipsum dolor, sit amet consectetur aipisicing elit. Ullam, eum!.</p>
                <p>Price: 120$</p>
                <a href="#">View recips</a>
            </div>
            <div class="recips-card">
                <img src="https://i.pinimg.com/474x/7a/aa/a5/7aaaa545e00e8a434850e80b8910dd94.jpg" alt="">
                <h2>Orange</h2>
                <p>Lorem ipsum dolor, sit amet consectetur aipisicing elit. Ullam, eum!.</p>
                <p>Price: 120$</p>
                <a href="#">View recips</a>
            </div>
        </div>
    </section>
    <footer>
        <div>
            <p>&copy;2024 Recips Detail</p>
        </div>
    </footer>
</body>
</html>