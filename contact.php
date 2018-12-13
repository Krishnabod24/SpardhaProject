<html>
	<head>
		<?php include'styling.php';?>
		<script>
		function validate()
		{
		var email = document.getElementById('email').value;
		var mobile = document.getElementById('mno').value;
		var name = document.getElementById('uname').value;
		if(name == "")
		{
		alert("Name should not be Empty!");
		return false;
		}
		var nm = /^[A-Za-z ]{4,30}$/; //Regular Expression to match a value with exactly 12 digits
		if(!nm.test(name))
		{
		alert("Invalid Name! Name should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters");
		return false;
		}
		if(mobile == "")
		{
		alert("Mobile should not be Empty!");
		return false;
		}
		var mb = /^[0-9]{10}$/; //Regular Expression to match a value with exactly 10 digits
		if(!mb.test(mobile))
		{
		alert("Invalid Mobile Number! Enter a valid 10 Digit Mobile Number");
		return false;
		}
		if(email == "")
		{
		alert("Email should not be Empty!");
		return false;
		}
		var atpos = email.indexOf("@"); //get the position of @ in the input email string
		var dotpos = email.lastIndexOf("."); //get the position (last occurrence) of .
		//Checks Min 2 chars in email name (ravi/abc12), domain name (gmail/yahoo) and domain type (.com/.net)
		if (atpos < 2 || dotpos <= atpos+2 || dotpos+2 >= email.length)
		{
		alert("In-valid E-mail Address!");
		return false;
		}
		}
		</script>
		<style>
		input[type=text], select, textarea {
		width: 100%;
		padding: 8px;
		border: 1px solid #A9A9A9;
		border-radius: 8px;
		<!-->width:1030px;-->
		box-sizing: border-box;
		margin-top: 6px;
		margin-bottom: 5px;
		resize: vertical;
		}
		input[type=submit] {
		background-color:#00CC00;
		color:white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		}
		input[type=submit]:hover {
		background-color: #00FF00;
		}
		.btnsize
		{
		width:300px;
		}
		</style>
	</head>
	<body>
		<?php include 'heading.php';?>
		<?php include 'navbar.php';?>
		<div class="container" >
			<div class="row">
				<div class="col-sm-8">
					<form action="action_page.php" method="post" onSubmit="return validate();">
						<label for="fname">Your Name</label><br>
						<input type="text" id="uname" name="uname" placeholder="Your name.."><br>
						<label for="mobileno">Mobile No</label><br>
						<input type="text" id="mno" name="mno" placeholder="Your mobile number.."><br>
						<label for="email">Email</label><br>
						<input type="text" id="email" name="email" placeholder="valid mail.."><br>
						<label for="subject">Message</label><br>
						<textarea id="subject" name="subject" placeholder="Write Your Query.." style="height:150px"></textarea><br>
						<div class="form-horizantal form-group" style="padding-top:30px;">
							<center><input type="button" class="btn btn-primary btnsize" value="Submit"></center>
						</div>
					</form>
				</div>
				<div class="col-sm-4" style="padding-left: 90px;">
				<img src="Images\contact.jpg" height="400" width="300">
			 </div>
			</div>
	   </div>
	</body>
</html>