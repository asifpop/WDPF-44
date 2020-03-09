<?php

	$arr=array("Monir"=>15,"Asif"=>10,"Minar"=>20,"Hasib"=>30);
	foreach ($arr as $key => $value) {
		echo "$key have $value Taka<br>";
	}
	echo "Total:".array_sum($arr)."Taka";



?>