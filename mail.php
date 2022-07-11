<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "lugeyoarnaudalg04@gmail.com";
$subject = "Mail From ALG-TECH";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  subject = " . $subject. "\r\n Message =" . $message;
$headers = "From: noreply@algtech.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>