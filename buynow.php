<html lang="en">
<head>
  <?php include 'styling.php'?>
</head>
<body>
<?php
   $url="localhost";
   $user="root";
   $pwd="";
   $db="ebookxpress";
    $username=$_POST["username"];
   $message="<html><body><form action='http://localhost/PROJECT/update.php' method='post'><input  class='btn btn-success' type='submit' value='click here' name='clickhere'></input>
   <input type='hidden' name='username' id='username' value='$username'></input></form></body></html>";
	/*echo "<form method='post' action='buy.php'>"."<input type='hidden' name='username' id='username' value='$username'>"."</input>".
	"<input class='btn btn-success btn-block' type='submit' value='BUY NOW' "."</input>"."</form>";*/
	$con=mysqli_connect($url,$user,$pwd,$db);
     if(!$con)
    {
     die("unable to connect".mysqli_connect_error());
    }
	$sql="select email from register where username='$username'";
	$res=mysqli_query($con,$sql);
	$nrows=mysqli_num_rows($res);
			if($nrows==1)
			{
				while($row=mysqli_fetch_array($res))
				{
					$email=$row['email'];
				}
			}
			
			   require_once('E:\EMAIL_SENDING_CODE\email/class.phpmailer.php');
			  //include("email/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
			  //$email=$_POST['email'];
			  $mail = new PHPMailer();
			  $mail->IsSMTP(); // telling the class to use SMTP
			  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
			  $mail->SMTPAuth   = true;                  // enable SMTP authentication
			  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
			  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
			  $mail->Username   = "ebookexpress05";  // GMAIL username
			  $mail->Password   = "EbookXpress";            // GMAIL password
              $mail->headers    = "Content-type:text/html;charset=UTF-8" . "\r\n";
			  $mail->SetFrom('ebookexpress05@gmail.com', 'EBOOK XPRESS'); // Change the name as you want
			  $mail->Subject    = "EBOOK XPRESS CONFIRMATION";
			  $mail->isHTML(true); 
			  $mail->Body = "Hurry Up!You got a chance to sell your book through EBOOK XPRESS.A customer is ready to buy your Book.You can have  the contact details of customers in text message that we have sent you.
Make a discussion with your customer if you  are sure to sell your book click on this link '$message'
            Clicking the link is MANDATORY!!!!
				Thanks for using our EBOOK XPRESS.";
			  $mail->AddAddress($email);
			  $mail->Send();
			
	mysqli_close($con);
?>
</body>
</html>