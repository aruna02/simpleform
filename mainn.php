<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
session_start();
$server='localhost';
$user='root';
$password='';
$dbname='log';

$connection=mysqli_connect($server,$user,$password,$dbname)  ;

/*include 'database.php';*/
if(isset($_POST['btn2'])){

$namee=mysql_real_escape_string($_POST['name']) ;
$passwordd=mysql_real_escape_string($_POST['pass']);
$sql="select * from usersignup where name='$namee' && password='$passwordd'";
	$result=mysqli_query($connection,$sql);
	if(mysqli_num_rows($result)==1){
		$_SESSION['name']= $namee;
		header('Location:welcome.php');
}
else{
	echo "invalid entry";
}

if(isset($_GET['logout'])){
	session_unregister('name');
}	/*
	$row=mysql_fetch_array($result);
	 if( mysqli_query ($connection,$row)) {
		if( $row['name'] == $namee && $row['password'] == $passwordd ){

	echo "login successfully";
}

else{
	echo "invalid entry";
}}
*/

}


?>


</body>
</html>