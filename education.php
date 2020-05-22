<?php
	if(isset($_POST['sub'])){
		//sql queries
		header("location: success.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>details page </title>
	<script src="edu_validation.js"></script>
	<link rel = "stylesheet" href = "Style.css"/>
</head>
<body>
	<h1 style=" color:coral; text-align: center"> EDUCATION DETAILS </h1>
	<form id="education" name ="details" action="education.php" method="post" onsubmit="return inval()">
		
		<!--10th details-->
		<div id ="10th">
		<p>10<sup>th</sup> details : </p>
		<span style="font-size: 20px;"> Board name : </span><input type="text" class="board"><br>
		<span class ="checkboard" style="color:red; margin-left: 200px;font-size: 13px;"></span><br><br>
		<span style="font-size: 20px;" class="pol"> Performance Scale:</span>
		<select name="scheme" class="scheme" onchange = "policy()">
			<option value="" disabled selected hidden >Select..</option>
			<option value="cgpa" > CGPA</option>
			<option value="%ge"> PERCENTAGE</option>
		</select><br>
		<span class="scale" style="color:red; margin-left: 200px;font-size: 13px;"></span><br><br>
		<span style="font-size: 20px;">Aggregate Score :</span><input type="number" id ="grade10" step="0.01" disabled><br>
		<span class="score" style="color:red; margin-left: 27%;font-size: 13px;"></span><br><br
		</div>

<!--12th details-->
		<div id ="12th">
		<p> 12<sup>th</sup> details : </p>
		<span style="font-size: 20px;"> Board name : </span><input type="text" class="board"><br>
		<span class ="checkboard" style="color:red; margin-left: 200px;font-size: 13px;"></span><br><br>
		<span style="font-size: 20px;" class="pol"> Performance Scale: </span>
		<select name="scheme" class="scheme" onchange ="policy()">
			<option value="" disabled selected hidden >Select..</option> 
			<option value="cgpa" > CGPA</option>
			<option value="%ge"> PERCENTAGE</option>
		</select><br>
		<span class="scale" style="color:red; margin-left: 200px;font-size: 13px;"></span><br>
		<span style="font-size: 20px;"> Aggregate Score: </span><input type="number" step="0.01" id="grade12" disabled><br>
		<span class="score" style="color:red; margin-left: 200px;font-size: 13px;"></span><br><br>
		</div>


<!--College details-->
		<div id ="College">
		<p>  Graduation details : </p>
		<span style="font-size: 20px;"> University name : </span><input type="text" class="colname"><br>
		<span id ="university" style="color:red; margin-left: 200px;font-size: 13px;"></span><br><br>
		<span style="font-size: 20px;"> College name : &nbsp &nbsp</span><input type="text" class="colname"><br>
		<span id = "collegename" style="color:red; margin-left: 200px;font-size: 13px;"></span><br><br>
		

		<span style="font-size: 20px;">State :</span>
		<select name="stateslist" id="state">
			<option value="" disabled selected hidden >Select State</option>
			<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
			<option value="Andhra Pradesh">Andhra Pradesh</option>
			<option value="Arunachal Pradesh">Arunachal Pradesh</option>
			<option value="Assam">Assam</option>
			<option value="Bihar">Bihar</option>
			<option value="Chandigarh">Chandigarh</option>
			<option value="Chhattisgarh">Chhattisgarh</option>
			<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
			<option value="Daman and Diu">Daman and Diu</option>
			<option value="Delhi">Delhi</option>
			<option value="Goa">Goa</option>
			<option value="Gujarat">Gujarat</option>
			<option value="Haryana">Haryana</option>
			<option value="Himachal Pradesh">Himachal Pradesh</option>
			<option value="Jammu and Kashmir">Jammu and Kashmir</option>
			<option value="Jharkhand">Jharkhand</option>
			<option value="Karnataka">Karnataka</option>
			<option value="Kerala">Kerala</option>
			<option value="Lakshadweep">Lakshadweep</option>
			<option value="Madhya Pradesh">Madhya Pradesh</option>
			<option value="Maharashtra">Maharashtra</option>
			<option value="Manipur">Manipur</option>
			<option value="Meghalaya">Meghalaya</option>
			<option value="Mizoram">Mizoram</option>
			<option value="Nagaland">Nagaland</option>
			<option value="Orissa">Orissa</option>
			<option value="Pondicherry">Pondicherry</option>
			<option value="Punjab">Punjab</option>
			<option value="Rajasthan">Rajasthan</option>
			<option value="Sikkim">Sikkim</option>
			<option value="Tamil Nadu">Tamil Nadu</option>
			<option value="Pondicherry">Telangana</option>
			<option value="Tripura">Tripura</option>
			<option value="Uttaranchal">Uttaranchal</option>
			<option value="Uttar Pradesh">Uttar Pradesh</option>
			<option value="West Bengal">West Bengal</option>
	</select><br>
	<span id = "statename" style="color:red; margin-left: 200px;font-size: 13px;"></span><br><br>

		<span style="font-size: 20px;" class="pol">Performance Scale: </span>
		<select name="scheme" class="scheme" onchange ="policy()">
			<option value="" disabled selected hidden >Select..</option> 
			<option value="cgpa" > CGPA</option>
			<option value="%ge"> PERCENTAGE</option>
		</select><br>
		<span class="scale" style="color:red; margin-left: 200px;font-size: 13px;"></span><br><br>
		<span style="font-size: 20px;">Aggregate Score: </span><input type="number" step="0.01" id="gradecol" disabled><br>
		<span class="score" style="color:red; margin-left: 200px;font-size: 13px;"></span><br><br>
		</div>


		<!-- BUTTONS-->
<br> <br>
		<input type="submit" style="margin-left: 180px; width: 20%;padding: 10px 10px; size: 5px;color: white; border-radius: 4px; border: none; background: green" name="sub"> &nbsp;&nbsp;&nbsp;&nbsp; <input style="width: 20%;padding: 10px 10px; color: white;
		border-radius: 4px; background: red; border: none;"" type="reset">
	</form>
</body>
</html>