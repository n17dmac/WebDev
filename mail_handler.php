<?php
	if(isset($_POST['action'])){
	$name = $_POST['fname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$msg = $_POST['message'];
	
	$to = 'info@qualitexph.com';
	$message = "Name: ".$name."\n"."Wrote the following: "."\n".$msg;
	$headers = "From: ".$email;
	
	if(mail($to, $subject, $message, $headers)){
		echo 'Sent Successfully! Thank you'. $name.', We will contact you shortly!';
	}
	else{
		echo 'Something went wrong!';

	}
	}
	
?>