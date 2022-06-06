<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/book.css">
    <style>
        b{
            font-size: 15px;
        }
        .error{
            color: red;
            font-size: 15px;
        }
    </style>
    <script src="./js/book_data.js"></script>
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
<!-- book section starts  -->

    <section class="book" id="book">

        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/book-img.svg" alt="">
            </div>
            <form action="php/booking.php" method="post">
                <div class="inputBox">
                    <h3>Destination</h3>
                    <input list="destination" name="destination" placeholder="place name">
                    <datalist id="destination">
                        <option value="Islamabad">
                        <option value="Lahore">
                        <option value="Istanbul">
                        <option value="Paris">
                        <option value="Giza">
                        <option value="Gilgit">
                        <option value="Swat">
                        <option value="Skardu">
                        <option value="Antalya">
                        <option value="Konya">
                        <option value="Lzmir">
                        <option value="Dubai">
                        <option value="Taj Resort">
                        <option value="Ari Atoll">
                        <option value="Hithadoo">
                        <option value="New York">
                        <option value="San Franciso">
                        <option value="Aslexandria">
                    </datalist>
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="text" placeholder="number of guests" oninput="check_guests()" id="guests" name="guests">
                </div>
                <span class="error" id="guests_error"></span><br><br>
                <div class="inputBox">
                    <h3>arrival</h3>
                    <input type="date" id="arrival" name="arrival">
                </div>
                <span class="error" id="arrival_error"></span><br><br>
                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date" id="leaving" oninput="check_date()" name="leaving">
                </div>
                <span class="error" id="leaving_error"></span><br><br>
                <input type="submit" class="btn" onclick="prevent()" value="book now" id="book">
            </form>

        </div>

    </section>


    <!-- footer section -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">pakistan</a>
                <a href="#">turkey</a>
                <a href="#">france</a>
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
<!-- book section ends -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>