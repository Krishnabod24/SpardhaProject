<html>
<head>
<style>
body {
 background-image: url("E:\IMAGES\thaku.jpg");
 background-color: #cccccc;
}
</style>
</head>
<body>
<?php
   $url="localhost";
   $user="root";
   $pwd="";
   $db="ebookxpress";
    $username=$_POST["username"];
	$con=mysqli_connect($url,$user,$pwd,$db);
     if(!$con)
    {
     die("unable to connect".mysqli_connect_error());
    }
    $sql="update sell set status=0 where username='$username'";
	$res=mysqli_query($con,$sql);
	mysqli_close($con);
?>
</body>
</html>