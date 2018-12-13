<html>
	<head>
		<?php include'styling.php'?>
		<script src="sell.js"></script>
	</head>
	<body>
		<?php include "heading.php";?>
		<?php include "navbar.php";?>
		<div class="container" style="padding-right:0px;padding-left:0px;height:510px;
		  width:700px;margin-top:30px; padding-top:15px;padding-bottom:15px;
		  background-color:#DCDCDC; border-radius: 10px;">
		<form class="form-horizontal" method="POST" action="sellcheck.php" enctype="multipart/form-data" onSubmit='return validate();'>
			<div>
					<center><i><font size="7" color="#4682B4"	>HAPPY SELLING!</font></center>
				</div>
				<div class="row">
					<div class="col-sm-8 form-group" style="padding-right:0px;">
						<div class="form-group">
							<label class="control-label col-sm-4" for="username">
							<span class="glyphicon glyphicon-user"></span> UserName:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="username"
								 placeholder="Enter user name" name="username">
							</div>
						</div>
						<div class="form-group">
						   <label class="control-label col-sm-4" for="contact">
							<span class="glyphicon glyphicon-earphone"></span> Mobile No:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="number" placeholder="Enter number" name="number">
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-4" for="bookname">
						  <span class="glyphicon glyphicon-book"></span> Book Name:</label>
						  <div class="col-sm-6">          
							<input type="text" class="form-control" id="bookname" 
							placeholder="Enter Book Name" name="bookname">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-4" for="aname">
						  <span class="glyphicon glyphicon-pencil"></span> Author Name:</label>
						  <div class="col-sm-6">          
							<input type="text" class="form-control" id="aname" placeholder="Enter Author Name" name="aname">
						  </div>
						</div>
						<div class="form-group">
						 <label class="control-label col-sm-4" for="type">
						 <span class="glyphicon glyphicon-list-alt"></span> Type:</label>
						 <div class="col-sm-6">      
							<label class="radio-inline"><input type="radio" name="optradio" id="optradio" value="old">Old</label>
							<label class="radio-inline"><input type="radio" name="optradio" id="optradio" value="new">New</label>
						</div>
					   </div>
					   <div class="form-group">
						 <label class="control-label col-sm-4" for="type">
						 <span class="fa fa-inr"></span> Price:</label>
						 <div class="col-sm-6">      
						    <input type="text" class="form-control" id="price" placeholder="Enter book price" name="price">
						</div>
					   </div>
					   <div class="form-group">
						  <label class="control-label col-sm-4" for="address">
						  <span class="glyphicon  glyphicon-menu-hamburger"></span> Category:</label>
						  <div class="col-sm-6">
						   <select class="form-control" id="sel1" name="category">
								<option value="Education">Educational Books</option>
								<option value="Competitive">Competitive Books</option>
								<option value="Novels">Novels and Magazines</option>
							</select>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-4" for="address">
						  <span class="glyphicon glyphicon-map-marker"></span> Location:</label>
						  <div class="col-sm-6">
						  <input type="text" class="form-control" id="location" placeholder="Enter Your City only" name="location">
							
						  </div>
						</div>
						<div class="form-group form-horizantal">
							<center><input type="submit" class="btn btn-success btnsize "
							value="Sell" style="width:126px;"></center>
						</div>
					</div>
					<div class="col-sm-4">
						<img src="Images\book1.jpg" style="width: 200px;border:3px; height:190px; padding-right: 15px;">
						</img>
						<center><h4>Upload Book Image</h4></center>
                        <input type="file" name="myimage" id="myimage"><br>
					</div>
			</div>
		</form>
	</div> 
</html>
