<?php
    if (isset($redirect) && $redirect == true) {
        header("Location:thanks.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" href="images/favicon.ico">
</head>
<body>
    <div class="wrapper clearfix">
    <!-- This is the top navigation -->     
            <nav class="topnav">
                <a href="#" id="menu"><i class="fas fa-bars white"></i><p>Menu</p></a>
                <div class="menubar" id="menubar">
                    <div class="nav-left">
                        <ul>
                            <li><i class="fas fa-lock white"></i><a href="#">Login</a></li>
                            <li><i class="far fa-circle white"></i><a href="home.php">Home</a></li>
                            <li><i class="far fa-circle white"></i><a href="#">About SW</a></li>
                            <li><i class="far fa-circle white"></i><a href="contactus.php">Contact Us</a></li>
                            <li><i class="far fa-circle white"></i><a href="#">View Products</a></li>
                        </ul>
                    </div>
                </div>
                <div class="login">
                    <i class="fas fa-lock white"></i>
                    <a href="#">Login</a>
                </div>         
                <div class="cart">
                    <i class="fas fa-shopping-cart white"></i>
                    <a href="#">View Cart</a>
                    <p>0 items</p>
                </div>
            </nav>
    <!-- This is the header -->             
        <div class="content-wrapper clearfix">
            <header>
                <div class="clearfix">
                    <div class="logo">
                        <a href="#"><img src="images/sports-warehouse-logo-600.png" alt="sports warehouse logo"></a>
                    </div>
                    <div class="search">
                        <input type="search" placeholder="Search products">
                        <a class="button" href="#"><i class="fas fa-search white"></i></a>
                    </div>
                </div>
                <div class="categorynav">
                    <ul>
                        <li><a href="#">Shoes</a><i class="fas fa-angle-right white"></i></li>
                        <li><a href="#">Helmets</a><i class="fas fa-angle-right white"></i></li>
                        <li><a href="#">Pants</a><i class="fas fa-angle-right white"></i></li>
                        <li><a href="#">Tops</a><i class="fas fa-angle-right white"></i></li>
                        <li><a href="#">Balls</a><i class="fas fa-angle-right white"></i></li>
                        <li><a href="#">Equipment</a><i class="fas fa-angle-right white"></i></li>
                        <li><a href="#">Traning gear</a><i class="fas fa-angle-right white"></i></li>
                    </ul>
                </div>
            </header>

        <?= $output ?>

        <!-- This is the footer -->
        <footer>
            <div class="footer-nav">
                <h2>Site navigation</h2>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">About SW</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="#">View Products</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-cat">
                <h2>Product categories</h2>
                <ul>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Helmets</a></li>
                    <li><a href="#">Pants</a></li>
                    <li><a href="#">Tops</a></li>
                    <li><a href="#">Balls</a></li>
                    <li><a href="#">Equipment</a></li>
                    <li><a href="#">Training Gear</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h2>Contact Sports Warehouse</h2>
                <a class="facebook" href=""><i class="fab fa-facebook-f fa-4x white"></i><p>Facebook</p></a>
                <a class="twitter" href=""><i class="fab fa-twitter fa-4x white"></i><p>Twitter</p></a>
                <div class="other" id="other">
                    <a href=""><i class="fab fa-telegram-plane fa-4x white"></i><p>Other</p></a>
                    <ul class="othermenu clearfix" id="othermenu">
                        <li class="clearfix" id="firstother"><a href="#">Online form</a></li>
                        <li class="clearfix"><a href="#">Email</a></li>
                        <li class="clearfix"><a href="#">Phone</a></li>
                        <li class="clearfix"><a href="#">Address</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <div class="copyright">
            <p>&#169;Copyright 2020 Sports Warehouse. <span>All rights reserved. </span><span>Website made by Awesomesauce Design.</span></p>
        </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
