<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style >
  	.btn1{
  		
  		background-color: red;
  		font:blue;

 		}

  </style>
</head>
<body> <br><br><br>
<div class="container" >
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-6" style="background-color: lightblue;>
<div class="card" ">
<form method="post" action="connect.php">
<br><br><br>
<div class="form-group">
	<label>Name: </label><br>
	<input type="text" class="form-control" name="name" placeholder="enter your name" /> 
	</div>
	<div class="form-group">
	<label>password: </label> <br>
	<input type="password"  class="form-control" name="pass" placeholder="enter a new password" /></div>

	<input type="submit" name="btn1" value="signup" class="btn btn-md btn-success btn-block" />
	<!-- <button id="btn1" class="btn-info"> signup</button> -->
<br><br><br>
<h3>Already signup !! <input type="button" name="signin" value="sign in" class="btn btn-primary btn-md"></h3>

</form></div></div></div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>