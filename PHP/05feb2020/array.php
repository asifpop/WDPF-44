<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>
<body>
	

<?php

	$days=["sunday", "monday","Tuesday", "Thursday"];

	$fruits=array("apple", "mango", "orange", "grape");
	print $days[0];
	print "<br>";
	print $days[1];
	print "<br>";
	print $fruits[2];

	for($i = 0; $i<count($fruits); $i++){
		print $fruits[$i]."<br>";
	}

?>


</body>
</html>