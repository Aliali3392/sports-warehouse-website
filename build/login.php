<?php
  require_once "classes/Authentication.php";
  $title = "Login";

  //the authentication class is static so there is no need to create an instance of the class
  $message = "";
  if(isset($_POST["signInSubmit"])) {
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
      //authenticate user
      $loginSuccess = Authentication::login($_POST["username"], $_POST["password"]);
      if(!$loginSuccess) {
        $message = "Username or password incorrect";
        $error = true;
      }
    }
  }

  //display confirmation
  include "templates/login.html.php";
?>