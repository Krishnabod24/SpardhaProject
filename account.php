<?php include 'access.php';?>
<html>
	<head>
		<?php include 'styling.php';?>
	</head>
	<body>
		<?php include "heading.php";?>
		<?php include 'loginnav.php';?>
		<div class="container"style=" height:480px;width:600px;
		margin-top:0px; border-radius: 10px; background-color: #E0E0E0;
		padding-top:15px;padding-bottom:15px;">
			<div style="padding-bottom:10px;">
				<h2><center>Account Details:</center></h2>
			</div>
			<div style="padding-bottom:10px;">
				<center><img src="Images\person.jpg" width="240" height="150"></img></center>
			</div>
			<form class="form-horizontal">
				<div class="form-group">
				<label class="control-label col-sm-4">Name:</label>
					<div class="col-sm-6">
						<p id="name"></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">Email:</label>
					<div class="col-sm-6">
						<p id="email"></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">ContactNumber:</label>
					<div class="col-sm-6">
						<p id="number"></p>
					</div>
				</div>
				<div class="form-group"> 
					<label class="control-label col-sm-4">Location:</label>
					<div class="col-sm-6">
						<p id="location"></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">Contact Address</label>
					<div class="col-sm-6">
						<p id="address"></p>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>