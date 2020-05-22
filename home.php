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
if(!is_null($row['totalques'])){
	header("location: already.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Welcome to the MOnster world...
	</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		body
		{
			background:url(edu.jpeg);
    		background-size: cover;
    		font-family: sans-serif;
		}
		td
  		{
   			text-align: center; 
    		background-color: white;
    		border:none;
    		color: white;
   			width: 40%;
  		}	
  		table
 		{
    		border-collapse: separate;
    		border-spacing: 1em;
    		background-color: white;
    		margin-left: 20px;
    		border-radius: 5px;
    		position: fixed;
		}
		#divCheckbox
		{
			background-color: #030b33;
			color: white;

		}
		#time{
			position: fixed;
			margin-left: 1370px;
			border:2px;
			width:150px;
		}

		#test{
			background-color: #030b33;
			color:white;
			border:5px;
			display: block;
			height:400px;
			border-radius: 8px
		}

		#subbtn1{
			margin-left: 26px;
			background-color: orange;
			border:none;
		}
		#subbtn2{
			margin-left: 600px;
			background-color: orange;
			border: none;
		}
		#subbtn{
			margin-left:40%;
			margin-top: 10%;
			width:90px;
			height:40px;
			border: none;
			background-color: green;
		}

		

		#test2{
			visibility: visible;
			display:none;
		}

		#test3{
			visibility: visible;
			display:none;
		}

		#test4{
			visibility: visible;
			display:none;
		}

		#test5{
			visibility: visible;
			display:none;
		}

		#test6{
			visibility: visible;
			display:none;
		}

		#test7{
			visibility: visible;
			display:none;
		}

		#test8{
			visibility: visible;
			display:none;
		}

		#test9{
			visibility: visible;
			display:none;
		}

		#test10{
			visibility: visible;
			display:none;
		}
		#real
		{
			height: 300px;
			color: white;
			background-color: #030b33;


		}
		.butt{
			width:40px;
			height:40px;
			background-color: red;
			border-radius: 4px;
			border:none;

		}

	</style>
</head>
<body>
        
	<br><h4 style="color: white; height: 25px; padding-top: 4px; padding-left: 6px; border-radius: 4px;
	margin-left: 75%; background-color: #030b33; font-size: 15px;">Logged in as: <?php echo $_SESSION['email'];?></h4>
	<br><h1 " style="background-color: #030b33;color: white; text-align: center; font-size: 25px; border-radius: 5px;margin-left: 5%; margin-right: 5%; height: 50px; padding-top: 5px;">Following are the questions, please select one out of four options provided and click the submit button after completing the test</h1><br><br>
	<div class="row">
		<div class="col-sm-1">
	 <table cellspacing="10px"  cellpadding="5px">

      
        <tr>
          <td colspan="2" style="background-color: #030b33; color: white;">Question No.</td>
        </tr>
     
       
       <tr>
       	<td><button id="1" onclick="sid(1)" class="butt"> 1 </button></td>
     	<td><button id="2" onclick="sid(2)" class="butt"> 2 </button></td>
 		</tr>

       <tr>
       <td><button id="3" onclick="sid(3)" class="butt"> 3 </button></td>
       <td><button id="4" onclick="sid(4)" class="butt"> 4 </button></td>
     </tr>


  <tr>
       <td><button id="5"onclick="sid(5)" class="butt"> 5 </button></td>
       <td><button id="6" onclick="sid(6)" class="butt"> 6 </button></td>
     </tr>


  <tr>
       <td><button id="7" onclick="sid(7)" class="butt"> 7 </button></td>
       <td><button id="8" onclick="sid(8)" class="butt"> 8 </button></td>
     </tr>


  <tr>
       <td><button id="9" onclick="sid(9)" class="butt"> 9 </button></td>
       <td><button id="10" onclick="sid(10)" class="butt"> 10 </button></td>
     </tr>


    </table>
</div>
<div class="col-sm-7" style="margin-left: 300px;">

