<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'styling.php'?>
</head>
<body>
<div class="jumbotron" >
  <img src="E:\IMAGES\compy.jpg" class="img-thumbnail" height="180" width="180" align="left"  alt="EXPLORE HERE"  style="margin-left:170px; margin-top:10px;height:140px"></img>
  <div class="container text-center">
    <h1 style="background-color:#C0C0C0;color:black;margin:30px;padding:7px;"><i><b>Competetive Books</b></i></h1>      
 </div>
</div>
<?php include 'navbar.php'?>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="container">
   <div class="row">
        <div class="col-lg-3" style="background-color:#e8e8e8;">
		  <?php
		     //header("content-type:image/jpeg");
		     $url="localhost";
		     $user="root";
             $pwd="";
			 $db="ebookxpress";
			 //$category=$_POST['category'];
			 //
			  $con=mysqli_connect($url,$user,$pwd,$db);
			  if(!$con)
			{
				die("unable to connect".mysqli_connect_error());
			}
			$sql="select username,image,status from sell where category='competitive'";
			$res=mysqli_query($con,$sql);
			$nrows=mysqli_num_rows($res);
			if($nrows>0)
			{
			while($row=mysqli_fetch_array($res))
			{
				$image_name=$row["image"];
				$username=$row["username"];
				$status=$row['status'];
				if($status==1){
				echo "<div class='panel panel-primary' style='height:298px; margin-top:15px;'>";
				echo  "<div class='panel-heading'>"."HERE IS YOUR BOOK"."</div>";
				echo  "<div class='panel-body'>";
				echo '<img src="data:image/jpeg;base64,'.base64_encode( $image_name ).'" class="img-responsive" style="width:100%; height:105px;" alt="Image">';
				//<img src='$image_name' class='img-responsive' style='width:100%' 'height:80px' alt='Image'>".
				echo "</div>";
				echo   "<div class='panel-footer' style='margin-top:50px' 'border-radius:1px'>"."<form method='post' action='buy.php'>"."<input type='hidden' name='username' id='username' value='$username'>"."</input>"."<input class='btn btn-success btn-block' type='submit' value='BUY NOW' "."</input>"."</form>"."</div>"."</div>"."<br>";
					/*echo "img src=".$image_name." width=100 height=100";*/
				}
			}
			}
			mysqli_close($con);
	
		?>
		</div>

		  <!--<img src='$res' style="height:300px;width:200px;border:3px;margin-top:10px;margin-bottom:12px;"></img>-->
		<div class="col-lg-5" style="background-color:#e8e8e8;width:750px;">
		 <?php
		     $url="localhost";
		     $user="root";
             $pwd="";
			 $db="ebookxpress";
			  $con=mysqli_connect($url,$user,$pwd,$db);
			  if(!$con)
			{
				die("unable to connect".mysqli_connect_error());
			}
			$sql="select * from sell where category='competitive'";
			$res=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($res))
			{    
		       $status=$row['status'];
				if($status==1)
				{

		        echo "<div class='panel panel-primary' style='height:298px; margin-top:15px;'>";
				echo  "<div class='panel-heading'>"."<center>"."BOOK DETAILS"."</center>"."</div>";
				echo  "<table class='table table-striped'>";
				echo  "<div class='panel-body' style='background-color:#F8F8F8;padding:0px;'>";
					
				//echo "<div class='container-fluid'  style='color: black; font-size:15px;margin-top:15px;'>";
			
			    echo "<tr>"."<td style='padding:1px; padding-left:45px;'>"."<h5>"."<b>"."USERNAME:"."</b>"."&emsp;&emsp;".$row['username']."</td>"."</tr>";
				echo "<tr>"."<td  style='padding:1px; padding-left:45px;''>"."<h5>"."<b>"."MOBILE"."</b>"."&emsp;&emsp;".$row['mobile']."</td>"."</tr>";
				echo "<tr>"."<td style='padding:1px; padding-left:45px;'>"."<h5>"."<b>"."BOOKNAME:"."</b>"."&emsp;&emsp;".$row['bookname']."</td>"."</tr>";
				echo "<tr>"."<td style='padding:1px; padding-left:45px;'>"."<h5>"."<b>"."AUTHORNAME:"."</b>"."&emsp;&emsp;".$row['authorname']."</td>"."</tr>";
				echo "<tr>"."<td style='padding:1px; padding-left:45px;'>"."<h5>"."<b>"."TYPE:"."</b>"."&emsp;&emsp;".$row['type']."</td>"."</tr>";
				echo "<tr>"."<td style='padding:1px; padding-left:45px;'>"."<h5>"."<b>"."PRICE:"."</b>"."&emsp;&emsp;".$row['price']."</td>"."</tr>";
				echo "<tr>"."<td style='padding:1px; padding-left:45px;'>"."<h5>"."<b>"."LOCATION:"."</b>"."&emsp;&emsp;".$row['location']."</td>"."</tr>"."</div>"."</table>";
				//echo "<hr class='style1' .style1='border-top: 1px solid #8c8b8b;'>";
				echo "</div>"."<br>";
				}
			}
			mysqli_close($con);
		?>
			
		</div>
   </div>   
</div>
</body>
</html>