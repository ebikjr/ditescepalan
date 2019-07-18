<?php
date_default_timezone_set('Asia/Bangkok');

$db_username        = 'u485548475_secu'; //MySql database username
$db_password        = 's3cure'; //MySql dataabse password
$db_name            = 'u485548475_secu'; //MySql database name
$db_host            = 'localhost'; //MySql hostname or IP

$con = mysqli_connect($db_host,$db_username,$db_password,$db_name);
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>