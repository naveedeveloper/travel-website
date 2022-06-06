<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/packages.css">
</head>
<body>
    <?php
        session_start();
    ?>
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

        <?php if(isset($_SESSION['email']) && isset($_SESSION['password'])){ ?>
            <i class="fas fa-sign-out-alt" id="logout-btn"></i>
        <?php } ?>
    </header>

<!-- header section ends -->

<!-- packages section starts  -->
    <section class="packages" id="packages">

        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <img src="images/p-1.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> islamabad </h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $05.00 <span>$10.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Islamabad' ?>">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-2.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> lahore </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $05.00 <span>$10.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Lahore' ?>">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-3.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> istanbul </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Istanbul' ?>">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-4.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> paris </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $100.00 <span>$130.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Paris' ?>">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-5.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> giza </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Giza' ?>">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-6.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> gilgit </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Gilgit' ?>">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-7.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> lahore </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Lahore' ?>">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="images/p-8.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> swat </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Swat' ?>">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-9.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> lahore </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Lahore' ?>">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="images/p-10.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> sakrdu </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Sakardu' ?>">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="images/p-11.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> antalya </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Antalya' ?>">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="images/p-12.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> konya </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Konya' ?>">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="images/p-13.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> lzmir </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Lzmir' ?>">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="images/p-14.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> dubai </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Dubai' ?>">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-15.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> dubai </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Dubai' ?>">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-16.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> dubai </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Dubai' ?>">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="images/p-17.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> taj resort </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Taj Resort' ?>">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="images/p-18.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> ari atoll </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Ari Atoll' ?>">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="images/p-19.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> hithadoo </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Hithadoo' ?>">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="images/p-20.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> paris </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'Paris' ?>">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="images/p-21.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> new york </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'New York' ?>">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-22.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> new york </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'New york' ?>">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="images/p-23.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> san francisco </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="<?php $_SESSION['destination'] = 'San Francisco' ?>">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-24.jpeg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> aslexandria </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $80.00 <span>$100.00</span> </div>
                    <a href="book.php" class="btn" onclick="">book now</a>
                </div>
            </div> 

        </div>

    </section>

<!-- packages section ends -->

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