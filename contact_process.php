<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$mymessage = $_POST['message'];
 	$to = "w.soaringeagle@gmail.com";
	$subject = "Contact Request from Eagle Bear Productions";
	$message = "Below are details of User : \n";
	$message .= "Name : $name \n";
	$message .= "Email : $email \n";
	$message .= "Phone : $phone \n";
	$message .= "Message : $mymessage \n";
	$from = "w.soaringeagle@gmail.com";
	$headers = "From:" . $from;
	mail($to,$subject,$message);
	header('Location: contact.html');
	exit;
?>