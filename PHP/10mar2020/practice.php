<?php
	if(isset($_POST['submit'])) {
	$ltr = $_POST["myltr"];
	$myltr = strtolower($ltr);
	if($myltr == "a" || $myltr == "e" || $myltr == "i" || $myltr == "o" || $myltr == "u"){
		echo $myltr . " is a vowel";
	}
	else{
		echo $myltr . " is a consonent.";
	}

}




?>
<form action="" method ="post">
	<input type="text" name="myltr">
	<input type="submit" name="submit" value="vowel/consonent">
</form>