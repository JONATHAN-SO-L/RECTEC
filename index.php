<?php

session_start();

if (isset($_SESSION['tipo'])) {

	switch ($_SESSION['tipo']) {
		case '1':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/rectec/sys/admin">';
		break;

		case '2':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/rectec/sys/user">';
		break;
		
		default:

		break;
	}
}

?>

<?php include "assets/layouts/header1.php"; ?>

<div class="container">
	<h2 style="color: white;"><strong><center>RECTEC | Recursos Técnicos y Tecnológicos</center></strong></h2>
</div><br>

<div class="container">
	<form method="POST" action="valis/user.php" 
	style="background-color: white; 
	margin: auto;
	width: 100%;
	max-width: 500px;
	background: #F3F3F3;
	padding: 10px;
	border-radius: 5px;" 
	class="container"><br>
	<center>
		<img class="login" src="/jomotec/assets/img/logo.png" style="height: 100px; width: 100px;">
		<h2>Iniciar Sesión</h2>
		<input class="form-control" type="text" name="usuario" placeholder="Usuario" required>
		<br>
		<input class="form-control" type="password" name="contrasena" placeholder="Contraseña" required>
		<br>
		<input class="btn btn-success" type="submit" name="ingresar" value="INGRESAR">
	</center><br>
</form>
</div>

<?php include "assets/layouts/footer.php"; ?>