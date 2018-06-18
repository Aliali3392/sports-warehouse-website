<?php
  require_once "classes/AdminAuthentication.php";
  $title = "Create new account";;
  session_start();
  //the authentication class is static so there is no need to create an instance of the class
  $message = "";
  if(!empty($_POST["newpassword"]) && !empty($_POST["oldpassword"])) {
    //add user
    $message = AdminAuthentication::changePassword($_SESSION["username"], $_POST["newpassword"]);
  }
  session_write_close();
  //start buffer
  ob_start();
  //display form
  include "templates/settings.html.php";
  $output = ob_get_clean();
  include "templates/adminlayout.html.php"
?>
