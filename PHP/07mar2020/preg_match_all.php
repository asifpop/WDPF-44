<?php
 $userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
 preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
 
 foreach ($pat_array as $name) {
 	vprintf("%s and %s",$name );
 }
?>