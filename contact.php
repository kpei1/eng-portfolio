<?php

$myName = $_POST['myName'];
$myEmail = $_POST['myEmail'];
$myMessage = $_POST['myMessage'];
$recipient = "kpriu1@jhu.edu";
$subject = "Eng Portfolio Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $myMessage, $mailheader) or die("Error!");
echo "Thank you!";

?>