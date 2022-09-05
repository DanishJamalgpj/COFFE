<?php
//get data from form  
$name = $_POST['author'];
$email= $_POST['email'];
$website=$_POST['url']
$message= $_POST['text'];
$to = "danishjamal.dj@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ;
$headers = "From: amanenterprises350@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank.html");
?>