<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour & Travel Agency</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gallery.css">

</head>
<body>
    
<!-- header section starts  -->

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
    </header>

<!-- header section ends -->

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>K</span>
            <span>a</span>
            <span>r</span>
            <span>a</span>
            <span>c</span>
            <span>h</span>
            <span>i</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/k-1.jpeg" alt="">
            </div>
            <div class="box">
                <img src="images/k-2.jpeg" alt="">
            </div>
            <div class="box">
                <img src="images/k-3.jpeg" alt="">
            </div>
            <div class="box">
                <img src="images/k-4.jpeg" alt="">
            </div>
            <div class="box">
                <img src="images/k-5.jpeg" alt="">
            </div>

        </div>
    </section>

    <button class="btn" style="position: absolute; left: 50%; transform: translate(-50%, -50%);" onclick="window.location = 'gallery.php'">Back</button>

<!-- footer section -->
    <section class="footer" style="margin-top: 40px;">

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
</body>
</html>