<?php
  $title = "View cart";
  
  //start buffer
  ob_start();

  //display confirmation
  include "templates/cart.html.php";

  $output = ob_get_clean();

  include "templates/layout.html.php"
?>