<div class="container">
<div class="col-lg-12 " style="background-color:#030b33; width: 1200px;">

<form  action="check.php" method="post">
<br>
<div class="card" id="divCheckbox" style="margin-right: 80%">
<div id="test1" style="padding-left:25px; position:fixed; left:470px; top:200px; display:none;  width:870px;">
	<?php 
		$q="select * from questions where qid='1'";
		$query=mysqli_query($con,$q);
		
		$rows=mysqli_fetch_array($query);
		echo '<h4 class="card-header"  style="background-color: #030b33; color: white; font-size: 20px;">'.$rows['qid'].": ".$rows['question'].'</h4>';
		$q="select * from answers where ans_id= ".$rows['qid'];
			$queryy=mysqli_query($con,$q);
			while($rowss=mysqli_fetch_array($queryy)){
				echo '<br>';
				echo '<input type="radio"  id = "qwe" name="quizcheck['.$rowss['ans_id'].']" value="'.$rowss['aid'].'" onclick = "ques()">';
				echo $rowss['answers'];
			}

	 ?>

</div>
<br>

<div id="test2" style="padding-left:25px; position:fixed; left:470px; top:200px; display:none;width:870px;">
	<?php 
		$q="select * from questions where qid='2'";
		$query=mysqli_query($con,$q);
		
		$rows=mysqli_fetch_array($query);
		echo '<h4 class="card-header"  style="background-color: #030b33; color: white; font-size: 20px;">'.$rows['qid'].": ".$rows['question'].'</h4>';
		$q="select * from answers where ans_id= ".$rows['qid'];
			$queryy=mysqli_query($con,$q);
			while($rowss=mysqli_fetch_array($queryy)){
				echo '<br>';
				echo '<input type="radio"  id = "qwe" name="quizcheck['.$rowss['ans_id'].']" value="'.$rowss['aid'].'" onclick = "ques()">';
				echo $rowss['answers'];
			}

	 ?>
</div>
<br>
<div id="test3" style="padding-left:25px; position:fixed; left:470px; top:200px; display:none;  width:870px; ">
	<?php 
		$q="select * from questions where qid='3'";
		$query=mysqli_query($con,$q);
		
		$rows=mysqli_fetch_array($query);
		echo '<h4 class="card-header"  style="background-color: #030b33; color: white; font-size: 20px;">'.$rows['qid'].": ".$rows['question'].'</h4>';
		$q="select * from answers where ans_id= ".$rows['qid'];
			$queryy=mysqli_query($con,$q);
			while($rowss=mysqli_fetch_array($queryy)){
				echo '<br>';
				echo '<input type="radio"  id = "qwe" name="quizcheck['.$rowss['ans_id'].']" value="'.$rowss['aid'].'" onclick = "ques()">';
				echo $rowss['answers'];
			}

	 ?>

</div>
<br>
<div id="test4" style="padding-left:25px; position:fixed; left:470px; top:200px; display:none; width:870px;">
	<?php 
		$q="select * from questions where qid='4'";
		$query=mysqli_query($con,$q);
		
		$rows=mysqli_fetch_array($query);
		echo '<h4 class="card-header"  style="background-color: #030b33; color: white; font-size: 20px;">'.$rows['qid'].": ".$rows['question'].'</h4>';
		$q="select * from answers where ans_id= ".$rows['qid'];
			$queryy=mysqli_query($con,$q);
			while($rowss=mysqli_fetch_array($queryy)){
				echo '<br>';
				echo '<input type="radio"  id = "qwe" name="quizcheck['.$rowss['ans_id'].']" value="'.$rowss['aid'].'" onclick = "ques()">';
				echo $rowss['answers'];
			}

	 ?>

