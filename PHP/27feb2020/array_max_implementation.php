<?php
	//in_array() function
	/*$state = "Ohio"; $states = array("California", "Hawaii", "Ohio", "New York"); if(in_array($state, $states)) echo "Not to worry, $state is smoke-free!"; 
	*/
	//array_key_exists(), array_search(),array_values(),sizeof(),array_count_values() function
	$districts = array("Dhaka"=>10,"Rajshahi"=>5,"khulna"=>3);
	$search = "Dhaka";
	$number = 10;
	//echo array_key_exists($search, $districts);
	//echo array_search($number, $districts);
	//$cities = array_keys($districts);
	echo "<pre>";
	//print_r($cities);
	//$pops = array_values($districts);
	//print_r(array_values($pops));
	//echo sizeof($districts);
	
	//$states = array("Ohio", "Iowa", "Arizona", "Iowa", "Ohio"); 
	//$stateFrequency = array_count_values($states); 
	//print_r($stateFrequency); 

	//$states = array("Ohio", "Iowa", "Arizona", "Iowa", "Ohio"); 
	//$uniqueStates = array_unique($states); 
	//print_r($uniqueStates);

	//$grades = array(42, 98, 100, 100, 43, 12); 
	//sort($grades); 
	//print_r($grades);
	//$changed = array_reverse($grades);
	//print_r($changed);

	$output = array_flip($districts);
	print_r($output);
?>