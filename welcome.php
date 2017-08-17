<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
echo "welcome ".$_SESSION['name'];
echo '<br>  <a href="phpsignup.php?action=logout">logout </a>';
?>
</body>
</html>