</div>
<br>
<div id="test5" style="padding-left:25px; position:fixed; left:470px; top:200px; display:none;  width:870px;">
	<?php 
		$q="select * from questions where qid='5'";
		$query=mysqli_query($con,$q);
		
		$rows=mysqli_fetch_array($query);
		echo '<h4 class="card-header"  style="background-color: #030b33; color: white; font-size: 20px;">'.$rows['qid'].": ".$rows['question'].'</h4>';
		$q="select * from answers where ans_id= ".$rows['qid'];
			$queryy=mysqli_query($con,$q);
			while($rowss=mysqli_fetch_array($queryy)){
				echo '<br>';
				echo '<input type="radio"  id = "qwe" name="quizcheck['.$rowss['ans_id'].']" value="'.$rowss['aid'].'" onclick = "ques()">';
				echo $rowss['answers'];
			}

	 ?>

</div>

<br>
<div id="test6" style="padding-left:25px; position:fixed; left:470px; top:200px; display:none;  width:870px;">
	<?php 
		$q="select * from questions where qid='6'";
		$query=mysqli_query($con,$q);
		
		$rows=mysqli_fetch_array($query);
		echo '<h4 class="card-header"  style="background-color: #030b33; color: white; font-size: 20px;">'.$rows['qid'].": ".$rows['question'].'</h4>';
		$q="select * from answers where ans_id= ".$rows['qid'];
			$queryy=mysqli_query($con,$q);
			while($rowss=mysqli_fetch_array($queryy)){
				echo '<br>';
				echo '<input type="radio"  id = "qwe" name="quizcheck['.$rowss['ans_id'].']" value="'.$rowss['aid'].'" onclick = "ques()">';
				echo $rowss['answers'];
			}

	 ?>

</div>
<br>
<div id="test7" style="padding-left:25px; position:fixed; left:470px; top:200px; display:none;  width:870px;">
	<?php 
		$q="select * from questions where qid='7'";
		$query=mysqli_query($con,$q);
		
		$rows=mysqli_fetch_array($query);
		echo '<h4 class="card-header"  style="background-color: #030b33; color: white; font-size: 20px;">'.$rows['qid'].": ".$rows['question'].'</h4>';
		$q="select * from answers where ans_id= ".$rows['qid'];
			$queryy=mysqli_query($con,$q);
			while($rowss=mysqli_fetch_array($queryy)){
				echo '<br>';
				echo '<input type="radio"  id = "qwe" name="quizcheck['.$rowss['ans_id'].']" value="'.$rowss['aid'].'" onclick = "ques()">';
				echo $rowss['answers'];
			}

	 ?>

</div>
<br>
<div id="test8" style="padding-left:25px; position:fixed; left:470px; top:200px; display:none; width:870px;">
	<?php 
		$q="select * from questions where qid='8'";
		$query=mysqli_query($con,$q);
		
		$rows=mysqli_fetch_array($query);
		echo '<h4 class="card-header"  style="background-color: #030b33; color: white; font-size: 20px;">'.$rows['qid'].": ".$rows['question'].'</h4>';
		$q="select * from answers where ans_id= ".$rows['qid'];
			$queryy=mysqli_query($con,$q);
			while($rowss=mysqli_fetch_array($queryy)){
				echo '<br>';
				echo '<input type="radio"  id = "qwe" name="quizcheck['.$rowss['ans_id'].']" value="'.$rowss['aid'].'" onclick = "ques()">';
				echo $rowss['answers'];
			}

	 ?>

</div>
<br>
<div id="test9" style="padding-left:25px; position:fixed; left:470px; top:200px; display:none; width:870px;">
	<?php 
		$q="select * from questions where qid='9'";
		$query=mysqli_query($con,$q);
		
		$rows=mysqli_fetch_array($query);
		echo '<h4 class="card-header"  style="background-color: #030b33; color: white; font-size: 20px;">'.$rows['qid'].": ".$rows['question'].'</h4>';
		$q="select * from answers where ans_id= ".$rows['qid'];
			$queryy=mysqli_query($con,$q);
			while($rowss=mysqli_fetch_array($queryy)){
				echo '<br>';
				echo '<input type="radio"  id = "qwe" name="quizcheck['.$rowss['ans_id'].']" value="'.$rowss['aid'].'" onclick = "ques()">';
				echo $rowss['answers'];
			}

	 ?>

