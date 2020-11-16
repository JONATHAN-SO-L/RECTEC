<?php

if (isset($_POST['ingresar'])) {

	$user = $_POST['usuario'];
	$pass = $_POST['contrasena'];

	require 'cldb.php';

	$su = "SELECT tipo FROM usuarios WHERE usuario = '$user' AND contrasena = '$pass'";
	$ru = mysqli_query ($cn, $su);
	$rel = mysqli_fetch_array ($ru);

	switch ($rel['tipo']) {
		case '1':
		session_start();
		$_SESSION['usuario'] = $user;
		$_SESSION['tipo'] = $rel['tipo'];
		echo "<meta http-equiv='refresh' content='0; url=/rectec/sys/admin'>";
		break;

		case '2':
		session_start();
		$_SESSION['usuario'] = $user;
		$_SESSION['tipo'] = $rel['tipo'];
		echo "<meta http-equiv='refresh' content='0; url=/rectec/sys/user'>";
		break;

		default:
		echo "<meta http-equiv='refresh' content='0; url=/rectec/valis/fail.php'>";
		break;
	}

}