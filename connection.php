<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "login_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("fail to connect!");
}

?>