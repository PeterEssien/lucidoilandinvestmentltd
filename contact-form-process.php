<?php
//get data from form

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "essienpeter57@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:home.html");
?
