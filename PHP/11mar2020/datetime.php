<?php

$date = new DateTime("21 January 2018 21:55");
echo "<pre>";
print_r($date);

echo $date->format("d-M-Y h:i:sA");

$date = new DateTime("May 25, 2018 00:33");
$date->modify("+27 hours");
echo $date->format("Y-m-d h:i:s");

$terminationDate = new DateTime('2018-05-30');
$todaysDate = new DateTime('today');
$span = $terminationDate->diff($todaysDate);
echo "Your subscription ends in $span->days days!";


?>