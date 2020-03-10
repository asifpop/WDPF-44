<?php
/*
echo date("d-m-Y: h:i:s")."<br>";
echo "April 31, 2017: ".(checkdate(4, 31, 2017) ? 'Valid' : 'Invalid');
echo $weekday = date("l");
echo $daynumber = date("jS");
echo $monthyear = date("F Y");
echo "The time is: ".date("H:i:s A");
$timestamp = time();
$data = getdate($timestamp);
echo "<pre>";
print_r($data);
echo $data['month'];

$timestamp1 = mktime(16,35,00,3,01,2020);
$data1 = getdate($timestamp1);
print_r($data1);
*/
?>

<?php
$now = mktime();
$taxDeadline = mktime(0,0,0,4,15,2021);
// Difference in seconds
$difference = $taxDeadline - $now;
// Calculate total hours
$hours = round($difference / 60 / 60);
echo "Only ".number_format($hours)." hours until the tax deadline!";
echo "<br>";
echo $futuredate = strtotime("+45 days");
echo date("F d, Y", $futuredate);
?>