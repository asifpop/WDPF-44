<?php 

/*
$fruits1 = array("Apple","Orange","Grape");
$fruits2 = array("Watermelon", "Guava", "Banana");
$allfruits = array_merge($fruits1,$fruits2);
echo"<pre>";
print_r($allfruits);

shuffle($allfruits);
print_r($allfruits);
*/
/*
$students = array("Monir", "minar", "Shohrab","Nazmul");
$score = array(45,50,60,70);
$result = array_combine($students,$score);
echo "<pre>";
print_r($result);
*/

/*
$districts = array("Dhaka","Ctg","Khulna","Magura","bogura","sylhet"); 
$subset = array_slice($districts,2,-3);//-3 means 3 element will be discarded.
$subset1 = array_slice($districts,2,2);//2 means only 2 element will be added.
$subset2 = array_slice($districts,2);

echo"<pre>";
print_r($subset);
print_r($subset1);
print_r($subset2);
*/

/*
$districts = array("Dhaka","Ctg","Khulna","Magura","bogura","sylhet"); 
$subset = array_splice($districts,2,-3,array("rajshahi","naogaon"));

echo"<pre>";
print_r($districts);
print_r($subset);
*/

/*
$array1 = array("OH", "CA", "NY", "HI", "CT"); 
$array2 = array("OH", "CA", "HI", "OP", "IA"); 
$array3 = array("TX", "MD", "NE", "OH", "HI");
$diff = array_diff($array1, $array2, $array3);//finds difference in only first array and makes the difference array.
echo"<pre>"; 
print_r($diff);
*/
?>

