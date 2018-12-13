<html>
	<head>
		<?php include 'styling.php'?>
		<script src="login.js"></script>
	</head>
	<body>
		<?php include "heading.php";?>
		<?php include 'navbar.php';?>
		<div>
			<center><i><font size="6" color="#4682B4">Login Here!</font></center>
		</div>
		<div class="container" style="height:350px;width:420px;border-radius10px;
		background-color: #E0E0E0;	padding-top:30px;padding-bottom:30px;" >
			<form class="form-horizontal" method="POST" action="authenticate.php" onSubmit='return validate();'>
				<div class="form-horizantal">
					<center><img src="Images\login.jpg" height="150"></img></center>
				</div>
				<br>
				<div class="form-horizantal form-group col-sm-12 ">
				  <div class="col-sm-2">
					<span class="glyphicon glyphicon-user"></span>
				  </div>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="username"
					placeholder="Enter user name " name="username">
				  </div>
				</div>
				<div class="form-horizantal form-group col-sm-12">
					<div class="col-sm-2">
						<span class="glyphicon glyphicon-eye-close"></span>
					</div>
					<div class="col-sm-10">          
						<input type="password" class="form-control" id="pwd" 
						placeholder="Enter password" name="pwd">
					</div>
				</div>
				<div class="form-horizantal form-group">
				<center><input type="submit" style="width:300px;"
				class="btn btn-success" value="Login"></center>
				</div>
			</form>
		</div>
	</body>
</html>
