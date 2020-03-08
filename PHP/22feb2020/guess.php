<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guess with form</title>
</head>
<body>
	<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$secretNumber = 453;
	if ($_POST['guess']== $secretNumber){
		echo "Congratulations.";
	}
	elseif (abs($_POST['guess'] - $secretNumber)<10){
		echo "very close!";

	}
	else {
		echo "Sorry.";
	}
}


	?>

<form action="guess.php" method="post">
	
	Guess:<input type="number" name="guess">
	<input type="submit" value = "Submit">

</form>


</body>
</html>