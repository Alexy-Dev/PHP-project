<?php
// $_POST[];
//  print_r($_POST);
 $email = $_POST['email'];
  $message = $_POST['message'];

  $error = '';
  if(trim($email) == '')
  $error = 'wrait your mail';
  else if(trim($message) == '')
  $error = 'wrait your message';
  else if(strlen($message) < 15)
  $error = 'message must have bigger than 15 symbols';

  if($error != '') {
   echo $error;
   exit;
 }

 $subject = "=?utf-8?B?".base64_encode("test message")."?=";
 $headers = "From: $email\r\nReply-to: $email\r\nContent-type:
 text/html;charset=utf-8\r\n";

 mail('polon@bigmir.net', $subject, $message, $headers);

 header('Location: /about.php');
  ?>
