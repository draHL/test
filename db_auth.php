<?php

$dbparams = parse_ini_file('database.ini');
if ($dbparams === false) {	
	header("HTTP/1.1 500 Internal Server Error");
	exit;	
}
$debug_msg = "";

$db_user = $dbparams['user'];
$db_password = $dbparams['password'];
$db_name = $dbparams['database'];
$db_port = $dbparams['port'];
// $app_mode = $dbparams['app_mode'];

define('DB_USER', $db_user);
define('DB_PASSWORD', $db_password);
define('DB_NAME', $db_name);
define('DEV_MODE', $dbparams['dev_mode']);





$db_string = 'mysql:host=localhost;dbname=' . $db_name;

date_default_timezone_set("Asia/Jakarta");

function database_connect()
{

	$con = mysqli_connect('localhost', DB_USER, DB_PASSWORD, DB_NAME);
	if (mysqli_connect_errno()) {
		
		header("HTTP/1.1 500 Internal Servers Error");
		exit(json_encode(array('success'=>0,'message' => 'Database connection error')));
	}
	mysqli_query($con, 'set time_zone="+07:00"');
	
	return $con;
}