</div>
<br>
<div id="test10" style="padding-left:25px; position:fixed; left:470px; top:200px; display:none; width:870px; background-color:#030b33">
	<?php 
		$q="select * from questions where qid='10'";
		$query=mysqli_query($con,$q);
		
		$rows=mysqli_fetch_array($query);
		echo '<h4 class="card-header"  style="background-color: #030b33; color: white; font-size: 20px;">'.$rows['qid'].": ".$rows['question'].'</h4>';
		$q="select * from answers where ans_id= ".$rows['qid'];
			$queryy=mysqli_query($con,$q);
			while($rowss=mysqli_fetch_array($queryy)){
				echo '<br>';
				echo '<input type="radio"  id = "qwe" name="quizcheck['.$rowss['ans_id'].']" value="'.$rowss['aid'].'" onclick = "ques()">';
				echo $rowss['answers'];
			}

	 ?>

</div>


</div>
</div>
</div>
<br>
<div class="row">
	<div class="col-sm-3">
<input type="button" name="prev" value="Prev" id="subbtn1" class="btn btn-success d-block" onclick="onon();">
	</div>
	<div class="col-sm-3">
<input type="button" name="next" value="Next" id="subbtn2" class="btn btn-success d-block" onclick="onebyone();">
</div>
</div>
<input type="submit" name="submit" value="Submit" id="subbtn" class="btn btn-success">
</div>
</form>
<div class="col-sm-1" style="background-color: darkred; color: white; height: 45px;  position: right;" id="time">

	<div id="response"></div>
	
