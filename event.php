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

$program=$_POST['program'];
$date=$_POST['date'];
$partcipent=$_POST['participent'];
$enrolment_number=$_POST['enrolment_number'];

$dbconnect=mysqli_connect('localhost','root','','nss');
$sql="insert into event_register(programs,date,participent,enrolment_number) values('$program','$date','$partcipent','$enrolment_number')";
$run=mysqli_query($dbconnect,$sql);
if($run==TRUE){
	echo '<script type="text/javascript">alert("event registerd");</script>';
}
else{
	echo '<script type="text/javascript">alert("event not register");</script>';
}



?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>enrollment</title>
  </head>
  <body>
  <font color="grey"><h1><b><center><label>EVENT REGISTER</label></center></b></h1></font>
  <br><br><br><br>
  
  <form action="event.php" method="post">
    <div class="form-group col-md-6">
      <label >PROGRAMME </label>
      <input type="text" name="program" class="form-control"  placeholder="program">
    </div>

    <div class="form-group col-md-6">
      <label >DATE</label>
      <input type="date" name="date" class="form-control" placeholder="date">
    </div>
	
    <div class="form-group col-md-6">
      <label >PARTICIPANT</label>
      <input type="text" name="participent" class="form-control"  placeholder="name">
    </div>
	<div class="form-group col-md-6">
      <label >ENROLMENT NUMBER</label>
      <input type="text" name="enrolment_number" class="form-control"  placeholder="enrolment number">
    </div>
   <center><input type="submit" value="UPLOAD"class="btn btn-success">
   <a class="btn btn-primary" href="home.php">CANCEL</a></center></div>
   </form>
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