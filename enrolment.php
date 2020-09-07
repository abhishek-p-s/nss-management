
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>student details</title>
  </head>
  <body>
<?php

$name=$_POST['name'];
$admnumber=$_POST['adnumber'];
$enrolnumber=$_POST['enrolnumber'];
$universityid=$_POST['universityid'];
$department=$_POST['inputdepartment'];
$gender=$_POST['gender'];
$religion=$_POST['religion'];
$caste=$_POST['inputcaste'];
$year=$_POST['year'];
$category=$_POST['category'];


$dbconnect=mysqli_connect('localhost','root','','nss');
$sql="insert into new_enrolment(name,admision_number,enrolment_number,university_id,
department,gender,religion,caste,year,category)values('$name','$admnumber',
'$enrolnumber','$universityid','$department','$gender','$religion','$caste','$year','$category')";
$run=mysqli_query($dbconnect,$sql);
if($run==TRUE){
	echo '<script type="text/javascript">alert("data inserted");</script>';
}
else{
	echo '<script type="text/javascript">alert("data not inserted");</script>';
}



?>

  
  <fieldset>
      <form action="enrolment.php" method="post">
	<font color="grey"><h1><b><center><label>NEW ENROLLMENT</label></center></b></h1></font>
	<br><br>
	
    <div class="form-group col-md-6">
      <label for="inputname">NAME </label>
      <input type="text" name="name" class="form-control"  placeholder="name">
    </div>
   
  </div>

      <div class="form-group col-md-6">
      <label for="inputname">ADMISSION NUMBER </label>
      <input type="text" name="adnumber" class="form-control" id="inputname" placeholder="admission number">
    </div>
      <div class="form-group col-md-6">
      <label for="inputname">ENROLLMENT NUMBER </label>
      <input type="text" name="enrolnumber" class="form-control" id="inputname" placeholder="enrollment number">
    </div>
	    <div class="form-group col-md-6">
      <label for="inputname">UNIVERSITY ID</label>
      <input type="text" name="universityid" class="form-control" id="inputname" placeholder="universitty id">
    </div>
	<div class="form-group col-md-6">
	<label for="inputname">ENTER YEAR</label>
      <input type="text" name="year" class="form-control"  placeholder="enter year">
    </div>
  
  <div class="form-group">
    <label for="inputdepartment">DEPARTMENT</label>
    <select id="inputdepartment" class="form-control" name="inputdepartment">
        <option selected>ecconomics</option>
        <option>bsc computer science</option>
		<option>b.com</option>
		<option>history</option>
		</select>
		<br><br>
		<fieldset>
		<label><div class="form-check">
		 <label class="form-check-label" for="exampleRadios1">GENDER</label><br>
		
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked>
  <label class="form-check-label" for="exampleRadios1">
    MALE
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
  <label class="form-check-label" for="exampleRadios2">
    FEMALE
  </label>
</div></fieldset>

  </div>
  <div class="form-group col-md-4">
      <label for="inputState">RELIGION</label>
      <select id="inputState" class="form-control" name="religion">
        <option selected>HINDU</option>
        <option>MUSLIM</option>
		<option>KHRISTIAN</option>
		<option>JAIN</option>
		<option>OTHERS..</option>
		
		
      </select>
    </div>
  
    <div class="form-group col-md-6">
      <label for="inputCity">CASTE</label>
      <input type="text" class="form-control" id="inputCity" name="inputcaste">
    </div>
	<div class="form-group col-md-4">
      <label >CATEGORY</label>
      <select name="category" class="form-control">
        <option selected>OBC</option>
        <option>OEC</option>
		<option>SC</option>
		<option>ST</option>
		<option>OTHERS..</option>
	      </select><br><br>
    </div>
	
	<div>
	<center><input type="submit" value="SUBMIT" class="btn btn-success">
	<a class="btn btn-primary" href="abcde.html">CANCEL</a></center></div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

	  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>