<script type="text/javascript">
	var a = 0;
	window.onload = onebyone();
	setInterval(function()
	{
		 	var xmlhttp=new XMLHttpRequest();
		 	xmlhttp.open("GET","response.php",false);
		 	xmlhttp.send(null);
		 	var a = xmlhttp.responseText;
		 	abc(a);
		 	document.getElementById("response").innerHTML="Time Left: " + xmlhttp.responseText;

	},1000);
	var subbtn=document.getElementById("subbtn");
	function abc(a)
	{
		if(a == "00:00:00" || a == "00:00:01")
		{
			alert("Your Time is over, the responses will be submitted");
			subbtn.click();
		}
	}

	function ques(a)
	{
		var i;
		var b = document.getElementsByTagName("input");
		if(b[0].checked == true || b[1].checked == true || b[2].checked == true || b[3].checked == true )
			document.getElementById(1).style.backgroundColor = "green";
		if(b[4].checked == true || b[5].checked == true || b[6].checked == true || b[7].checked == true )
			document.getElementById(2).style.backgroundColor = "green";
		if(b[8].checked == true || b[9].checked == true || b[10].checked == true || b[11].checked == true )
			document.getElementById(3).style.backgroundColor = "green";
		if(b[12].checked == true || b[13].checked == true || b[14].checked == true || b[15].checked == true )
			document.getElementById(4).style.backgroundColor = "green";
		if(b[16].checked == true || b[17].checked == true || b[18].checked == true || b[19].checked == true )
			document.getElementById(5).style.backgroundColor = "green";
		if(b[20].checked == true || b[21].checked == true || b[22].checked == true || b[23].checked == true )
			document.getElementById(6).style.backgroundColor = "green";
		if(b[24].checked == true || b[25].checked == true || b[26].checked == true || b[27].checked == true )
			document.getElementById(7).style.backgroundColor = "green";
		if(b[28].checked == true || b[29].checked == true || b[30].checked == true || b[31].checked == true )
			document.getElementById(8).style.backgroundColor = "green";
		if(b[32].checked == true || b[33].checked == true || b[34].checked == true || b[35].checked == true )
			document.getElementById(9).style.backgroundColor = "green";
		if(b[36].checked == true || b[37].checked == true || b[38].checked == true || b[39].checked == true )
			document.getElementById(10).style.backgroundColor = "green";
	}


	function onebyone()
	{
			if(a == 0)
			{
				document.getElementById("subbtn1").style.visibility = "hidden";
				document.getElementById("test1").style.display = "block";
				a =1;
			}
			else if(a == 1)
			{
				document.getElementById("subbtn1").style.visibility = "visible";
				document.getElementById("test1").style.display = "none";
				document.getElementById("test2").style.display = "block";
				a = 2;
			}
			else if(a == 2)
			{
				document.getElementById("test2").style.display = "none";
				document.getElementById("test3").style.display = "block";
				a = 3;
			}
			else if(a == 3)
			{
				document.getElementById("test3").style.display = "none";
				document.getElementById("test4").style.display = "block";
				a = 4;
			}
			else if(a == 4)
			{
				document.getElementById("test4").style.display = "none";
				document.getElementById("test5").style.display = "block";
				a = 5;
			}
			else if(a == 5)
			{
				document.getElementById("test5").style.display = "none";
				document.getElementById("test6").style.display = "block";
				a = 6;
			}
			else if(a == 6)
			{
				document.getElementById("test6").style.display = "none";
				document.getElementById("test7").style.display = "block";
				a = 7;
			}
			else if(a == 7)
			{
				document.getElementById("test7").style.display = "none";
				document.getElementById("test8").style.display = "block";
				a = 8;
			}
			else if(a == 8)
			{
				document.getElementById("test8").style.display = "none";
				document.getElementById("test9").style.display = "block";
				a = 9;
			}
			else if(a == 9)
			{
				document.getElementById("subbtn2").style.visibility = "hidden";	
				document.getElementById("test9").style.display = "none";
				document.getElementById("test10").style.display = "block";
				a = 10;
			}
			else if(a == 10)
			{
				document.getElementById("subbtn2").style.visibility = "hidden";	
			}



	}

	function onon()
	{
		if(a == 1)
		{	
			document.getElementById("test1").style.display = "block";
			a = 0;
		}
		else if(a == 2)
		{
			document.getElementById("subbtn1").style.visibility = "hidden";
			document.getElementById("test2").style.display = "none";
			document.getElementById("test1").style.display = "block";
			a = 1;
		}
		else if(a == 3)
		{
			document.getElementById("test3").style.display = "none";
			document.getElementById("test2").style.display = "block";
			a = 2;
		}
		else if(a == 4)
		{
			document.getElementById("test4").style.display = "none";
			document.getElementById("test3").style.display = "block";
			a = 3;
		}
		else if(a == 5)
		{
			document.getElementById("test5").style.display = "none";
			document.getElementById("test4").style.display = "block";
			a = 4;
		}
		else if(a == 6)
		{
			document.getElementById("test6").style.display = "none";
			document.getElementById("test5").style.display = "block";
			a = 5;
		}
		else if(a == 7)
		{
			document.getElementById("test7").style.display = "none";
			document.getElementById("test6").style.display = "block";
			a = 6;
		}
			else if(a == 8)
		{
			document.getElementById("test8").style.display = "none";
			document.getElementById("test7").style.display = "block";
			a = 7;
		}
		else if(a == 9)
		{
			document.getElementById("test9").style.display = "none";
			document.getElementById("test8").style.display = "block";
			a = 8;
		}
		else if(a == 10)
		{
			document.getElementById("subbtn2").style.visibility = "visible";
			document.getElementById("test10").style.display = "none";
			document.getElementById("test9").style.display = "block";
			a = 9;
		}
	}
	function sid(k)
	{
		if(k != 1)
			document.getElementById("subbtn1").style.visibility = "visible";
		else
			document.getElementById("subbtn1").style.visibility = "hidden";
		if(k != 10)
			document.getElementById("subbtn2").style.visibility = "visible";
		else
			document.getElementById("subbtn2").style.visibility = "hidden";

		document.getElementById('test'+a).style.display = "none";
		document.getElementById('test'+k).style.display = "block";
		a=k;
	}
</script>
</div>
<br>
<br>
</body>
</html>