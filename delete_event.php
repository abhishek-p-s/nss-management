<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>event</title>
  </head>
  <body>
<?php
  $participent=$_POST['name'];
  
	$conn=mysqli_connect("localhost","root","","nss");
	if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
	}
	$query="DELETE FROM event_register WHERE participent='$participent'";
	$query_run=mysqli_query($conn,$query);
	if($query_run)
	{
		
		echo '<script type="text/javascript">alert("data deleted");</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("data not deleted");</script>';
	}
	
	?>
	<font color="grey"><h1><b><center><label>DELETE DATA</label></center></b></h1></font>
  <br><br><br><br>
  <form action="delete_event.php" method="post">
 <center><div class="form-group col-md-6">
      <label for="inputname">ENTER NAME</label>
      <input type="text" name="name" class="form-control"  placeholder="name">
    </div>

   <center><input type="submit" value="DELETE"class="btn btn-success">
   <a class="btn btn-primary" href="event_table.php">CANCEL</a></center>
  </center> </form>
   <table class="table table-hover">
  
    <tr>
      <th scope="col">program</th>
      <th scope="col">date</th>
      <th scope="col">participent</th>  
    </tr>
	<?php
	$conn=mysqli_connect("localhost","root","","nss");
	if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
	}
	$sql="SELECT * FROM event_register";
	$result=$conn->query($sql);
	if($result->num_rows > 0){
	while($row=$result->fetch_assoc()){
	echo"<tr><td>".$row['programs']."</td><td>".$row["date"]."</td><td>".$row["participent"]."</td></tr>";
	}
	echo"</table>";
	}
	else{
	
	echo"0 result";
	}
	
			
	
	
	$conn->close();
	
	
	?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>