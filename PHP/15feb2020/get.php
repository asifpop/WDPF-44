<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="get.php?name='Asif'&address='Dhaka'">Test get</a>
	<?php

	//print_r($_GET);

	//echo $_GET['name'];

	if($_GET['name']=='Asif'){
		echo "Welcome to Bangladesh";
	}

	?>
</body>
</html>