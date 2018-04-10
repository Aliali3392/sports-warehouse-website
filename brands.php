<?php
	$title = "Brands and Partnerships";
	
	//start buffer
	ob_start();

	//display confirmation
	include "templates/brands.html.php";

	$output = ob_get_clean();

	include "templates/layout.html.php"
?>
