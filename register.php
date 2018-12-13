<html lang="en">
	<head>  
		<?php include 'styling.php'?>
		<script src="register.js"></script>
	</head>
	<body>
		<?php include 'heading.php';?>
		<?php include 'navbar.php';?>
		<div>
		  <div>
			<center><h3><i>Get Registered now!</i></h3></center>
		  </div>
		</div>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
				  <img src="Images\reg.png" width="100%"></img>
				</div>
				<div class="col-sm-6"  style="border:1px #DCDCDC;padding-top:15px;padding-bottom:15px;border-radius:10px;
				background-color:#DCDCDC" >
				  <form class="form-horizontal "action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" onSubmit="return validate();">
					 <div class="form-group">
					  <label class="control-label col-sm-4" for="name">
					  <span class="glyphicon glyphicon-user"></span> Name:</label>
					  <div class="col-sm-6">
						<input type="text"
						class="form-control" id="name" placeholder="Enter Your name"
						name="name" value="<?php echo $_POST['name'];?>">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-4" for="username">
					  <span class="glyphicon glyphicon-user"></span> UserName:</label>
					  <div class="col-sm-6">
					<input type="text" class="form-control" value="<?php echo $_POST['username'];?>"
					id="username" placeholder="Enter user name" name="username">
					<?php
					$name=$_POST["name"];
					$username=$_POST["username"];
					$password=$_POST["pwd"];
					$repassword=$_POST["repwd"];
					$contact=$_POST["number"];
					$email=$_POST["email"];
					$location=$_POST["location"];
					$address=$_POST["comment"];
					if(isset($_POST['submit']))
					{
					$username=$_POST['username'];
					$conn = mysqli_connect("localhost",'root','','project');
					if (!$conn) 
					{
						die("Connection failed: " . mysqli_connect_error());
					}	
					$sql="SELECT * FROM register where username='$username'";
					$res=mysqli_query($conn,$sql);
					if(mysqli_num_rows($res)>0)
					{ 
						echo "please enter a valid username";
					}
					else
					{
						$sql1="insert into register values('$name','$username','$password','$repassword',$contact,'$email','$location','$address')";
				        $result=mysqli_query($conn,$sql1);
						header('Location:mainpage.php');
					}
				mysqli_close($conn);
					}
				?>
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-4" for="pwd">
					  <span class="glyphicon glyphicon-eye-close"></span> Password:</label>
					  <div class="col-sm-6">          
						<input type="password" class="form-control" value="<?php echo $_POST['pwd'];?>"
						id="pwd" placeholder="Enter password" name="pwd">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-4" for="reenterpwd">
					  <span class="glyphicon glyphicon-eye-close"></span> Re-enter Password:</label>
					  <div class="col-sm-6">          
						<input type="password" class="form-control" id="repwd" 
						value="<?php echo $_POST['repwd'];?>"
						placeholder="Enter password again" name="repwd">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-4" for="contact">
					  <span class="glyphicon glyphicon-earphone"></span> Contact Number:</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="number"
						value="<?php echo $_POST['number'];?>"
						placeholder="Enter number" name="number">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-4" for="email">
					  <span class="glyphicon glyphicon-envelope"></span> Email:</label>
					  <div class="col-sm-6">
						<input type="email" class="form-control" id="email" 
						value="<?php echo $_POST['email'];?>"
						placeholder="Enter email" name="email">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-4" for="location">
					  <span class="glyphicon glyphicon-map-marker"></span> Location:</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="location" 
						value="<?php echo $_POST['location'];?>"
						placeholder="Enter Location" name="location">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-4" for="address">
					  <span class="glyphicon glyphicon-home"></span> Contact Address:</label>
					  <div class="col-sm-6">
						<textarea class="form-control" rows="5"
						value="<?php echo $_POST['comment'];?>"
						id="comment" name="comment" placeholder="Enter Current Address"></textarea>
					  </div>
					</div>
					<div class="form-inline col-sm-12">
						<input type="submit"  class="btn btn-primary col-sm-6" value="Register" name="submit">
						<input type="reset"  class="btn btn-danger col-sm-6" value="cancel" >
					</div>
				  </form>
				</div>
			 </div>	
		</div> 
	</body>
</html>
