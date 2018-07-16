<?php
	$DB="us_contact";
	$USER="root";
	$PASSWORD="";
	$HOST="localhost";
	$CON=mysqli_connect($HOST, $USER, $PASSWORD, $DB);
	if(!$CON){
		echo "connect error";
	}
?>