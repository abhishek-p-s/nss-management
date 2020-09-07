<?php

	$username=$_POST['uname'];
	$password=$_POST['psw'];
	mysqli_connect("localhost","root","");
mysqli_select_db("loginform");
	$result=mysqli_query("select * from loginform where username='$username'AND password='$password'") or die("faield to query database");
	$row=mysqli_fetch_array($result);
	if($row['username']==$username)&& if($row['password']==$password) {
	echo"login successfully";
	}
	else{
	echo"faield to login";
	}
	
	?>