<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?= $title ?></title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
  <!-- This is the top navigation -->     
  <div class="nav">
    <nav class="topnav">
      <a href="#" id="menu"><i class="fas fa-bars"></i><p>Menu</p></a>
      <div class="menubar" id="menubar">
        <div class="nav-left">
          <ul>
            <li><i class="fas fa-lock"></i><a href="#">Login</a></li>
            <li><i class="far fa-circle"></i><a href="home.php">Home</a></li>
            <li><i class="far fa-circle"></i><a href="aboutus.php">About SW</a></li>
            <li><i class="far fa-circle"></i><a href="contactus.php">Contact Us</a></li>
            <li><i class="far fa-circle"></i><a href="viewproducts.php">View Products</a></li>
          </ul>
        </div>
      </div>
      <div class="login">
        <i class="fas fa-lock"></i>
        <a href="#">Login</a>
      </div>         
      <div class="cart">
        <i class="fas fa-shopping-cart"></i>
        <a href="#">View Cart</a>
        <p>0 items</p>
      </div>
    </nav>
  </div>
  <div class="wrapper clearfix">
    <!-- This is the header -->             
    <div class="content-wrapper clearfix">
      <header>
        <div class="clearfix">
          <div class="logo"><h1>Sports Warehouse</h1></div>
            <form class="search" action="search.php" method="get">
              <fieldset>
                <legend class="hide">Search</legend>
                <label class="hide" for="search">Search</label>
                <input class="search-input" type="search" name="search" id="search" placeholder="Search products">
                <button class="search-btn notext" id="search-btn" type="submit" name="submitButton" value="search"><i class="fas fa-search"></i>Search</button>
              </fieldset>
            </form>
          </div>
          <div class="categorynav">
            <ul>
              <li><a href="groupByCategories.php?id=1">Shoes</a><i class="fas fa-angle-right"></i></li>
              <li><a href="groupByCategories.php?id=2">Helmets</a><i class="fas fa-angle-right"></i></li>
              <li><a href="groupByCategories.php?id=3">Pants</a><i class="fas fa-angle-right"></i></li>
              <li><a href="groupByCategories.php?id=4">Tops</a><i class="fas fa-angle-right"></i></li>
              <li><a href="groupByCategories.php?id=5">Balls</a><i class="fas fa-angle-right"></i></li>
              <li><a href="groupByCategories.php?id=6">Equipment</a><i class="fas fa-angle-right"></i></li>
              <li><a href="groupByCategories.php?id=7">Training gear</a><i class="fas fa-angle-right"></i></li>
            </ul>
          </div>
      </header>
      <!-- This is the content -->             
      <?= $output ?>
    </div>
  </div>
  <!-- This is the footer -->
  <div class="footer clearfix">
    <footer>
      <div class="footer-nav">
        <h2>Site navigation</h2>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="aboutus.php">About SW</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a href="viewproducts.php">View Products</a></li>
          <li><a href="privacy.php">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="footer-cat">
        <h2>Product categories</h2>
        <ul>
          <li><a href="groupByCategories.php?id=1">Shoes</a></li>
          <li><a href="groupByCategories.php?id=2">Helmets</a></li>
          <li><a href="groupByCategories.php?id=3">Pants</a></li>
          <li><a href="groupByCategories.php?id=4">Tops</a></li>
          <li><a href="groupByCategories.php?id=5">Balls</a></li>
          <li><a href="groupByCategories.php?id=6">Equipment</a></li>
          <li><a href="groupByCategories.php?id=7">Training Gear</a></li>
        </ul>
      </div>
      <div class="footer-contact">
        <h2>Contact Sports Warehouse</h2>
        <a class="facebook" href=""><i class="fab fa-facebook-f fa-4x"></i><p>Facebook</p></a>
        <a class="twitter" href=""><i class="fab fa-twitter fa-4x"></i><p>Twitter</p></a>
        <div class="other" id="other">
          <a href=""><i class="fab fa-telegram-plane fa-4x"></i><p>Other</p></a>
          <ul class="othermenu clearfix" id="othermenu">
            <li class="clearfix" id="firstother"><a href="contactus.php">Online form</a></li>
            <li class="clearfix"><a href="#">Email</a></li>
            <li class="clearfix"><a href="#">Phone</a></li>
            <li class="clearfix"><a href="#">Address</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
  <div class="copyright">
    <p>&#169;Copyright 2018 Sports Warehouse. <span>All rights reserved. </span><span>Website made by Charles Chen.</span></p>
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
