<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <style>
        b{
            font-size: 15px;
        }
        .error{
            color: red;
            font-size: 15px;
        }
    </style>
    <script src="./js/signup.js"></script>
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
<!-- contact section starts  -->

    <section class="contact" id="contact">
        
        <h1 class="heading">
            <span>S</span>
            <span>i</span>
            <span>g</span>
            <span>U</span>
            <span>p</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>

            <form action="php/signup.php" method="post">
                <b>Name: </b>
                <div class="inputBox">
                    <input type="text" placeholder="enter name" id="name" name="name" oninput="check_name()" required>
                </div>
                <span class="error" id="name_error"></span><br><br>
                <b>Email: </b>
                <div class="inputBox">    
                    <input type="email" placeholder="enter email" id="email" name="email" oninput="check_email()" required>
                </div>
                <span class="error"  id="email_error"></span><br><br>
                <b>Password: </b>
                <div class="inputBox">
                    <input type="password" placeholder="enter passowrd" name="password" required>
                </div>
                <input type="submit" class="btn" onclick="prevent()" value="send message">
            </form>

        </div>
        
    </section>

<!-- contact section ends -->

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
</body>
</html>