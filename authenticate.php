<?php
	
             // Create connection
			$conn = mysqli_connect("localhost",'root','','project');
			// Check connection
			if (!$conn) 
			{
				die("Connection failed: " . mysqli_connect_error());
			}
             $username=$_POST['username']; //Fetch userid and password from login form
             $pwd=$_POST['pwd'];  
			 $sql="SELECT * FROM register where username='$username' and password='$pwd'";
             $result=mysqli_query($conn,$sql); //check for correct userid and password database 
				//get the number of rows of the query - 0 indicates invalid userid & password
             if(mysqli_num_rows($result)>0)
               {
				 session_start();
				$_SESSION['username']='$username';//store data in session variable that can be accessed in all pages
				header('Location: loginhome.php');
	           } 
			else
               {
				session_destroy();
				header('Location: login.php');
			   }
 ?>

