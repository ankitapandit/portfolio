<?php 
$name = $_POST['name'];
$email = strip_tags($_POST['email']);
$org = $_POST['org'];
$message = $_POST['message'];
$message = str_replace("\n.", "\n..", $message);
$formcontent="$name from $org sent you a message: $message";
$recipient = "ankimit7@gmail.com";
$subject = "Contact via Portfolio";
$mailheader = "From: $email \r\n";
$mailheader = "To: $recipient \r\n";
$mailheader .= "MIME-Version: 1.0\r\n";
$mailheader .= "Content-Type: text/html; charset=UTF-8\r\n";
$mailheader .= "X-Mailer: PHP/" . phpversion();

if(mail($recipient, $subject, $formcontent, $mailheader))
	echo 'Email sent successfully';
else
	echo 'Email sending failed';
?>