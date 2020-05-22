<?php
  
session_start();
if(!isset($_SESSION['email']))
{
  header('location: login.php');
}

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'examportal');

?>
<!DOCTYPE html>
<html>
<head>
<title>
Logout
</title>
<style type="text/css">
	.side
	{
		text-align: center;	
	}

	.continue
	{
		text-align: center;
	}

   .lol
	{
		text-align: right;
		background-color: tomato;
	}
  body
  {
    background:url(edu.jpeg);
    background-size: cover;
    font-family: sans-serif;
  }
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



</style>
</head>

<body>
 <h1 style="color: #030b33;">  <marquee>Online Test Portal</marquee></h1>

 <div class="lol">
 <h4 style="text-align: center; border-radius: 4px; background-color: #030b33; color: white; height: 25px; padding-top: 5px">Welcome <?php echo $_SESSION['email']; ?> </h4>
</div>

 <table  style="background-color: white; border-radius: 5px; border="1px"; cellspacing="0px" cellpadding="3px" align="center">
 	 <tr>
 	   <th style="background-color: #030b33; color: white;">Instructions, Terms & conditions</th>
 	 </tr>
 	 <br>
 	<tr style="background-color: white;">
 		<td>1. The online exam consist of 10 questions to be answered  in 10 minutes. <br>
     2. You can logout from the portal only after submitting. <br>
     3. You will not be allowed to use any kinds of gadgets while giving the eam. <br>
     4. You can give this exam only once.
     <br>
     5. click on the 'I Agree' button to start the test.
 	</td>
  </tr>

 </table>

<br>
	<div class="side">
</div>


<br><br><br>


  <p style="font-size: 20px; text-align: center; color: #030b33;"><b>The different symbols used in the next page as shown below. Please go through them and understand their meanings before your start the test.</b><p>



  	<table style="background-color: #f2f2f2;" border="1px" cellspacing="0px" cellpadding="3px" align="center">
       <tr style="background-color: #030b33; color: white;backface-visibility: 20px;">
       	<th>Symbol</th>
       	<th>Description</th>
       </tr> 

       <tr>
       	<td>
       	 <input style= "margin-left: 35%; " type="radio" disabled value="Continue">	
       	</td>
       	<td>Option not chosen</td>
       	<tr>

       	 <tr>
       	<td>
       	 <input style= "margin-left: 35%; font-size: 200px;"type="radio" checked value="Continue">	
       	</td>
       	<td>Option has been chosen (By clicking on it again you can delete your option and choose anoter option if desired.)</td>
       	<tr>

          <br><br>
       	<tr>
       	<td>
       	 <input style="margin-left: 30%; background-color: green; border: none;" type="submit" checked value="1">
       	</td>
       	<td>Question number shown in green color indicates that you have answered the question.</td>
       	<tr>


       	<tr>
       	<td>
       		<input style="margin-left: 30%; background-color: darkred; border: none;" type="submit" checked value="1">
       	</td>
       	<td>You have not attempted the question.</td>
       	<tr>
		
 

  	</table>
   </div>

  	<br><br><br>
    <div class="continue">
  	<a href="first.php"><input type="submit" name="agree" style="margin-left: center; width: 10%;padding: 5px; font-size: 20px;color: white; border-radius: 4px; border: none; background: #030b33" value="PROCEED"></a></div>
</body>
</html>
