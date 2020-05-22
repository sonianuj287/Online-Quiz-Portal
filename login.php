<?php
	session_start();
	if(isset($_SESSION['email']))
		header("location: instructions.php");
	if(isset($_POST['signup']))
	{
		$con = mysqli_connect('localhost','root','','examportal');
		$query = 'INSERT INTO user(email, password) VALUES("'.$_POST['emailid'].'", "'.$_POST['password'].'")';
		$r = mysqli_query($con, $query);
		//$_SESSION['email'] = $_POST['emailid'];
		if($r)
			header("location: education.php");
	}
?>
<?php
	if(isset($_POST['login']))
	{
		$con = mysqli_connect('localhost','root','','examportal');
		$ema = $_POST['email'];
		$pas = $_POST['password1'];
		$query = "SELECT * FROM user WHERE email='$ema' AND password='$pas'";
		$row = mysqli_query($con, $query);
		$res = mysqli_fetch_array($row);
		if(mysqli_num_rows($row)==1 )
		{
			$_SESSION['email'] = $_POST['email'];
			if(!is_null($res['totalques']))
				header("location: already.php");
			else
				header("location: instructions.php");
		}
		
		else
		{
			?><script>alert("You have not signed up, please sign up to continue");</script><?php
		}
		//$query = 'SELECT INTO user(email, password) VALUES("'.$_POST['emailid'].'", "'.$_POST['password'].'")';
		//$r = mysqli_query($con, $query);
		//$_SESSION['email'] = $_POST['emailid'];
		//if($r)
		//	header("location: education.php");
	}
?>
<html>
<meta charset = "utf-8">
<head>

	<title>login</title>
	<link rel = "stylesheet" href = "style1.css"/>
	<script src="edu_validation.js"></script>

</head>
<body id = "an" value = "abc">
	<h1 style="color: #030b33;"><marquee>Online Examination Portal</marquee></h1>
	<div id="login" >
		<form action="login.php" method="post" onsubmit="return loginvalid()">
		<label>Email: </label>
		<input id = "le" type="Email" name="email">&nbsp&nbsp
		<label>Password: </label>
		<input id = "lp" type="password" name="password1">&nbsp&nbsp
		<input id="lgn" type="submit" name="login" value="Sign-ln"><br>
		<span id = "lee" style="margin-left: 7%; font-size: 13px; color: red;"></span>
		<span id = "lpe" style="margin-left: 22%; font-size: 13px; color: red"></span>
	</form>
	</div><br><br><br>
	<div id = "signup">
	<h2 style="color: red;">Not yet registered?</h2>
	<p style="color: green;">Sign Up to continue</p>
	<form action="login.php" method="post" onsubmit="return validate()">
			<label>First Name: </label><br>
			<input id = "firstname" type="text" name="first"><br>
			<span id = "spf" style="font-size: 13px; color: red"></span><br>
			<label>Last Name: </label><br>
			<input type="text" id = "last" name="last"><br>
			<span id = "spl" style="font-size: 13px; color: red"></span><br>
			<label>Gender: </label><br>
				<input type="radio" name="gender">Male
				<input type="radio" name="gender">Female
				<input type="radio" name="gender">Others<br>
			<span id = "spg" style="font-size: 13px; color: red"></span><br>
			<label>EmailId:</label><br>
			<input id= "semail" type="Email" name="emailid"><br>
			<span id = "spe" style="font-size: 13px; color: red"></span><br>
			<label>Password: </label><br>
			<input id = "spas" type="password" name="password"><br>
			<span id = "spp" style="font-size: 13px; color: red"></span><br>
			<label>Confirm Password: </label><br>
			<input type="password" name="conpas"><br>
			<span id = "spcp" style="font-size: 13px; color: red"></span><br><br>
			<input id="submit" type="submit" name="signup" value="Signup">
			<input id="reset" type="reset" name="reset">
	</form>
	</div>
	<div id="texts">
		<p><i>
	**This is an online examination portal to hire freshers in
	our technical Staff team. But we test the candidate through on-
	line examination. If you are already registered please login to
	continue or if you have not then please signup to attempt an
	online examination **
	</i></p>
	</div>
		<p style="color: red;">&copy;Developed by @anuj@sid@sunny@yogibear<p>
	</body>
</html>