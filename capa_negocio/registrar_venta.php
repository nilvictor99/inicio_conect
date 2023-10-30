<?php

include("../PROCESO/con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['codigo']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['cantidad']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['fecha'])) {
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha'];

$consulta = "INSERT INTO venta(codigo, nombre, cantidad, precio, fecha) VALUES ('$codigo', '$nombre', '$cantidad', '$precio', '$fecha')";

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