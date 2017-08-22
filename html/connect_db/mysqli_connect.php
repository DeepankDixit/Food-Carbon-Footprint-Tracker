<?php
	
	DEFINE ('db_user', 'deepank');
	DEFINE ('db_password', 'deepank@sql');
	DEFINE ('db_host', 'localhost');
	DEFINE ('db_name', 'fcft');

	$dbcon = @mysqli_connect(db_host, db_user, db_password, db_name) OR die('Could not connect to MySQL ' . mysqli_connect_error());

?>