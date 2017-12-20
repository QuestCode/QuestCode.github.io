<?php
  if(!isset($_POST['submit'])) {
    echo "Error, you need to submit a form!";
  }

  $name = $_POST['name'];
  $visitor_email = $_POST['email']
  $message = $_POST['message']

  if(empty($name) || empty($visitor_email)){
    echo "Name and email are mandatory";
    exit;
  }

  $email_subject = 'New Email From Website';
  $email_body = "You have a new message from $name\n".
                "email address : $visitor_email\n".
                "Message: $message"
  $to = 'devdoesit17@gmail.com';
  $header = "From: $visitor_email";

  mail($to,$email_subject,$email_body,$header)
 ?>
