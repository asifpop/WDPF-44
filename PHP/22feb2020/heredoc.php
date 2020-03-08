<?php

$title = "My Article title";
$body = "My Article body";
$footer = "this is footer."

$article = <<<DEF
<h1>$title</h1>
<p> $body</p>

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore cupiditate, nam ipsa! Iure corporis iste natus fugiat, repellendus ullam, numquam sit cum cumque, nisi dicta rem reprehenderit aperiam libero molestiae.
<p>$footer</p>
DEF;
echo $article;
?>