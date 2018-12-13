<?php
	$username = "leelakrishnabodepu@gmail.com";
	$hash = "18e5de5d4ef9bbfc388685ed16d2cdc61e019d1d97245d327cd39b3d58279b8f";
	$test = "0";
	$otp=rand(1000,9999);
	$sender = "TXTLCL"; 
	$numbers = "918309160800";
	$message = "Thanqs for registering into EBOOK EXPRESS.\nYour OTP is $otp";
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);
?>