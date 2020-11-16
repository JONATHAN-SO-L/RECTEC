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

<?php include '../../assets/layouts/header2.php'; ?><br>

<div class="container" style="background-color: white;"><br>
	<h3><center><strong>Agregar Usuarios</strong></center></h3><br>

	<form method="POST" action="#">

		<div class="form-group">

			<label><strong>Nombre: </strong></label>
			<input type="text" name="nombre" required placeholder="Ingresa el nombre" class="form-control"><br>
			<label><strong>Usuario: </strong></label>
			<input type="text" name="usuario" required placeholder="Ingresa el usuario" class="form-control"><br>
			<label><strong>Contraseña: </strong></label>
			<input type="password" name="contrasena" required placeholder="Ingresa la contraseña" class="form-control"><br>
			<label><strong>Tipo: </strong></label><br>
			<div class="form-group">
				<select class="form-control" name="tipo">
					<option value="1">Administrador</option>
					<option value="2">Usuario</option>
				</select>
			</div>
		</div>

		<center>
			<input type="submit" class="btn btn-success" name="enviar" value="Enviar">
		</center><br>

	</form>
</div>

<?php include '../../assets/layouts/footer.php'; ?><br>

<?php

require '../../valis/cldb.php';

if (isset($_POST['enviar'])) {

	$name = $_POST['nombre'];
	$user = $_POST['usuario'];
	$password = $_POST['contrasena'];
	$type = $_POST['tipo'];

	$sql = "INSERT INTO usuarios (nombre, usuario, contrasena, tipo) VALUES ('$name', '$user', '$password', '$type')";
	$cn->query($sql);
	echo "<script>alert('Usuario registrado exitosamente')</script>";
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/rectec">';
}

require '../../valis/cndb.php';

?>
