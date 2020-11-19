<?php

$host='localhost';
$name='root';
$pwd='';
$dbname='rectec';

$cn = new mysqli ($host, $name, $pwd, $dbname);

if ($cn->connect_errno) {
	die("Conexión Fallida: ". $cn->connect_errno);
	error_reporting(1);
}

?>
