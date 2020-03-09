<?php
    if(isset($_POST['submit'])) {
     
    $mn = $_POST['num'];
    $n = 0;
     
 
        if($mn==0 || $mn==1){
        	echo "0 and 1 will not accept";
        }
        else{
        	for ($i=2;$i<$mn;$i++){
        		if ($mn%$i==0){
        			$n = $mn;
        			break;
				}
        	}    
		if ($n){
			echo $mn. " is not a prime number.";
		}
		else{
			echo $mn. " is a prime number.";
		}

	}   
}
?>

<form action="" method="post">
	
	<input type="text" name="num">
	<input type="submit" name="submit" value="Submit">


</form>