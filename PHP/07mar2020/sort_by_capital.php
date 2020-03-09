<?php
	$country = array("India"=>"Delhi", "Pakistan"=>"Islamabad", "Srilanka"=>"Colombo", "Nepal"=>"Kathmundu", "Bangladesh"=>"Dhaka");
asort($country);
foreach ($country as $key => $value) {
	echo "Country: $key -- Capital: $value<br>";
}
?>
