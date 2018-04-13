<?php  
	require_once "classes/DBAccess.php"; 
	 
	$title = "Products by Brands"; 
	 
	$dsn = "mysql:host=localhost;dbname=sportswarehouse;charset=utf8";  
	$username = "root";  
	$password = ""; 
	 
	//create database object  
	$db = new DBAccess($dsn, $username, $password); 
	 
	//connect to database  
	$db->connect(); 
   
	//start buffer  
	ob_start();      
	
	//check if there is a query string field named id, if not, dislplay all products  
	if(isset($_GET["id"])) {    
		$sql = "select 	item_id, item_name, item_price, item_saleprice, item_photo 
				from 	item 
				where 	item_brandid = " . $_GET["id"]; 
		$rows = $db->executeSQL($sql);        
		//display products   
		include "templates/products.html.php";  
	} 
		 
	$output = ob_get_clean(); 
	 
	include "templates/layout.html.php"; 
	 
	$pdo = null;
?>
