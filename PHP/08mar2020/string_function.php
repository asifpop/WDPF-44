<?php

//	$day = "Today is mens day";
//	echo strlen($day);
//  strtolower($day);
//	strtoupper($day);
// 	echo ucfirst($day);
// echo ucwords($day);
// echo lcfirst($day);
?>
<?php
/* $pswd = "supersecret";
 $pswd2 = "supersecret2";
 if (strcmp($pswd, $pswd2) != 0) {
 echo "Passwords do not match!";
 } else {
 echo "Passwords match!";
 }
 */
?>
<?php
 /*$email1 = "admin@example.com";
 $email2 = "ADMIN@example.com";
 if (! strcasecmp($email1, $email2))
 echo "The email addresses are identical!";
?>
<?php
 $password = "3312345";
 if (strspn($password, "1234567890") == strlen($password))
 echo "The password cannot consist solely of numbers!";
 */
?>
<?php
 $recipe = "3 tablespoons Dijon mustard
 1/3 cup Caesar salad dressing
 8 ounces grilled chicken breast
 3 cups romaine lettuce";
 // convert the newlines to <br />'s.
 echo nl2br($recipe);
?>