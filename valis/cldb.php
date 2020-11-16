<?php

session_start();

if (isset($_SESSION['usuario'])) {}	
	else {
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/rectec">';
}

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