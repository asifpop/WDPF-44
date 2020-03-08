<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Form</title>
</head>
<body>
	<?php

		if(isset($_REQUEST['submit'])){

		

		echo"<pre>";
		print_r($_REQUEST);
		echo "</pre>";

		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$dist = $_REQUEST['dist'];
		echo "Name: ". $fname ." ". $lname ." Gender: ". $gender . " Address: " . $address . "District: ".$dist;
		//extract($_REQUEST);
		//echo "Name: ".$fname . " " . $lname;
	}
	?>
	<h2>Data sending to server using form</h2>
	<form action="" method="post">
		<label for="">Name</label><input type="text" name="fname"><br>
		<input type="text" name="lname">
		Male:<input type="radio" name="gender" value="male">
		Female:<input type="radio" name="gender" value="female">
		<input type="submit" name="submit" value="SEND">
		<textarea name="address" id="" cols="30" rows="10"></textarea>
		<select name="dist" id="">
			<option value="Dhaka">Dhaka</option>
			<option value="khulna">khulna</option>
			<option value="barishal">barishal</option>
		</select>
	</form>
	


</body>
</html>