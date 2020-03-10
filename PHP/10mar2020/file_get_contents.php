<?php
$users = file_get_contents("users.txt");

	echo $users;
	$usersArray = explode("\n",$users);
	foreach ($usersArray as $user) {
		list($name, $email) = explode(",", $user);
		echo "Name: ".$name."<br>";
		echo "Email: ".$email."<br>";
	}
	
	print_r($usersArray);
?>