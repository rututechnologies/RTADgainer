<?php

$db = array(
	'hostname' => env('DB_HOST'),
	'username' => env('DB_USERNAME'),
	'password' => env('DB_PASSWORD'),
	'database' => env('DB_DATABASE'),
);

put_log('env :' . print_r($db));

$conn = mysqli_connect($db['hostname'], $db['username'], $db['password']);
mysqli_set_charset($conn, 'utf8');
mysqli_select_db($conn, $db['database']);

