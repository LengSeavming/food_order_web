<?php
    include("../connetion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\food\food.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">Delicous Recipe</h1>
            <nav>
                <div class="menu-icon"><a href="">&#9776;</a></div>
                <ul class="nav-list">
                    <li><a href="">Home</a></li>
                    <li><a href="manag_category.php">Category</a></li>
                    <li><a href="manage_food.php">Foods</a></li>
                    <li><a href="">Contact</a></li>
                    <!-- <li><a href="login_Check.php">Logout</a></li> -->
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