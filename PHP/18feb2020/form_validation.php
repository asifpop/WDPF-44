
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
	echo "<pre>";
	print_r($_SERVER);
	echo "</pre>";

// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";



if($_SERVER["REQUEST_METHOD"] == "POST") {

  if($_POST["name"]==""){
    $nameErr = "Name is required";
  }
  else{

    $name = test_input($_POST["name"]);
  }

  if($_POST["email"]==""){
    $emailErr="Email Error";
  }
  else{
    $email = test_input($_POST["email"]);
  }

  
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name"><span><?php

if(isset($nameErr))echo $nameErr;

?>
  
</span>

<br><br>


  E-mail: <input type="text" name="email"><span><?php

if(isset($emailErr))echo $emailErr;


  ?></span>
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
