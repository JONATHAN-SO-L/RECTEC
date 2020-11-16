<?php

session_start();

if (isset($_SESSION['tipo'])) {

	switch ($_SESSION['tipo']) {
		case '2':
		echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/rectec">';
		break;
		
		default:

		break;
	}
}

if (isset($_SESSION['usuario'])) {}	
	else {
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/rectec">';
}

?>

<?php include '../../assets/layouts/header2.php'; ?>

<br><h2 style="color: white;"><center><strong>¡Bienvenido Admin!</strong></center></h2><br>

<div class="container" style="background-color: white;">

	<h4><br>
		<center>Elige lo que deseas realizar</center>
	</h4><br>

	<center>
		<a href="adduser.php" class="btn btn-success btn-lg" style="margin: 10px;">AGREGAR USUARIOS</a>
	</center><br>

</div><br>

<?php include '../../assets/layouts/footer.php'; ?>
