<?php

include("../PROCESO/con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre_proveedor']) >= 1 && strlen($_POST['ruc']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['correo']) >= 1) {
$nombre_proveedor = $_POST['nombre_proveedor'];
$ruc = $_POST['ruc'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$fecharegistro = date("d/m/y");

$consulta = "INSERT INTO proveedor(nombre_proveedor, ruc, telefono, correo, fecha_registro) VALUES ('$nombre_proveedor', '$ruc', '$telefono', '$correo', '$fecharegistro')";

	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
	?>
	<h3 class="ok">¡Te has inscripto correctamente!</h3>
    <?php
	} else {
	?>
	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
    <?php
	}
    }   else {
	?>
	<h3 class="bad">¡Por favor complete los campos!</h3>
    <?php
    }
}

?>