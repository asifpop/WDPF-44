<?php

$users = file("users.txt");


foreach($users as $user){
$userlist=explode("|", $user);

list($name, $area, $district) = $userlist;
echo "Name: ".$name.",". "Area: ".$area.",". "District: ".$district."<hr>";
}
?>