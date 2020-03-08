<?php

$customers= array();
$customers[] = array("Rhaim", "rahim@gmail.com", "017170000");
$customers[] = array("Mamun", "mamun@gmail.com", "017170000");
$customers[] = array("Karim", "karim@gmail.com", "017170000");

echo "<pre>";

//print_r($customers);

echo "<h2><u> Rule-1 </u></h2>";
foreach ($customers as $customer) {
	/*vprintf("Name : s%  Email: %s  Phone: %s <br>",$customer);*/
	
	echo " Name : " . $customer[0] .  " Email :" . $customer[1] . " Phone :" . $customer[2] . "<br>";

} 

echo "<h2><u> Rule-2 </u></h2>";
foreach ($customers as $customer) {
	list($name,$email,$phone)= $customer;
	echo "Name :" . $name . "Email " . $email . "Phone " . $phone . "<br>";


}

?>
<hr>
<table border="1">
	<tr>
		<TD>SL</TD>
		<TD>Name</TD>
		<TD>Email</TD>
		<TD>Phone</TD>
	</tr>
	<?php
	$id = 1;
	foreach ($customers as $customer) {
	list($name,$email,$phone)= $customer;
	
	?>

	<tr>
		<td><?php echo $id; ?></td>
		<TD><?php echo $name ?></TD>
		<TD><?php echo $email ?></TD>
		<TD><?php echo $phone ?></TD>
		
	</tr>
<?php $id++; } ?> <!--This is For PHP Ending };-->

</table>