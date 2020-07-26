<?php
  $name = $_Post['name'];
  $visitor_email = $_Post['email'];
  $message = $_Post['message'];

  $email_from = 'gouthamarcot@gmail.com';
  $email_subject = "Trial";
  $email_body = "User Name: $name.\n".
                "User email: $visitor_email.\n".
                "User message: $message. \n";

  $to = "niveditamadhava1@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers = "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);
  header("Location: trial.html");
  ?>