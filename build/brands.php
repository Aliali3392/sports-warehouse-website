<?php  
  require_once "classes/DBAccess.php"; 
     
  $title = "Products by brands"; 
     
  $dsn = "mysql:host=localhost;dbname=sportswarehouse;charset=utf8";  
  $username = "root";  
  $password = ""; 
     
  //create database object  
  $db = new DBAccess($dsn, $username, $password); 
     
  //connect to database  
  $pdo = $db->connect(); 
   
  //start buffer  
  ob_start();      
    
  //list all brands,
  $sql = "select  brand_id, brand_name, brand_photo 
         from    brand"; 
  $stmt = $pdo->prepare($sql);
  $rows = $db->executeSQL($stmt);      
  //display products   
  include "templates/brands.html.php";  
     
  $output = ob_get_clean(); 
     
  include "templates/layout.html.php"; 
     
  $pdo = null;
?>

