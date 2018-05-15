<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?= $title ?></title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css?v=201805151522">
  <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
  <div class="wrapper clearfix">
    <div class="login-logo"><h1>Sports Warehouse</h1></div>
  	<div class="login-wrapper">
    <div class="login-box">
      <form action="post">
        <h1>Sign in</h1>
        <div class="login-row">
          <label for="email">Email (phone for mobile accounts)</label>
          <input type="text" name="email" id="email" required>
        </div>
        <div class="login-row">
          <label for="password">Password</label>
          <a href="#">Forgot your password?</a>
          <input type="password" name="password" id="password" required>
        </div>
        <input type="submit" id="signInSubmit" value="Sign in">
        <div class="keep-signin">
	        <input type="checkbox" name="rememberMe" id="rememberMe">
	        <label for="rememberMe">Keep me signed in.</label>
        </div>
      </form>
      <div class="divider-break">
        <h5>New to Sports Warehouse?</h5>
      </div>
      <div class="create-account">
	      <a href="#">Create new account</a>
      </div>
    </div>
    </div>
  </div>
  <!-- This is the footer -->
  <div class="copyright">
    <p>&#169;Copyright 2018 Sports Warehouse. <span>All rights reserved. </span><span>Website made by Charles Chen.</span></p>
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
