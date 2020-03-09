<?php
 $file = 'Beginning PHP and MySQL_ From Novice to Professional 5th Edition.pdf';
 echo $bytes = filesize($file)."<br>";
 echo $kilobytes = round($bytes/1024, 2);

?>