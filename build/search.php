<?php  
	require_once "classes/DBAccess.php"; 
	 
	$title = "Search result";  
	 	 
	//check if the search button has been pressed  
	$search = $_GET["search"];   
	$dsn = "mysql:host=localhost;dbname=sportswarehouse;charset=utf8";   
	$username = "root";   
	$password = ""; 
	 
	//create database object   
	$db = new DBAccess($dsn, $username, $password); 
	 
	//connect to database   
	$pdo = $db->connect(); 

	//start buffer  
	ob_start(); 
	 
	//set up query to execute   
	$sql = "select 	item_id, item_name, item_price, item_saleprice, item_photo 
			from 	item 
			where 	item_name like '%$search%'";      
	
	//execute SQL query   
	$rows = $db->executeSQL($sql);     
	//display products   
	include "templates/products.html.php";  
	 
	$output = ob_get_clean(); 
	 
	include "templates/layout.html.php"; 
?>
