<?php

$host='localhost';
$name='id15300461_root';
$pwd='Jkl9f22289001;';
$dbname='id15300461_rectec';

$cn = new mysqli ($host, $name, $pwd, $dbname);

if ($cn->connect_errno) {
	die("Conexión Fallida: ". $cn->connect_errno);
	error_reporting(1);
}

?>
