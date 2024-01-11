<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$to = "'$email'";
$subject = "gaurav Site Login";
$txt ="Name = ". $name . "\r\n  Email = " . $email . ;
$headers = "From: noreply@gauravtest.com" . "\r\n" .
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:login.html");
?>