<?php

$customers= array();
$customers[] = array("Rahim", "rahim@gmail.com","01256879");
$customers[] = array("Karim","karim@gmail.com","0143665696");
	echo "<table border='2'>";
	echo "<tr><th>Name</th><th>Email</th><th>Phone</th></tr>";
foreach($customers as $customer){
	list($name,$email,$phone) = $customer;
	echo "<tr>";
	echo "<td>".$name."</td>";
	echo "<td>".$email."</td>";
	echo "<td>".$phone."</td>";
	echo "</tr>";
}
echo "</table>";
?>