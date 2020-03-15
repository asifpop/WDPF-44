<?php
if(isset($_POST['submit'])){
	$sn = $_POST['sn'];
	$en = $_POST['en'];
	$i=0;
	if($sn==0||$sn==1){
		echo "0 and 1 is not acceptable.";
	}
	else{
	for($i=$sn;$i<=$en;$i++){
		for($j=2;$j<$i;$j++){
			if($i%$j==0){
				$n = $i;
				break;
			}	
		}
		if($n){
			echo "$i is not a prime number.<br>";
		}
		else{
			echo "$i is a prime number.<br>";
		}
	}
}
}


?>
<form action=""method="post">
	
	<input type="text" name="sn">
	<input type="text" name="en">
	<input type="submit"name="submit" value="Submit">

</form>