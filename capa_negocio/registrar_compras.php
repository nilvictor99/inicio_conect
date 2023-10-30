<?php

include("../PROCESO/con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre_producto']) >= 1 && strlen($_POST['cantidad_producto']) >= 1 && strlen($_POST['fecha_compra']) >= 1 && strlen($_POST['ruc_proveedor']) >= 1 && strlen($_POST['precio_compra'])) {
        $nombre_producto = $_POST['nombre_producto'];
        $cantidad_producto = $_POST['cantidad_producto'];
        $fecha_compra = $_POST['fecha_compra'];
        $ruc_proveedor = $_POST['ruc_proveedor'];
        $precio_compra = $_POST['precio_compra'];
        
        $consulta = "INSERT INTO compra(nombre_producto, cantidad_producto, fecha_compra, ruc_proveedor, precio_compra) VALUES ('$nombre_producto', '$cantidad_producto', '$fecha_compra', '$ruc_proveedor', '$precio_compra')";
        
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