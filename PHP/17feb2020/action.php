<?php

	if(isset($_REQUEST['submit'])){

		$user = $_REQUEST['username'];
		$pass = $_REQUEST['pass'];

		echo "username:" . $user . " password: " .$pass; 
	}
	?>