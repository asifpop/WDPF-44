<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sprintf and printf</title>
</head>
<body>
	<?php
	$number = "nine";
	$str = "Beijing";
	printf("There are %s million bicycles in %s.",$number,$str);
	?>
	<?php
	$number = 9;
	$str = "Beijing";
	$txt = sprintf("There are %u million bicycles in %s.",$number,$str);
	echo $txt;
	?>
	<?php
	$cost = sprintf("Total cost is $%.3f", 43.2);
	echo $cost;
	?>
	 
</body>
</html>