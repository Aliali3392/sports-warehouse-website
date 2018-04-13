<?php  
	require_once "classes/DBAccess.php"; 
	 
	$dsn = "mysql:host=localhost;dbname=sportswarehouse;charset=utf8";  
	$username = "root";  
	$password = ""; 
	 
	//create database object  
	$db = new DBAccess($dsn, $username, $password); 
	 
	//connect to database  
	$db->connect(); 

	//start buffer  
	ob_start();      
	
	//check if there is a query string field named id, if not, dislplay all items  
	if(isset($_GET["id"])) {    
		$sql = "select 	item_id, item_name, item_price, item_saleprice, item_photo, item_description 
				from 	item where item_id = " . $_GET["id"]; 
		$rows = $db->executeSQL($sql);        
		//display item   
		include "templates/item.html.php";  
	}
	 
	$output = ob_get_clean(); 

	$title = "$productName"; 
	 
	include "templates/layout.html.php"; 
	 
	$pdo = null;
?>
