<?php
//get data from form  
if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['message']))
{
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "najmimurtaza2@gmail.com";
$subject = "Mail From needygeeks";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@needygeeks.com" . "\r\n" .
"CC: shamsspd03@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
}
//redirect
header("Location:thankyou.html");
?>
