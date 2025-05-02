<?php

	$errorMSG = "";

	// NAME
	if (empty($_POST["first_name"])) {
		$errorMSG = "First Name is required. ";
	} else {
		$first_name = $_POST["first_name"];
	}

	if (empty($_POST["last_name"])) {
		$errorMSG = "Last Name is required. ";
	} else {
		$last_name = $_POST["last_name"];
	}

	// EMAIL
	if (empty($_POST["email_address"])) {
		$errorMSG .= "Email  Address is required. ";
	} else {
		$email_address = $_POST["email_address"];
	}

	// PHONE
	if (empty($_POST["contact_number"])) {
		$errorMSG .= "Contact Number is required. ";
	} else {
		$contact_number = $_POST["contact_number"];
	}

	// MESSAGE
	if (empty($_POST["comment"])) {
		$errorMSG .= "Comment is required. ";
	} else {
		$comment = $_POST["comment"];
	}

	$subject = 'Contact Inquiry from TyMe Website';

	//$EmailTo = "info@yourdomain.com"; // Replace with your email.
    $EmailTo = "info@tymeinstitute.com";
    
	// prepare email body text
	$Body = "";
	$Body .= "name: ";
	$Body .= $name;
	$Body .= "\n";
	$Body .= "Email: ";
	$Body .= $email;
	$Body .= "\n";
	$Body .= "Phone: ";
	$Body .= $phone;
	$Body .= "\n";
	$Body .= "Message: ";
	$Body .= $message;
	$Body .= "\n";

	// send email
	$success = @mail($EmailTo, $subject, $Body, "From:".$email);

	// redirect to success page
	if ($success && $errorMSG == ""){
	   echo "success";
	}else{
		if($errorMSG == ""){
			echo "Something went wrong :(";
		} else {
			echo $errorMSG;
		}
	}

?>