<?php

session_start();

if (isset($_SESSION['usuario'])) {}	
	else {
	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/rectec">';
}

?>

<?php include '../../assets/layouts/header2.php'; ?><br>

<div class="container" style="background-color: white;"><br>
	<h3><center><strong>Informar sobre los requerimientos</strong></center></h3><br>

	<form method="POST" action="#">

		<div class="form-group">

			<label><strong>Nombre: </strong></label>
			<input type="text" name="nombre" required placeholder="Ingresa tu nombre" class="form-control"><br>
			<label><strong>Sede: </strong></label>
			<input type="text" name="sede" required placeholder="Ingresa tu sede" class="form-control"><br>
			<label><strong>Detalles: </strong></label>
			<textarea class="form-control" rows="5" name="detalles" placeholder="Ingresa los detalles, incluye tu número de teléfono"></textarea>

		</div>

		<center>
			<input type="submit" class="btn btn-success" name="enviar" value="Enviar">
		</center><br>

	</form>
</div>

<?php include '../../assets/layouts/footer.php'; ?><br>

<?php

if(isset($_POST['enviar'])){

	$name=$_POST['nombre'];
	$site=$_POST['sede'];
	$details=$_POST['detalles'];

	$destinatario="computoyserviciosjomotec@gmail.com";
	$asunto=utf8_decode("Informe de requerimientos RECTEC | JOMOTEC");
	$cuerpo= utf8_decode("Te ha contactado:  ".$name."\n\nDe la sede:  ".$site."\n\nEstos son los detalles del informe: \n\n".$details);

	mail($destinatario, $asunto, $cuerpo);

	echo "<script>alert('¡TUS REQUERIMIENTOS SE HAN ENVIADO CON ÉXITO! Pronto uno de los técnicos principales se comunicará contigo')</script>";

	echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/rectec">';

}

?>
