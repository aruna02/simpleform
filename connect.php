<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$server='localhost';
$user='root';
$password='';
$dbname='log';

$connection=mysqli_connect($server,$user,$password,$dbname)  ;
/*include 'database.php';*/
if(isset($_POST['btn1'])){

$name=$_POST['name'];
$password=$_POST['pass'];
/*$id=$_POST['id'];*/

$query="INSERT INTO usersignup(name,password) VALUES('$name','$password')";
}

  if( mysqli_query ($connection,$query)) {
    include 'nav.php';
      include 'phpsignup.php';
  } else {
      echo "error creating record " . mysqli_error();
  }


 ?>

</body>
</html> 

