<?php

$customers= array();
$customers[] = array("Rahim", "rahim@gmail.com","01256879");
$customers[] = array("Karim","karim@gmail.com","0143665696");

echo "<pre>";
print_r($customers);

//using vprintf
/*foreach ($customers as $customer) {
	vprintf("Name: %s Email: %s Phone: %s <br>",$customer);
}*/
//using echo
/*foreach ($customers as $customer) {
	echo "Name: ". $customer[0]. " Email: ".$customer[1]. " Phone: ".$customer[2]."<br>";
}*/

//using list() function

foreach($customers as $customer){
	list($name, $email,$phone) = $customer;
	echo "Name: ".$name." Email: ".$email." Phone: ".$phone."<br>";
}




?>