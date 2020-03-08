<h1>is array</h1>

<?php

$days = array ("Sunday", "Monday", "Tuesday");

echo is_array($days);



?>
<h1>is bool</h1>
<?php

$str = TRUE;
echo is_bool($str);

?>

<h1>is float</h1>
<?php

$str = 200.5445;
echo is_float($str);

?>

<h1>is null</h1>
<?php

$str =null;
echo is_null($str);

?>

<h1>is object</h1>
<?php

class employee{
	public $name;
	public $age;
}
$obj1 = new employee;
echo is_object($obj1);

?>

