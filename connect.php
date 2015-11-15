<?php
$hostname = "br-cdbr-azure-south-a.cloudapp.net";
$username = "b208b48e5fc405";
$password = "29880bac";
$database_name = "db_webApps";

$conn = mysql_connect($hostname, $username, $password)
		or die ("Error menghubungkan ke host database");
$db = mysql_select_db($database_name)
		or die ("Error menghubungkan ke database");
?>