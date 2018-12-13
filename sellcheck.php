<?php
   $url="localhost";
   $user="root";
   $pwd="";
   $db="ebookxpress";
   $username=$_POST["username"];
   $bookname=$_POST["bookname"];
   $authorname=$_POST["aname"];
   $category = $_POST["category"]; 
   $location=$_POST["location"];
   $imagename=$_FILES["myimage"]["name"];
   $mobile=$_POST["number"];
   $price=$_POST["price"];
   $status=$_POST['status'];
   
   
   $con=mysqli_connect($url,$user,$pwd,$db);
   if(!$con)
   {
    die("unable to connect".mysqli_connect_error());
   }
   if(isset($_POST['optradio']))
   {
	   
     $type=$_POST["optradio"]; //  Displaying Selected Value
   }
   // Storing Selected Value In Variable  // Displaying Selected Value
   /*$insert_image="insert into table_image VALUES('$imagename')";*/
   $imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));
   /*$que=mysqli_query($con,$insert_image);
   if($que)
    echo("image uploaded successfully");
    }
	else
	{
	echo("sorry!");
	}
    mysqli_close($con);*/
    
   
   /*$sql="select username from register";
   $unames=mysqli_query($con,$sql);
   if(mysqli_num_rows($unames)>0)
   {
	   while($row=mysqli_fetch_assoc($unames))
	   {
		   if($username==$row)
		   {*/
			   $sql="insert into sell values('$username','$mobile','$bookname','$authorname','$type','$price','$category','$location','$imagetmp','$status')";
               mysqli_query($con,$sql);
			  
			 /* break;
		   }
	   }
   }*/
	mysqli_close($con);
?>
	
   