<?php include("header.php")?>

<?php require("nav.php")?>

<?php

$number = array(10,15,25);
$fruits = array("Apple", "Orange", "mango");

//associative array

$students = array("Amena"=>80, "Rubel"=>82, "Sohrab"=>85); 
?>
<table class="table table-hover">
	<tr>
		<th>Name</th>
		<th>Marks</th>
	</tr>
<?php
foreach($students as $key=>$val){
	echo "<tr>";
	echo "<td>". $key. "</td><td>".$val ."</td>";
	echo "</tr>";
}

?>
</table>
  
<?php include_once("leftsidebar.php")?>

<?php require_once("footer.php")?>
