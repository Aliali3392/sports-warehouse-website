<?php
	$title = "Contact Us";
	
	ob_start();

		include "templates/contactus.html.php";

		if (isset($_POST["submitButton"])) {

			//sent mail
			require 'PHPMailer-master/PHPMailerAutoload.php';    
			$mail = new PHPMailer();
			$mail->isSMTP();
			$mail->Host = 'smtp.sendgrid.net';
			$mail->SMTPAuth = true;
			$mail->Username = 'apikey';
			$mail->Password = '';
			$mail->Port = 25;
			$mail->From = $_POST["email"];
			$mail->FromName = $_POST["firstName"]." ".$_POST["lastName"];
			$mail->addReplyTo($_POST["email"], $_POST["firstName"]);
			$mail->addAddress("Please input Your email", "Sports Warehouse");
			$mail->Subject = "Sports Warehouse Questions";
			$mail->Body = "Email: ".$_POST["email"]."\n"."Tel: ".$_POST["phone"]."\n"."Question: ".$_POST["question"]."\n"."From: ".$_POST["firstName"]." ".$_POST["lastName"]; 

			if (!$mail->send()) {  
				$output = ob_get_clean();
     			ob_start();
				include "templates/error.html.php";   
			}    
			else {
				$output = ob_get_clean();
     			ob_start();
				include "templates/confirmation.html.php";
			}
		}
		
	$output = ob_get_clean();

	include "templates/layout.html.php";
?>
