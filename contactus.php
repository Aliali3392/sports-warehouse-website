<?php
	$title = "Contact Us";
	
	ob_start();

		if(isset($_POST["submitButton"])) {
			processForm([]);
		}
		else {
		//display the order form
		//no missing fields at this stage
			$missingFields = [];
			include "templates/contactus.html.php";
		}

		//check the form for missing fields
		function processForm() {
			//set up array of required fields
			$requiredFields = ["firstName", "lastName", "email", "question"];

			//set up array of missing fields
			$missingFields = [];


			//loop through each required field and check the fields exists
			foreach($requiredFields as $requiredField) {
				if(!isset($_POST[$requiredField]) || !$_POST[$requiredField])
				{
					//if the field is missing add it to the array
					$missingFields[] = $requiredField;
				}
			}

			//display missing fields
			if($missingFields) {
				//include missing fields file
				include "templates/contactus.html.php";
			}
			else {
				//sent mail
				sentMail();
			}
		}
		// include "templates/registrationForm.html.php";
		function validateField($fieldName, $missingFields) {
			if(in_array($fieldName, $missingFields)) {
				return ' class="missing"';
			}
		}

		function setValue($fieldName) {
			if(isset($_POST[$fieldName])) {
				return $_POST[$fieldName];
			}
		}

		function sentMail() {
			require 'php/PHPMailer-master/PHPMailerAutoload.php';    
			$mail = new PHPMailer();
			$mail->isSMTP();
			$mail->Host = 'smtp.sendgrid.net';
			$mail->SMTPAuth = true;
			$mail->Username = 'apikey';
			$mail->Password = 'Your password';
			$mail->Port = 25;
			$mail->From = $_POST["email"];
			$mail->FromName = $_POST["firstName"]." ".$_POST["lastName"];
			$mail->addReplyTo($_POST["email"], $_POST["firstName"]);
			$mail->addAddress("Your eamil address", "Sports Warehouse");
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
