<?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $message = $_POST['message'];

 $email_from = 'streetlightkids@icloud.com';

 $email_subject = "New Email From OC Billiards";

$email_body = 
"Client Name: $name.\n".
"Client Email: $visitor_email.\n".
"Client Message: $message.\n";

$to = "streetlightkids@icloud.com";

$headers = "From" $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>