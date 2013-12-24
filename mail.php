<?php
$name = $_POST['name'];
$company = $_POST['company'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$website = $_POST['website'];
$message = $_POST['message'];
$formcontent=" From: $name \n Company: $company \n Address: $address \n Phone: $phone \n Call Back: $call \n Website: $website \n Message: $message";
$recipient = "eco@cesgroup.ca";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! We will contact you shortly!" . " -" . "<a href='index.php' style='text-decoration:none;color:#8cc63f;'> Return to home page</a>";
?>
