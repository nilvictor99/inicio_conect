<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR_PROVEEDORES</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/styli.css">
</head>
<body style="background-image: url('../img/m.jpg'); background-size: cover;">
    <div class="form-container">
        <form method="post">
            <h1>REGISTRAR_PROVEEDORES</h1>
            <label for="nombre_proveedor">Nombre del Proveedor:</label>
        <input type="text" name="nombre_proveedor" required>
        
        <label for="ruc">RUC:</label>
        <input type="text" name="ruc" required>
        
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" required>
        
        <label for="correo">Correo:</label>
        <input type="email" name="correo" required>
        
        <input type="submit" name="register">
        </form>
        <img src="../img/r.jpg" alt="Imagen de encima del formulario" class="small-image">
    </div>
    <?php
    include("../capa_datos/registrar_proveedor.php");
    ?>
</body>
</html>