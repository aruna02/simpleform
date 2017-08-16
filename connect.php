<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include 'database.php';
if(isset($_POST['btn1'])){

$name=$_POST['name'];
$password=$_POST['pass'];
/*$id=$_POST['id'];*/

$query="INSERT INTO usersignup(name,password) VALUES('$name','$password')";
}

  if( mysqli_query ($connection,$query)) {
      echo "new record created successfully";
  } else {
      echo "error creating record " . mysqli_error();
  }


 ?>

</body>
</html> 

