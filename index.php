<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour & Travel Agency</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

    <?php 
        session_start();
        // $_SESSION['email'] = null;
        //  $_SESSION['password'] = null;
    ?>
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>T</span>ravel</a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="book.php">book</a>
            <a href="packages.php">packages</a>
            <a href="services.php">services</a>
            <a href="gallery.php">gallery</a>
            <a href="contact.php">contact</a>
        </nav>

        <div class="icons">
        <?php 
            if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){ ?>
                <i class="fas fa-user" id="login-btn"></i>
            <?php } ?>

            <?php if(isset($_SESSION['email']) && isset($_SESSION['password'])){ ?>
                <i class="fas fa-sign-out-alt" id="logout-btn"></i>
            <?php
            } 
            ?>
        </div>

    </header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>dicover new places with us, adventure awaits</p>
        <a href="gallery.php" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-2.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

<!-- footer section -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">lahore</a>
                <a href="#">islamabad</a>
                <a href="#">karachi</a>
            </div>
        
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>

        </div>

        <h1 class="credit"> created by <span> mr. Tayyub & mr. Zohaib</span> | all rights reserved! </h1>

    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>