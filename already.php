<?php
	
session_start();
if(!isset($_SESSION['email']))
{
	header('location:login.php');
}

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'examportal');
$q = "SELECT * FROM user WHERE email = '".$_SESSION['email']."'";
$res = mysqli_query($con, $q);
$row = mysqli_fetch_array($res);

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="text-align: center;">
	<br><br><h1 style="color: white;">You have attempted the test: </h1><br><br>
	<p style="font-size: 30px; font-family: sans-serif; color: white;">Your result:</p>

	<center>
		<table>
  			<tr style="background-color: #030b33; color: white;">
   			<th>Email-Id</th>
    		<th>Score</th>
  			</tr>
  			<tr>
    		<td><?php echo $row['email']; ?></td>
    		<!--<td><?php echo $count; ?></td>-->
    		<td><?php echo $row['correctanswers']; ?></td>
  			</tr>
  		</table>
  	</center><br><br>
	<p style="font-size: 30px; font-family: sans-serif; color: white;"></p>
  	<a href = "logout.php" style="width: 100px; background-color: red; border: none;" class="btn btn-primary m-auto d-block">LOGOUT</a>

<style>
	table
	{
	  	font-family: arial, sans-serif;
  		border-collapse: collapse;
  		width: 50%;
	}

	td, th
	{
		border: 1px solid #dddddd;
  		text-align: center;
  		padding: 8px;
	}
	tr:nth-child(even)
	{
  		background-color: #dddddd;
	}
	body
	{
		background:url(edu.jpeg);
		background-size: cover;
    	font-family: sans-serif;
	}
</style>
</body>

