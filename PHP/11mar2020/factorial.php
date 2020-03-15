<?php
	
	function factorial($n){
		if($n == 0 || $n == 1){
			return 1;
		}
		$previous = factorial($n-1);
		$current = $n*$previous;
		return $current;
	}

if (isset($_POST['submit'])){
	$n = $_POST['n'];
	$r = factorial($n);
	echo "The factorial of $n is:$r";
}


?>

<form action=""method="post">
	<input type="text" name="n">
	<input type="submit" name="submit"value="Submit">
</form>