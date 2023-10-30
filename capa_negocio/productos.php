<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR_PRODUCTOS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/styli.css">
</head>
<body style="background-image: url('../img/m.jpg'); background-size: cover;">
    <div class="form-container">
        <form method="post">
            <h1>REGISTRAR_PRODUCTOS</h1>
            <label for="codigo">Codigo del Producto:</label>
        <input type="text" id="codigo" name="codigo">
        
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" id="nombre" name="nombre">
        
        <label for="cantidad">Cantidad de Producto:</label>
        <input type="number" id="cantidad" name="cantidad">
        
        <label for="precio">Precio de Venta:</label>
        <input type="number" id="precio" name="precio">
        
        <label for="fecha">Fecha y Hora de Venta:</label>
        <input type="datetime-local" id="fecha" name="fecha">
        <input type="submit" name="register">
        </form>
        <img src="../img/r.jpg" alt="Imagen de encima del formulario" class="small-image">
    </div>
    <?php
    include("../capa_negocio/registrar_productos.php");
    ?>
</body>
</html>