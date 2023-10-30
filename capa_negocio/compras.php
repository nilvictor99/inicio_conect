<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR_COMPRA</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/styli.css">
</head>
<body style="background-image: url('../img/m.jpg'); background-size: cover;">
    <div class="form-container">
        <form method="post">
            <h1>REGISTRAR_COMPRAS</h1>
            <label for="nombre_producto">Nombre del Producto:</label>
        <input type="text" name="nombre_producto" required>
        
        <label for="cantidad_producto">Cantidad del Producto:</label>
        <input type="number" name="cantidad_producto" required>
        
        <label for="fecha_compra">Fecha de Compra:</label>
        <input type="date" name="fecha_compra" required>
        
        <label for="ruc_proveedor">RUC del Proveedor:</label>
        <input type="text" name="ruc_proveedor" required>
        
        <label for="precio_compra">Precio de Compra:</label>
        <input type="number" step="0.01" name="precio_compra" required>
        <input type="submit" name="register">
        </form>
        <img src="../img/r.jpg" alt="Imagen de encima del formulario" class="small-image">
    </div>
    <?php
    include("../capa_negocio/registrar_compras.php");
    ?>
</body>
</html>