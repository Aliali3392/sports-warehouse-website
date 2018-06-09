<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.2/css/bulma.min.css'>
    <link rel="stylesheet" href="./css/cart.css">
  </head>
  <body>
    <div class="container">
      <nav class="nav has-shadow" style='box-shadow: 0 1px 0 rgba(219,219,219,.3);'>
        <div class="nav-left">
          <a class="nav-item" href="home.php">
            <img src="./images/logos/logo.png" alt="SW logo">
          </a>
        </div>
        <div class="nav-right nav-menu">
          <a href="viewcart.php" class="nav-item is-tab">
            Shopping Cart
          </a>
          <div class="nav-item is-tab">
            <div class="field is-grouped">
              <p class="control">
                <a href="checkout.php" class="button is-info">
                  <span class="icon">
                    <i class="fa fa-shopping-cart"></i>
                  </span>
                  <span>Checkout</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </nav>
      <?= $output ?>
    </div>
    <div class="copyright">
      <p>&#169;Copyright 2018 Sports Warehouse. <span>All rights reserved. </span><span>Website made by Charles Chen.</span></p>
    </div>
  </body>
</html>
