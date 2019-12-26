<?php

//if(isset($_POST['send'])){
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST ['message'];

$email_from = 'joanes0.github.io';
$email_subject = "New form submission";
$email_body = "Name:$name.\n".
                "Email:$email.\n".
                "Message:$message.\n";

$to = "joanesodanga464@gmail.com";
$headers = "From:$email_from\r\n";
$headers .= "Reply-To:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html");




























?>
