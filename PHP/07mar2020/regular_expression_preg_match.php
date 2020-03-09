<?php

//if(isset($_POST['submit'])){
if(($_SERVER['REQUEST_METHOD'])=='POST'){
$name = $_POST["name"];
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  echo $nameErr = "Only letters and white space allowed";
}
else {
	echo "Data is validated.";
}
}
?>
<form action="" method="post">
	

<input type="text" name="name">
<input type="submit" name="submit">

</form>