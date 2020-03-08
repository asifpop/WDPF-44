<?php

	function footer_func(){
		echo"<p>copyright all rights reserved 2020</p>";
	}

	//footer_func();
	//footer_func();
	//footer_func();

	//function with arguments

	function full_name($fast,$last){
		//echo "$fast $last";
		echo $fast . " " . $last;
	}
	full_name("Rahim","Uddin");

	//function with arguments and default value

	function welcome($name,$time="Good Morning"){
		echo "$time, $name!";
	}
	welcome("Rahim");
	welcome("karim", "GOOD NIGHT");


	function sum($num1, $num2){
		$total=$num1+$num2;
		return $total;
	}
	$output = sum(5,20);
	echo $output;

?>