<?php

$db = array(
	'hostname' => getenv('DB_HOST'),
	'username' => getenv('DB_USERNAME'),
	'password' => getenv('DB_PASSWORD'),
	'database' => getenv('DB_DATABASE'),
);

$conn = mysqli_connect($db['hostname'], $db['username'], $db['password']);
mysqli_set_charset($conn, 'utf8');
mysqli_select_db($conn, $db['database']);

