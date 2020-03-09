<?php

	$file = "file_access_time.php";
	printf("File last accessed: %s", date("m-d-y g:i:sa",fileatime($file)));
	printf("File last changed: %s", date("m-d-y g:i:sa",filectime($file)));
	printf("File last modified: %s", date("m-d-y g:i:sa",filemtime($file)));
?>