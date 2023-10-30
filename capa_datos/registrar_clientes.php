<?php

include("../PROCESO/con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['dni']) >= 1 && strlen($_POST['correo']) >= 1) {
	$name = trim($_POST['nombre']);
	$apellido = trim($_POST['apellido']);
    $dni = trim($_POST['dni']);
	$email = trim($_POST['correo']);
	$fecharegistro = date("d/m/y");
	$consulta = "INSERT INTO clientes(nombre ,  apellido , dni , correo ,  fecha_registro ) VALUES ('$name','$apellido','$dni','$email','$fecharegistro')";
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