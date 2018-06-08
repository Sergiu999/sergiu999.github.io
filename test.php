<?php
   $to = "vwcenetrmd@gmail.com";
   $subject = $_POST["subject"];
   $message = $_POST["message"];
   $from = $_POST["email"];
   $name = $_POST["name"];
   $headers = "From: {$name} <{$from}>";
   mail($to,$subject,$message,$headers);
   echo "Mail Sent.";
?>