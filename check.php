<?php
	
session_start();
if(!isset($_SESSION['email'])){
header('location:login.php');
}

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'examportal');
$result=0;
$count = 0;
$checked = 0;
if(isset($_POST['submit'])){
	if(!empty($_POST['quizcheck'])){
		$count=count($_POST['quizcheck']);
		$i=1;
		$selected=$_POST['quizcheck'];

		$q="select * from questions";
		$query = mysqli_query($con,$q);
		while($rows= mysqli_fetch_array($query))
		{ 
			$checked = 0;
			if(isset($selected[$i]))
				$checked=$rows['ans_id']==$selected[$i];
			if($checked){
				$result++;
			}
			$i++;
		}

	}
}
	$name= $_SESSION['email'];
	$finalresult = "update user set totalques = '10', correctanswers = '".$result."' where email = '".$name."'";
	$queryresult = mysqli_query($con,$finalresult);

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="text-align: center;">
	<br><br><h1 style="color: white;">You have successfully completed the test</h1><br><br>
	<p style="font-size: 30px; font-family: sans-serif; color: white;">Your result:</p>


	<center>
		<table>
  			<tr style="background-color: #030b33; color: white;">
   			<th>Email-Id</th>
   			<th>Total Question</th>
   			<th>Attempted</th>
    		<th>Score</th>
  			</tr>
  			<tr>
    		<td><?php echo $name; ?></td>
    		<td>10</td>
    		<td><?php echo $count; ?></td>
    		<td><?php echo $result; ?></td>
  			</tr>
  		</table>
  	</center><br><br>
  	<a href = "review.php"style="width: 100px;" class="btn btn-primary m-auto d-block">Review Questions</a><br><br>

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

