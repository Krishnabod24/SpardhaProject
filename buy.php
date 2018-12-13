<html>
  <?php include 'styling.php'?>
  <style>
  </style>
  </head>
  <body style="background-color:#909090">
       <div class="container" style="padding-right:0px;padding-left:0px;
				width:650px;border-radius: 10px;margin-top:150px; padding-top:15px;padding-bottom:15px;height:350px;">
	    <center><h2><b>MEET YOUR SELLER HERE</b></h2>
		<h3>Are you sure to BUY!To buy the book in offline click on BUY.
		    This will send a request to your seller and proceed further with the available seller mobile number.</h3><br>
		<h2>Thank You.</h2>
			<?php 
			   $username=$_POST["username"];
			   ?>
			
	   <form action='buynow.php' method='POST'>
		 <input type='hidden' name='username' id='username' value="<?php echo $username;?>"></input>
		 <input class='btn btn-primary' type='submit' value='BUY' id='buy' name='buy' style='width:250px;margin-top:30px;'></input></form></form>
		
	   </div></center>
	   
  </body>
  </html>
