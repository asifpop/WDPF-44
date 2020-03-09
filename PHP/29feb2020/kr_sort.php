 <?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);
echo("<pre>");
print_r($age);
krsort($age);
print_r($age);
?>
