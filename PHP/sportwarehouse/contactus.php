<?php
	$title = "Contact Us";
	ob_start();
	if (isset($_POST["submitButton"])) {
		$redirect = processForm([]);

		//sent mail
		// require 'PHPMailer-master/PHPMailerAutoload.php';    
		// $mail = new PHPMailer();
		// $mail = new PHPMailer();
		// $mail->isSMTP();
		// $mail->Host = 'smtp.sendgrid.net';
		// $mail->SMTPAuth = true;
		// $mail->Username = 'apikey';
		// $mail->Password = '';
		// $mail->Port = 25;
		// $mail->From = $_POST["email"];
		// $mail->addReplyTo($_POST["email"], $_POST["firstname"]);
		// $mail->addAddress("***REMOVED***", "Sports Warehouse");
		// $mail->FromName = $_POST["firstname"];
		// $mail->Subject = "Sports Warehouse Questions";
		// $mail->Body = $_POST["question"]; 
		// if (!$mail->send()) {       
		// 	$message = $mail->ErrorInfo;   
		// }    
		
	}
	else {
		$redirect = false;
		$missingFields = [];
		include "templates/contactus.html.php";
	}

	// check the form for missing fields
	function processForm() {
		$requiredFields = ["firstName", "lastName", "phone", "email", "question"];
		$missingFields = [];
		foreach ($requiredFields as $requiredField) {
			if (!isset($_POST[$requiredField]) || !$_POST[$requiredField])
			{
				$missingFields[] = $requiredField;
			}
		}

		if ($missingFields) {
			include "templates/contactus.html.php";
			$redirect = false;
		}
		else {
			$redirect = true;
		}
		return $redirect;
	}

		function validateField($fieldName, $missingFields) {
			if (in_array($fieldName, $missingFields)) {
				return ' class="error"';
			}
		}

		function setValue($fieldName) {
			if (isset($_POST[$fieldName])) {
				return $_POST[$fieldName];
			}
		}
		
	$output = ob_get_clean();

	include "templates/layout.html.php";
?>
