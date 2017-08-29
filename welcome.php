<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<?php
  include 'navbar.php';
  include 'database.php';
session_start();
echo "welcome ".$_SESSION['name'];
?>
<br><br>
<h2> the list of signuped users are </h2>

<div class="container">

<?php
$server='localhost';
$user='root';
$password='';
$dbname='log';

$connection=mysqli_connect($server,$user,$password,$dbname);
$query = "SELECT * FROM usersignup"; 
$result=mysqli_query($connection,$query);
//You don't need a ; like you do in SQL
/*$result = mysql_query($query);*/
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

echo "<table>"; // start a table tag in the HTML

while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['password'] . "</td></tr>";  //$row['index'] the index here is a field name

}

echo "</table>"; //Close the table in HTML
mysqli_free_result($result);

mysqlI_close($connection); 

	//<table class="table table-striped">
	//	<tr>
//<th> id </th>
//<th>name</th>
//<th>password</th>
		 //</tr> 
		
// $connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
//mysql_select_db('log');
?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>