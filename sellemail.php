<?php

  require_once('email/class.phpmailer.php');
  //include("email/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
  $email=$_POST['email'];
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "ebookexpress05";  // GMAIL username
  $mail->Password   = "EbookXpress";            // GMAIL password

  $mail->SetFrom('ebookexpress05@gmail.com', 'EBOOK XPRESS'); // Change the name as you want
  $mail->Subject    = "EBOOK XPRESS REGISTRATION";
  $mail->Body = "Thank You for selling your book in EBOOK XPRESS.\nHappy selling and buying books.\nYou can now view your book in ''";
  $mail->AddAddress($email);
  $mail->Send();
  ?>