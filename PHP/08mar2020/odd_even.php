<?php

if(isset($_POST['submit'])) {
	
	$n1 = $_POST['sn'];
	$n2 = $_POST['en'];
	$i= 0;
	echo " below Odd and Even numbers are between $n1 and $n2<br>";
	for($i == $n1; $i<=$n2; $i++) {
		
		if ($i%2==0) {
			echo "$i is the number even<br>"; 
		}
		else {
			echo "$i is the number odd<br>"; 
		}			
	}	
}	
?>
<form action="" method="post">
	<input type="text" name="sn" placeholder="Starting Number">
	<input type="text" name="en" placeholder="Ending Number">
	<input type="submit" name="submit" value="Odd/Even Numbers">
</form>