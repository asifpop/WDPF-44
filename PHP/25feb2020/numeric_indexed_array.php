<?php

	$carbrands=["Chevrolet", "Ford", "honda"];
	echo "<pre>";
	print_r($carbrands);
	var_dump($carbrands);

	$states = ["Ohio" =>array("population"=> "11,353,140","capital"=>"columbus")];

	print_r($states);
	$players = ["Bangladesh"=> array("CTG"=>"Tamim","Norail"=>"mashrafee"),
				"India"=> array("KK"=>"Sourav Ganguly","Delhi"=>"Kohli")
				];
	print_r($players); 

	$flowers=array();
	$flowers[0]="Rose";
	$flowers[1]="Sunflower";
	$flowers[]="Tulip";
	$flowers[]="Daffodil";

	print_r($flowers);

	echo count($flowers);
?>