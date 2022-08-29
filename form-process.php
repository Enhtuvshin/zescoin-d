<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "zescoin@seclab.mn";
$subject = "Mail from Zescoin";
$txt = "Email = ". $email ."\r\n Message =" . $message;
$header = "From: noreply@zescoin.mn" . "\r\n" .
"CC: zescoin@seclab.mn";
if($email!=NULL){
    mail($to,$subject,$txt,$header);
}
header("Location:index.html");
?>