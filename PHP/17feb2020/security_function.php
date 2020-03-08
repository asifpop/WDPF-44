<?php
$org = "<a href='test'>Test</a>";
echo $org;

$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new;
?> 

<?php
echo "something";
$hello  = "  Hello World";
echo trim($hello);
echo "string";

?>

<?php
$str = "Is your name O\'reilly?";

// Outputs: Is your name O'reilly?
echo stripslashes($str);
?> 