<?php  
	require_once "classes/DBAccess.php"; 
	 
	$title = "View Products"; 
	 
	$dsn = "mysql:host=localhost;dbname=sportswarehouse;charset=utf8";  
	$username = "root";  
	$password = ""; 
	 
	//create database object  
	$db = new DBAccess($dsn, $username, $password); 
	 
	//connect to database  
	$pdo = $db->connect(); 
   
	//start buffer  
	ob_start();      
	
	//check if there is a query string field named id, if not, dislplay all products  
	if(isset($_GET["id"])) {    
		$sql = "select 	item_id, item_name, item_price, item_saleprice, item_photo 
				from 	item 
				where 	item_categoryid = :id"; 
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(":id", $_GET["id"]);
		$rows = $db->executeSQL($stmt);
		//display products   
		include "templates/products.html.php";  
	} 
	else {
		$sql = "select 	item_id, item_name, item_price, item_saleprice, item_photo 
				from 	item"; 
		$stmt = $pdo->prepare($sql);
		$rows = $db->executeSQL($stmt);        
		//display products   
		include "templates/products.html.php";	
	}
	 
	$output = ob_get_clean(); 
	 
	include "templates/layout.html.php"; 
	 
	$pdo = null;
?>
