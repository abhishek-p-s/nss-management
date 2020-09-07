<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$adress=$_POST['address'];



$dbconnect=mysqli_connect('localhost','root','','physics');
$sql="insert into address(name,phone_number,address)values('$name','$phone','$adress')";
$run=mysqli_query($dbconnect,$sql);
if($run==TRUE){
	echo"inserted";
}
else{
	echo"error";
}



?>