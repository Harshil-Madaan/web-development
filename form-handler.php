<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['Message'];

$email_from = 'historicalplaces.com';

$email_subject = 'New enquiry';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n"
              "Subject: $visitor_email.\n"
              "User Message: $visitor_email.\n";

$to = 'hmadaan50_be21@thapar.edu';

$headers = "From: $email_from \r \n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html");

?>
